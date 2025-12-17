<?php
// api/get_moodle_data.php - 非同步取得 Moodle 資料的 JSON API

session_set_cookie_params(0);
session_start();

// 載入核心模組
require_once '../includes/config.php';
require_once '../includes/functions.php';
require_once '../includes/moodle_api.php';

// 設定 JSON header
header('Content-Type: application/json; charset=utf-8');

// CORS 設定 (如果需要跨域請求)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

// 檢查使用者是否登入
if (!isset($_SESSION['username'])) {
    http_response_code(401);
    echo json_encode([
        'success' => false,
        'error' => 'Not authenticated',
        'message' => '請先登入'
    ]);
    exit;
}

// 檢查是否為管理員
$is_admin = isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : false;

if ($is_admin) {
    // 管理員不需要資料
    echo json_encode([
        'success' => true,
        'is_admin' => true,
        'data' => [
            'my_courses_raw' => [],
            'history_by_year' => [],
            'available_courses' => [],
            'latest_announcements' => [],
            'curriculum_status' => []
        ]
    ]);
    exit;
}

try {
    // 取得 Moodle 資料 (使用平行 API 請求)
    $moodle_data = fetch_moodle_data();

    // 回傳成功結果
    echo json_encode([
        'success' => true,
        'is_admin' => false,
        'data' => $moodle_data,
        'cached' => isset($_SESSION['moodle_cache_time']),
        'cache_age' => isset($_SESSION['moodle_cache_time'])
            ? (time() - $_SESSION['moodle_cache_time'])
            : null
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (Exception $e) {
    // 錯誤處理
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Server error',
        'message' => '無法取得 Moodle 資料',
        'details' => $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);

    error_log("API Error: " . $e->getMessage());
}
?>