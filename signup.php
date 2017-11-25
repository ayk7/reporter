<?php
require_once 'header.php'; //載入檔頭
// define('_PAGE_TPL', 'index.tpl'); //定義顯示的頁面
$page_titles = '註冊';
$op          = '';
if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();
}
require_once 'footer.php';
