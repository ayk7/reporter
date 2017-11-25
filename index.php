<?php
require_once 'header.php'; //載入檔頭
// define('_PAGE_TPL', 'index.tpl'); //定義顯示的頁面
$page_titles = '首頁';
// require_once 'function.php'; //載入function 函數
// require_once 'smarty/libs/Smarty.class.php';
// $smarty = new Smarty;
// // $title  = $_POST['title']; // '尚無文章標題';
// // $smarty->assign('title', $title);

// // $color = $_POST['color'];
// // $smarty->assign('color', $color);
// $db = link_db(); //呼叫函數
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : ''; //filter string
$sn = isset($_REQUEST['sn']) ? intval($_REQUEST['sn']) : 0; //filter sn or directly change type use: (int)$_REQUEST['sn']

switch ($op) {

    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}
// $smarty->assign('now', date('Y/m/d h:i:s A l'));
// $smarty->assign('color', $_GET['c']);
// $smarty->display('index.tpl');
// $smarty->display('index.tpl');
require_once 'footer.php'; //載入檔尾

// ####### Function #########
// 讀取資料
function list_article()
{
    global $db, $smarty;
    $all    = array(); //$all=[]; //建立陣列初始值(PHP7.1初始值不能為空值'')
    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9"; //限制出現9筆11/18
    $result = $db->query($sql) or die($db->error);
    // 設立摘要欄索引值 11/18
    $i = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 30);
        // 判斷內容大於摘要就出現詳全文11/18
        if (mb_strlen($all[$i]['summary']) < mb_strlen($all[$i]['content'])) {
            $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 30) . "...(More)";
        }
        $i++;
        // $smarty->assign('all', $all[]);
        // var_export($data); //var_dump or var_export 印出資料
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}
