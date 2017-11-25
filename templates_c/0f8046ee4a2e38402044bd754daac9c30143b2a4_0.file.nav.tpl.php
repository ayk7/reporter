<?php
/* Smarty version 3.1.30, created on 2017-11-25 01:13:12
  from "D:\AA10602\UniServerZ\www\reporter\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18c3a8768038_28445992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8046ee4a2e38402044bd754daac9c30143b2a4' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\nav.tpl',
      1 => 1510993944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18c3a8768038_28445992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark p-0 sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- 加入logo圖 -->
    <a class="navbar-brand" href="index.php">
        <img alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" src="images/logo.png" class="img-fluid">
    </a>
    <!-- 包住menu -->
    <div class="collapse navbar-collapse" id="menu">

        <!-- 分邊--左方menu -->
        <div class="navbar-nav mr-auto">

            <a href="index.php" class="nav-link">首頁</a>
            <!-- <a href="gallery.php" class="nav-link">圖輯</a> -->
            <a href="gallery.php" class="nav-link">編輯精選</a>
            <a href="index.php" class="nav-link">街巷故事</a>
            <a href="index.php" class="nav-link">市井觀點</a>
            <a href="index.php" class="nav-link">私房知識塾</a>
        </div>
        <!-- 分邊--右方menu -->
        <div class="navbar-nav">
            <!-- 判斷使用者登入否 -->
            <?php if (isset($_SESSION['username'])) {?>
            <a href="admin.php?op=article_form" class="nav-link">發佈</a>
            <a href="logout.php" class="nav-link" style="color:darkorange">登出 <?php echo $_SESSION['username'];?>
</a>
            <!-- 無登入顯示 -->
            <?php } else { ?>
            <a href="signup.php" class="nav-link text-white">註冊</a>
            <a href="main_login.php" class="nav-link text-white">登入</a> <?php }?>
        </div>
    </div>
</nav><?php }
}
