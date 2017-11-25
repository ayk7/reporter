<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:54:51
  from "D:\AA10602\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe74b8be1e4_90228205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a94f888762d389c1097516c37234452ffe71228' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510991683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0fe74b8be1e4_90228205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>

<body>
    <!-- 選單 -->
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- 假文產生器內容 http://more.handlino.com/ -->
    <!-- <div class="container">
        <h2 class="lipsum(1,5-10) my-3"></h2>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
    </div> -->

    <!-- <div class="container"> -->
    <!-- <?php if ($_smarty_tpl->tpl_vars['op']->value == "show_article") {?> -->
    <!-- <?php } else { ?>
     <?php }?> -->

    <!-- </div> -->
    <!-- 自動載入op對應的樣板值 -->
    <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
