<?php
//echo 456;
//phpinfo();
// $title = 'no title';
$title = $_GET['title'];
echo $title;
echo '<br>'; //換行
$money = (int) $_GET['money']; //轉換字串型態to整數
var_dump($money); //打印變數類型&變數
//For example: localhost/reporter/index.php?title=main&money=2345
