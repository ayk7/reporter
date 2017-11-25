<?php
require_once 'loginheader.php'; //載入login檔頭避免未登入即可進入管理頁面
require_once 'header.php'; //載入檔頭
// define('_PAGE_TPL', 'admin.tpl'); //定義顯示的頁面
$page_titles = '管理頁面';
// require_once 'function.php'; //載入function 函數
// require_once 'smarty/libs/Smarty.class.php';
// $smarty = new Smarty;
// // $title  = $_POST['title']; // '尚無文章標題';
// // $smarty->assign('title', $title);
// $db = link_db(); //呼叫函數
// 變數過濾&初始值設定
// if (isset($_POST['op'])) {
//     $op = htmlspecialchars($_POST['op']);
// } else {
//     $op = '';
// }
// 三元一次運算式
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : ''; //filter string
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0; //filter number (force type to int)
// 判斷式
// if (isset($_POST['op']) and $_POST['op'] == "insert") {
// if ($op == "insert") {
//     // echo 22;
//     // filter
//     // $title   = $db->real_escape_string($_POST['title']);
//     // $content = $db->real_escape_string($_POST['content']);
//     // // send request
//     // $sql = "INSERT INTO `article` (`title`, `content`,`create_time`, `update_time`) VALUES ('{$title}', '{$content}',now(), now())";
//     // $db->query($sql) or die($db->error);
//     // $sn = $db->insert_id;
//     // header("location: index.php?sn={$sn}");
//     // exit; //
//     $sn = insert_artical();
//     header("location: index.php?sn={$sn}");
//     exit; //轉向後要停止才不會繼續執行下面程式
// }
switch ($op) {
    case 'insert':
        $sn = insert_artical();
        header("location: index.php?sn={$sn}");
        exit; //轉向後要停止才不會繼續執行下面程式
    // break; //轉向後用exit而非break
    case 'delete_article': //11/18
        $sn = delete_artical($sn);
        header("location: index.php");
        exit; //轉向後要停止才不會繼續執行下面程式
    case 'article_form';
        break;

    default:
        # code...
        break;
}
// $_POST['title'];
// $_POST['content'];

// $smarty->assign('now', date('Y/m/d h:i:s A l'));

// $smarty->display('admin.tpl');
require_once 'footer.php'; //載入檔尾
// 移至function.php
// // 自訂函數 寫在哪個位置都可以171028
// function link_db()
// {
// // 初始連資料庫
//     $db = new mysqli('localhost', 'root', '12345', 'reporter');
//     if ($db->connect_error) {
//         die('Cannot access DB:' . $db->connect_error);
//     }
//     $db->set_charset("utf8");
// // 回傳資料
//     return $db;
// }

// 新增進資料庫
function insert_artical()
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']); //加入username欄位&插入sql. 11/18
    // send request
    $sql = "INSERT INTO `article` (`title`, `content`,`username`,`create_time`, `update_time`) VALUES ('{$title}',  '{$content}','{$username}',now(), now())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;

    // 判斷是否有檔案 11/18
    if (isset($_FILES)) {

        //使用上傳工具11/18
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            $foo->file_new_name_body = 'cover_' . $sn; //Define new name for big pic
            $foo->image_resize       = true;
            $foo->image_convert      = png; //Define extention file
            $foo->image_x            = 1200; //For big pic
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn; //Define new name for small pic
                $foo->image_resize       = true;
                $foo->image_convert      = png; //Define extention file
                $foo->image_x            = 400; //For resize small pic
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }
        // 非上傳工具
        // $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION); //取得附檔名
        // //判斷資料夾存在否
        // if (!is_dir('uploads')) {
        //     mkdir('uploads');
        // }
        // move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}"); //上傳檔案前先改檔名避免出錯
    }
    return $sn;
}

// 刪除資料11/18
function delete_artical($sn)
{
    global $db;
    // send request
    $sql = "DELETE FROM `article` WHERE sn='{$sn}' and username='{$_SESSION[username]}'";
    $db->query($sql) or die($db->error);
}
