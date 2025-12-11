<?php
session_start();
require_once 'config.php';

$msg = '';
$msg_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);

    // 1. 基本檢查
    if (empty($username) || empty($password) || empty($fullname) || empty($email)) {
        $msg = "所有欄位都是必填的！";
        $msg_type = "danger";
    } else {
        // 連線資料庫
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $conn->set_charset("utf8mb4");

        // 2. 檢查帳號是否已經存在 (外層)
        $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $check->bind_param("s", $username);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $msg = "這個帳號 ($username) 已經有人使用了，請換一個。";
            $msg_type = "warning";
        } else {
            // ★★★ 關鍵修改：加密密碼存入本地 DB ★★★
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // 3. 寫入外層資料庫 (portal_db) - 存入加密後的亂碼
            $stmt = $conn->prepare("INSERT INTO users (username, password, fullname, email) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $hashed_password, $fullname, $email);
            
            if ($stmt->execute()) {
                // 外層建立成功，接著同步到 Moodle
                $last_name  = mb_substr($fullname, 0, 1, "utf-8"); // 取第一個字當姓
                $first_name = mb_substr($fullname, 1, null, "utf-8"); // 剩下的字當名
                
                // --- 4. 呼叫 Moodle API 建立使用者 ---
                $moodle_user_data = [
                    'users' => [
                        [
                            'username'    => $username,
                            'password'    => $password, // 傳給 Moodle 必須是「明碼」，Moodle 會自己加密
                            'firstname'   => $first_name,
                            'lastname'    => $last_name,
                            'email'       => $email,
                            'auth'        => 'manual', 
                        ]
                    ]
                ];

                $serverurl = $moodle_url . '/webservice/rest/server.php' . '?wstoken=' . $moodle_token . '&wsfunction=core_user_create_users&moodlewsrestformat=json';
                
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $serverurl);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($moodle_user_data));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $resp = curl_exec($curl);
                curl_close($curl);
                
                $moodle_result = json_decode($resp, true);

                // 檢查 Moodle 是否建立成功
                if (isset($moodle_result['exception'])) {
                    // Moodle 報錯 (通常是密碼太簡單)
                    $msg = "外層註冊成功，但同步 Moodle 失敗：" . $moodle_result['message'];
                    $msg_type = "warning";
                } else {
                    $msg = "註冊成功！請使用新帳號登入。";
                    $msg_type = "success";
                    // 2秒後跳轉回登入頁
                    header("refresh:2;url=index.php");
                }

            } else {
                $msg = "資料庫錯誤：" . $conn->error;
                $msg_type = "danger";
            }
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>註冊新帳號</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f0f2f5; display: flex; align-items: center; min-height: 100vh; }
        .register-card { max-width: 500px; margin: auto; border-top: 5px solid #2c7768; }
        .btn-primary { background-color: #2c7768; border-color: #2c7768; }
    </style>
</head>
<body>

<div class="container">
    <div class="card register-card shadow">
        <div class="card-body p-5">
            <h3 class="text-center mb-4" style="color:#2c7768;">註冊學員帳號</h3>
            
            <?php if($msg): ?>
                <div class="alert alert-<?php echo $msg_type; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label>帳號 (Username)</label>
                    <input type="text" name="username" class="form-control" required placeholder="例如：student2">
                </div>
                <div class="mb-3">
                    <label>密碼 (Password)</label>
                    <input type="password" name="password" class="form-control" required placeholder="需包含大小寫英文與特殊符號 (Moodle要求)">
                    <small class="text-muted">建議使用複雜一點的密碼，例如：Test@1234</small>
                </div>
                <div class="mb-3">
                    <label>真實姓名 (Fullname)</label>
                    <input type="text" name="fullname" class="form-control" required placeholder="例如：王小明">
                </div>
                <div class="mb-3">
                    <label>電子信箱 (Email)</label>
                    <input type="email" name="email" class="form-control" required placeholder="name@example.com">
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-lg mb-3">立即註冊</button>
            </form>
            
            <div class="text-center">
                <a href="index.php" class="text-decoration-none">已經有帳號了？返回登入</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>