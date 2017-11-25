<?php
// 自訂函數 寫在哪個位置都可以171028
function link_db()
{
// 初始連資料庫
    $db = new mysqli('localhost', 'root', '12345', 'reporter');
    if ($db->connect_error) {
        die('Cannot access DB:' . $db->connect_error);
    }
    $db->set_charset("utf8");
// 回傳資料
    return $db;
}
