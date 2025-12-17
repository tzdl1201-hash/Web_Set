<?php
// config.php - 設定檔

// 1. 資料庫設定 (連接你的 MariaDB portal_db)
$db_host = 'localhost';
$db_user = 'root';        // 你的 MariaDB 帳號 (通常是 root)
$db_pass = 'root123';            // 你的 MariaDB 密碼 (如果沒設就留空)
$db_name = 'portal_db';

// 2. Moodle 設定
$moodle_url = 'http://localhost:8080/moodle'; // 請改成你 Moodle 的實際網址
$moodle_token = '739c2f313a2bc1e10427e3fe863749f4'; // 剛剛在 Moodle 產生的那串亂碼 Token
?>