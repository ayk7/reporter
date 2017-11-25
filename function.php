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

//讀取單一文章 11/25從index.php移動過來for admin use also
function show_article($sn)
{
    global $db, $smarty;
    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql             = "SELECT * FROM `article` WHERE `sn`= '$sn'";
    $result          = $db->query($sql) or die($db->error);
    $data            = $result->fetch_assoc();
    $data['content'] = $purifier->purify($data['content']); //過濾再送去樣板
    $smarty->assign('article', $data);
}
