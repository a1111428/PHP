<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mail_system";

$link = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($link->connect_error) {
    die("資料庫連線失敗: " . $link->connect_error);
}

// 設定編碼，確保中文不亂碼
$link->set_charset("utf8mb4");
?>
