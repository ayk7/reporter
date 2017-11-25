<?php

$smarty->assign('op', $op); //assign op to show in webpage 有畫面
$smarty->assign('Title', $page_titles);
$smarty->display(_PAGE_TPL);
