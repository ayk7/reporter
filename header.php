<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once 'function.php'; //載入function 函數
require_once 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;

$db = link_db(); //呼叫函數

// 自動找樣板檔
// 原本為:define('_PAGE_TPL', 'index.tpl'); //定義顯示的頁面
define('_PAGE_TPL', str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
