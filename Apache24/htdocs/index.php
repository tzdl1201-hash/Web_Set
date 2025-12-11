<?php
// 設定 Session Cookie 存活時間為 0 (代表瀏覽器關閉即刪除)
session_set_cookie_params(0);
session_start();
require_once 'config.php';

// ==========================================
// 0. 自動登入檢查 (保持登入功能)
// ==========================================
if (!isset($_SESSION['user_id']) && isset($_COOKIE['portal_remember'])) {
    $token = $_COOKIE['portal_remember'];

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if (!$conn->connect_error) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE remember_token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user_row = $result->fetch_assoc();
            // 自動登入成功，設定 Session
            $_SESSION['user_id'] = $user_row['id'];
            $_SESSION['username'] = $user_row['username'];
            $_SESSION['fullname'] = !empty($user_row['fullname']) ? $user_row['fullname'] : $user_row['username'];
            // 注意：自動登入無法取得原始密碼，這會影響 SSO 跳轉 Moodle (Moodle 需要明碼)
            $_SESSION['moodle_password'] = $user_row['password']; 
            $_SESSION['is_admin'] = ($user_row['username'] === 'admin');
        }
        $stmt->close();
    }
    $conn->close();
}

// 1. 登出
if (isset($_GET['logout'])) {
    session_destroy();
    if (isset($_COOKIE['portal_remember'])) {
        setcookie('portal_remember', '', time() - 3600, '/');
    }
    header("Location: logout.php");
    exit;
}

// 2. 登入
$error_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];
    $remember_me = isset($_POST['remember']);

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $conn->set_charset("utf8mb4");
    if ($conn->connect_error) die("DB Error");

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $input_user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_row = $result->fetch_assoc();
        $login_success = false;

        if (password_verify($input_pass, $user_row['password'])) {
            $login_success = true;
        } elseif ($user_row['password'] === $input_pass) {
            $login_success = true;
            // 自動升級加密
            $new_hash = password_hash($input_pass, PASSWORD_DEFAULT);
            $up_stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $up_stmt->bind_param("si", $new_hash, $user_row['id']);
            $up_stmt->execute();
            $up_stmt->close();
        }

        if ($login_success) {
            $_SESSION['user_id'] = $user_row['id'];
            $_SESSION['username'] = $user_row['username'];
            $_SESSION['fullname'] = !empty($user_row['fullname']) ? $user_row['fullname'] : $user_row['username'];
            $_SESSION['moodle_password'] = $input_pass; // SSO 需要明碼
            $_SESSION['is_admin'] = ($user_row['username'] === 'admin');

            if ($remember_me) {
                $token = bin2hex(random_bytes(32));
                setcookie('portal_remember', $token, time() + (86400 * 30), "/");
                $up_stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                $up_stmt->bind_param("si", $token, $user_row['id']);
                $up_stmt->execute();
                $up_stmt->close();
            }

            header("Location: index.php");
            exit;
        } else {
            $error_msg = "帳號或密碼錯誤！";
        }
    } else {
        $error_msg = "帳號或密碼錯誤！";
    }
    $stmt->close();
    $conn->close();
}

// 3. 資料抓取
$my_courses_raw = [];
$history_by_year = [];
$available_courses = [];
$latest_announcements = []; 
$is_admin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;

// 定義呼叫 Moodle 的函數
if (!function_exists('call_moodle')) {
    function call_moodle($url, $token, $func, $params = []) {
        $serverurl = $url . '/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' . $func . '&moodlewsrestformat=json';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $serverurl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($curl);
        curl_close($curl);
        return json_decode($resp, true);
    }
}

// 只有登入且不是管理員時，才去抓資料
if (isset($_SESSION['username']) && !$is_admin) {
    try {
        // 1. 先抓使用者 ID
        $u_params = ['field' => 'username', 'values' => [$_SESSION['username']]];
        $moodle_users = call_moodle($moodle_url, $moodle_token, 'core_user_get_users_by_field', $u_params);

        if (!empty($moodle_users)) {
            $moodle_uid = $moodle_users[0]['id'];
            
            // 2. 抓取我的課程
            $c_params = ['userid' => $moodle_uid];
            $my_courses_raw = call_moodle($moodle_url, $moodle_token, 'core_enrol_get_users_courses', $c_params);

            // 3. 抓取所有課程 (給快速選課用)
            $search_params = ['criterianame' => 'search', 'criteriavalue' => ''];
            $search_result = call_moodle($moodle_url, $moodle_token, 'core_course_search_courses', $search_params);
            $all_courses = isset($search_result['courses']) ? $search_result['courses'] : [];

            // --- 處理學習歷程 ---
            if (!empty($my_courses_raw)) {
                foreach ($my_courses_raw as $course) {
                    $start_ts = isset($course['startdate']) ? $course['startdate'] : 0;
                    $year = ($start_ts > 0) ? date('Y', $start_ts) : '未設定年份';
                    $history_by_year[$year][] = $course;
                }
                krsort($history_by_year);
            }

            // --- 處理快速選課 ---
            $my_course_ids = array_column($my_courses_raw, 'id');
            if (!empty($all_courses) && is_array($all_courses)) {
                foreach ($all_courses as $course) {
                    if (!in_array($course['id'], $my_course_ids) && $course['id'] != 1) {
                        $available_courses[] = $course;
                    }
                }
            }

            // ==========================================
            // ★★★ 公告抓取 (正式版：關閉除錯輸出) ★★★
            // ==========================================
            if (!empty($my_courses_raw)) {
                $course_names = [];
                foreach ($my_courses_raw as $c) {
                    $course_names[$c['id']] = $c['fullname'];
                }
                $course_ids = array_column($my_courses_raw, 'id');
                
                // 步驟 A: 一次抓出所有論壇
                $f_params = ['courseids' => $course_ids];
                $forums = call_moodle($moodle_url, $moodle_token, 'mod_forum_get_forums_by_courses', $f_params);

                if (!empty($forums)) {
                    foreach ($forums as $forum) {
                        // 判斷是否為公告 (News forum 或名稱含公告)
                        if ($forum['type'] === 'news' || strpos($forum['name'], '公告') !== false) {
                            
                            // 步驟 B: 抓取文章
                            $d_params = ['forumid' => $forum['id']];
                            $discussions_data = call_moodle($moodle_url, $moodle_token, 'mod_forum_get_forum_discussions', $d_params);
                            
                            if (isset($discussions_data['discussions'])) {
                                foreach ($discussions_data['discussions'] as $disc) {
                                    $latest_announcements[] = [
                                        'course_name' => isset($course_names[$forum['course']]) ? $course_names[$forum['course']] : '全站公告',
                                        'subject'     => $disc['subject'],
                                        'author'      => $disc['userfullname'],
                                        'date'        => $disc['created'],
                                        'link'        => $moodle_url . '/mod/forum/discuss.php?d=' . $disc['discussion']
                                    ];
                                }
                            }
                        }
                    }
                }
                
                // 排序：最新的在最上面
                usort($latest_announcements, function($a, $b) {
                    return $b['date'] - $a['date'];
                });
                // 只取前 5 筆
                $latest_announcements = array_slice($latest_announcements, 0, 5);
            }
        }
    } catch (Exception $e) {
        // Log error silently
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>慈濟醫療志業學習網</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            margin-top: 70px !important;
            background: #f0f2f5;
            font-family: "Microsoft JhengHei", sans-serif;
        }

        .navbar-fixed-top,
        .fixed-top,
        header.navbar,
        nav.navbar {
            display: none !important;
        }

        #page-wrapper {
            padding-top: 10px !important;
        }

        /* 導覽列 */
        #portal-global-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: #2c7768;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999999;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .pg-brand {
            font-size: 20px;
            font-weight: bold;
            color: white !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .pg-menu {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-left: 20px;
        }

        .pg-link {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.95);
            font-size: 15px;
            padding: 0 15px;
            height: 60px;
            line-height: 60px;
            display: inline-block;
            transition: all 0.2s;
            cursor: pointer;
        }

        .pg-link:hover {
            background-color: rgba(0, 0, 0, 0.1);
            color: white;
        }

        .pg-dropdown {
            position: relative;
            display: inline-block;
            height: 60px;
        }

        .pg-dropdown-content {
            display: none;
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #fff;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-top: 3px solid #f1c40f;
            border-radius: 0 0 5px 5px;
        }

        .pg-dropdown:hover .pg-dropdown-content {
            display: block;
        }

        .pg-dropdown:hover .pg-link {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .pg-dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            border-bottom: 1px solid #eee;
        }

        .pg-dropdown-content a:hover {
            background-color: #f1f1f1;
            color: #2c7768;
            font-weight: bold;
        }

        #pg-right-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f1c40f;
            color: #2c7768;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        .admin-badge {
            background: #d9534f;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 4px;
            margin-left: 5px;
            vertical-align: middle;
        }

        .page-section {
            display: none;
            animation: fadeIn 0.5s;
        }

        .page-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-section {
            background: white;
            padding: 60px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            margin-bottom: 30px;
        }

        .course-card {
            transition: transform 0.2s;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .year-badge {
            background-color: #2c7768;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9em;
        }
        
        /* 公告列表專用樣式 */
        .news-item {
            transition: background-color 0.2s;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
        }
        .news-item:hover {
            background-color: #f8f9fa;
        }
        .news-item:last-child {
            border-bottom: none;
        }
        .news-date {
            font-size: 0.85em;
            color: #999;
            min-width: 90px;
        }
        .news-badge {
            font-size: 0.75em; 
            padding: 3px 8px; 
            border-radius: 4px;
            background-color: #e9ecef;
            color: #495057;
            margin-right: 8px;
        }

        /* 篩選與搜尋控制列樣式 */
        .filter-control-bar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            justify-content: space-between;
        }

        .filter-btn-group {
            display: flex;
            background: #f0f2f5;
            border-radius: 8px;
            padding: 5px;
            gap: 5px;
        }

        .filter-btn {
            border: none;
            background: transparent;
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 500;
            color: #666;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .filter-btn.active {
            background: #f1c40f;
            color: #2c7768;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-wrapper {
            position: relative;
            min-width: 300px;
        }

        .search-wrapper input {
            padding-left: 40px;
            border-radius: 20px;
            border: 1px solid #ddd;
        }

        .search-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        /* 課程分類標籤 */
        .category-label {
            font-size: 12px;
            color: #fff;
            padding: 2px 8px;
            border-radius: 4px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .label-physical {
            background-color: #2c7768;
        }

        .label-digital {
            background-color: #3498db;
        }

        .label-other {
            background-color: #95a5a6;
        }
    </style>
</head>

<body>

    <?php if (!isset($_SESSION['username'])): ?>
        <div class="container mt-5">
            <div class="card mx-auto shadow" style="max-width: 400px; border-top: 5px solid #2c7768;">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4" style="color:#2c7768;">平台登入</h3>
                    <?php if ($error_msg): ?>
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    <?php endif; ?>
                    <form method="post">
                        <div class="mb-3"><label>帳號</label><input type="text" name="username" class="form-control" value=""
                                required></div>
                        <div class="mb-3"><label>密碼</label><input type="password" name="password" class="form-control"
                                value="" required></div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                                <label class="form-check-label" for="rememberMe" style="font-size: 0.9em; color: #666;">
                                    保持登入
                                </label>
                            </div>
                            <a href="<?php echo $moodle_url; ?>/login/forgot_password.php" target="_blank"
                                style="font-size: 0.9em; color: #2c7768; text-decoration: none;">
                                忘記密碼?
                            </a>
                        </div>

                        <button type="submit" class="btn btn-success w-100" style="background-color:#2c7768;">登入</button>
                    </form>
                    <div class="mt-3 text-center"><a href="register.php" class="text-decoration-none"
                            style="color:#2c7768;">立即註冊新帳號 &rarr;</a></div>
                </div>
            </div>
        </div>

    <?php else: ?>
        <form id="moodle_login_form" action="<?php echo $moodle_url; ?>/autologin.php" method="post" target="_top">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
            <input type="hidden" name="password" value="<?php echo $_SESSION['moodle_password']; ?>">
            <input type="hidden" name="wantsurl" id="wantsurl_input" value="">
        </form>

        <div id="portal-global-nav">
            <div style="display:flex; align-items:center;">
                <a onclick="showHome()" class="pg-brand">
                    <i class="fas fa-hospital-alt me-2"></i> 慈濟醫療志業學習網
                    <?php if ($is_admin)
                        echo '<span class="admin-badge">Admin</span>'; ?>
                </a>

                <div class="pg-menu">
                    <?php if ($is_admin): ?>
                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/course/index.php')" class="pg-link"><i
                                class="fas fa-list"></i> 課程列表</a>
                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/course/edit.php?category=2')"
                            class="pg-link"><i class="fas fa-plus-circle"></i> 新增課程</a>

                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/admin/user.php')" class="pg-link"><i
                                class="fas fa-users"></i> 使用者</a>
                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/admin/search.php')" class="pg-link"><i
                                class="fas fa-cogs"></i> 網站管理</a>
                    <?php else: ?>
                        <a onclick="showTab('quick-enroll')" class="pg-link"><i class="fas fa-search-plus"></i> 快速選課</a>
                        <div class="pg-dropdown">
                            <span class="pg-link"><i class="fas fa-book"></i> 學習服務 <i class="fas fa-caret-down"></i></span>
                            <div class="pg-dropdown-content" style="left:0; right:auto;">
                                <a onclick="showTab('my-courses')">📂 我的課程(所有課程)</a>
                                <a onclick="showTab('history')">📜 學習歷程(按年份)</a>
                            </div>
                        </div>

                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/my/')" class="pg-link"><i
                                class="fas fa-tachometer-alt"></i> 儀表板</a>
                        <a href="#" onclick="goToMoodle('<?php echo $moodle_url; ?>/grade/report/overview/index.php')"
                            class="pg-link"><i class="fas fa-chart-line"></i> 成績</a>

                    <?php endif; ?>
                </div>
            </div>

            <div id="pg-right-area">
                <div id="pg-moodle-items" style="display:flex; gap:10px; align-items:center;"></div>
                <div class="pg-dropdown" id="portal-user-menu">
                    <div class="pg-link" style="display:flex; align-items:center; gap:10px;">
                        <span><?php echo htmlspecialchars($_SESSION['fullname']); ?></span>
                        <div class="user-avatar-circle"><?php echo mb_substr($_SESSION['fullname'], 0, 1, "utf-8"); ?></div>
                    </div>
                    <div class="pg-dropdown-content">
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> 登出系統</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">

            <?php if ($is_admin): ?>
                <div class="hero-section">
                    <i class="fas fa-tools" style="font-size: 4rem; color: #d9534f; margin-bottom: 20px;"></i>
                    <h1 class="mb-3">管理員控制台</h1>
                    <p class="lead text-muted mb-4">您目前具有最高權限，可進行課程與帳號管理。</p>
                    <div class="d-flex justify-content-center gap-3">
                        <button class="btn btn-outline-danger btn-lg"
                            onclick="goToMoodle('<?php echo $moodle_url; ?>/admin/search.php')">進入 Moodle 後台</button>
                        <button class="btn btn-danger btn-lg"
                            onclick="goToMoodle('<?php echo $moodle_url; ?>/course/management.php')">課程列表管理</button>
                        <button class="btn btn-warning btn-lg text-white"
                            onclick="goToMoodle('<?php echo $moodle_url; ?>/course/edit.php?category=1')">建立新課程</button>
                    </div>
                </div>
            <?php else: ?>
                <div id="section-home" class="page-section active">
                    <div class="hero-section">
                        <i class="fas fa-graduation-cap" style="font-size: 4rem; color: #2c7768; margin-bottom: 20px;"></i>
                        <h1 class="mb-3">歡迎回來，<?php echo htmlspecialchars($_SESSION['fullname']); ?></h1>
                        <p class="lead text-muted mb-4">請從上方選單選擇功能，或直接點擊下方捷徑。</p>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-outline-success btn-lg" onclick="showTab('my-courses')">查看我的課程</button>
                            <button class="btn btn-primary btn-lg" style="background-color: #2c7768;"
                                onclick="showTab('quick-enroll')">前往選課</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-header bg-white border-bottom-0 pt-4 px-4 pb-0">
                                    <h5 class="fw-bold"><i class="fas fa-bullhorn text-warning me-2"></i>最新公告</h5>
                                </div>
                                <div class="card-body px-2">
                                    <ul class="list-unstyled">
                                        <?php if (empty($latest_announcements)): ?>
                                            <li class="text-center py-5 text-muted">
                                                <i class="far fa-clipboard fa-2x mb-2"></i><br>目前沒有新公告
                                            </li>
                                        <?php else: ?>
                                            <?php foreach ($latest_announcements as $ann): ?>
                                            <li class="news-item p-3 rounded" onclick="goToMoodle('<?php echo $ann['link']; ?>')">
                                                <div class="d-flex align-items-center">
                                                    <div class="news-date">
                                                        <i class="far fa-clock me-1"></i><?php echo date('m/d', $ann['date']); ?>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="news-badge"><?php echo $ann['course_name']; ?></span>
                                                        <span class="fw-medium text-dark"><?php echo $ann['subject']; ?></span>
                                                    </div>
                                                    <div class="text-muted small ms-2">
                                                        <i class="fas fa-chevron-right"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mb-4">
                            <div class="card p-3 h-100 border-0 shadow-sm" style="background: linear-gradient(135deg, #2c7768 0%, #1abc9c 100%); color: white;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                    <i class="fas fa-link fa-3x mb-3 text-white-50"></i>
                                    <h4 class="mb-3">快速連結</h4>
                                    <p class="mb-4 text-white-50">直接存取您的個人儀表板，查看作業與活動。</p>
                                    <button class="btn btn-light text-success fw-bold px-4 py-2 rounded-pill shadow-sm"
                                        onclick="goToMoodle('<?php echo $moodle_url; ?>/my/')">
                                        📂 進入 Moodle 儀表板
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-features" class="page-section">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="history" role="tabpanel">
                            <?php if (empty($history_by_year)): ?>
                                <div class="text-center py-5 text-muted">目前沒有資料</div>
                            <?php else:
                                foreach ($history_by_year as $year => $courses): ?>
                                    <div class="mb-4">
                                        <h4 class="mb-3"><span class="year-badge"><?php echo $year; ?> 年度</span></h4>
                                        <div class="row"><?php foreach ($courses as $course): ?>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card course-card h-100 cursor-pointer"
                                                        onclick="goToMoodle('<?php echo $moodle_url; ?>/course/view.php?id=<?php echo $course['id']; ?>')">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-primary"><?php echo $course['fullname']; ?></h5>
                                                        </div>
                                                    </div>
                                                </div><?php endforeach; ?>
                                            </div>
                                    </div>
                                <?php endforeach; endif; ?>
                        </div>
                        <div class="tab-pane fade" id="my-courses" role="tabpanel">
                            <div class="row"><?php if (empty($my_courses_raw)): ?>
                                    <div class="col-12 text-center text-muted">無課程</div>
                                <?php else:
                                foreach ($my_courses_raw as $course): ?>
                                    <div class="col-md-3 mb-3">
                                        <div class="card course-card h-100 cursor-pointer"
                                            onclick="goToMoodle('<?php echo $moodle_url; ?>/course/view.php?id=<?php echo $course['id']; ?>')">
                                            <div style="height: 5px; background-color: #2c7768;"></div>
                                            <div class="card-body">
                                                <h6 class="card-title fw-bold"><?php echo $course['fullname']; ?></h6>
                                            </div>
                                        </div>
                                    </div><?php endforeach; endif; ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="quick-enroll" role="tabpanel">

                            <div class="filter-control-bar">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="fw-bold text-secondary">課程類型：</span>
                                    <div class="filter-btn-group">
                                        <button class="filter-btn active" onclick="filterCourses('all', this)">全部</button>
                                        <button class="filter-btn" onclick="filterCourses('physical', this)">實體</button>
                                        <button class="filter-btn" onclick="filterCourses('digital', this)">數位</button>
                                    </div>
                                </div>
                                <div class="search-wrapper">
                                    <i class="fas fa-search"></i>
                                    <input type="text" id="courseSearchInput" class="form-control" placeholder="搜尋課程名稱..."
                                        onkeyup="filterCourses()">
                                </div>
                            </div>

                            <div class="row" id="available-courses-container">
                                <?php if (empty($available_courses)): ?>
                                    <div class="col-12 text-center text-muted py-5">
                                        <i class="fas fa-box-open fa-3x mb-3"></i><br>目前沒有可選修的新課程
                                    </div>
                                <?php else:
                                    foreach ($available_courses as $course):
                                        // 判斷類別 (API 回傳)
                                        $catName = isset($course['categoryname']) ? $course['categoryname'] : (isset($course['displayname']) ? $course['displayname'] : '其他');

                                        // 智慧判斷標籤
                                        $typeTag = 'other';
                                        $typeLabel = '一般';
                                        if (strpos($catName, '實體') !== false) {
                                            $typeTag = 'physical';
                                            $typeLabel = '實體';
                                        } elseif (strpos($catName, '數位') !== false || strpos($catName, '線上') !== false) {
                                            $typeTag = 'digital';
                                            $typeLabel = '數位';
                                        }
                                        ?>
                                        <div class="col-md-6 mb-3 course-item" data-type="<?php echo $typeTag; ?>"
                                            data-name="<?php echo strtolower($course['fullname']); ?>">
                                            <div class="card course-card h-100 border-primary position-relative">
                                                <div class="card-body d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h5 class="card-title mb-1"><?php echo $course['fullname']; ?></h5>
                                                        <small class="text-muted"><i class="fas fa-folder"></i>
                                                            <?php echo $catName; ?></small>
                                                    </div>
                                                    <button class="btn btn-outline-primary btn-sm"
                                                        onclick="goToMoodle('<?php echo $moodle_url; ?>/enrol/index.php?id=<?php echo $course['id']; ?>')">我要選課</button>
                                                </div>
                                                <span
                                                    class="category-label label-<?php echo $typeTag; ?>"><?php echo $typeLabel; ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; endif; ?>

                                <div id="no-result-msg" class="col-12 text-center text-muted py-5" style="display:none;">
                                    <i class="fas fa-search fa-2x mb-2"></i><br>找不到符合條件的課程
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>
        </div>

        <script>
            function goToMoodle(targetUrl) {
                document.getElementById('wantsurl_input').value = targetUrl;
                document.getElementById('moodle_login_form').submit();
            }
            function showHome() {
                var home = document.getElementById('section-home');
                var feats = document.getElementById('section-features');
                if (home) home.classList.add('active');
                if (feats) feats.classList.remove('active');
            }
            function showTab(tabId) {
                var home = document.getElementById('section-home');
                var feats = document.getElementById('section-features');
                if (home) home.classList.remove('active');
                if (feats) feats.classList.add('active');
                document.querySelectorAll('.tab-pane').forEach(function (tab) { tab.classList.remove('show', 'active'); });
                var target = document.getElementById(tabId);
                if (target) target.classList.add('show', 'active');
            }

            // JS 篩選功能
            var currentFilterType = 'all';

            function filterCourses(type, btnElement) {
                // 切換按鈕狀態
                if (type) {
                    currentFilterType = type;
                    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                    if (btnElement) btnElement.classList.add('active');
                }

                var searchInput = document.getElementById('courseSearchInput').value.toLowerCase();
                var items = document.querySelectorAll('.course-item');
                var visibleCount = 0;

                items.forEach(function (item) {
                    var itemType = item.getAttribute('data-type');
                    var itemName = item.getAttribute('data-name');

                    // 邏輯：(類型符合 OR 選全部) AND (名稱包含搜尋字串)
                    var typeMatch = (currentFilterType === 'all') || (itemType === currentFilterType);
                    var nameMatch = itemName.includes(searchInput);

                    if (typeMatch && nameMatch) {
                        item.style.display = 'block';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                // 顯示無結果訊息
                var noResult = document.getElementById('no-result-msg');
                if (noResult) {
                    noResult.style.display = (visibleCount === 0) ? 'block' : 'none';
                }
            }

            window.addEventListener('load', function () {
                const urlParams = new URLSearchParams(window.location.search);
                const tab = urlParams.get('tab');
                if (tab) { showTab(tab); }
            });
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>