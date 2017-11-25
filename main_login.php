<?php
require_once 'header.php';
$page_titles = '登入';
$op          = '';
// session_start();
// die(var_dump($_SESSION));
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
require_once 'footer.php';
