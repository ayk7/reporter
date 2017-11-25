<?php
/* Smarty version 3.1.30, created on 2017-11-11 03:26:40
  from "D:\AA10602\UniServerZ\www\reporter\templates\verifyuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a066df0a6b7b8_37324164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e542526f08a180cebf8520ea28a4e7b9240d8e' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\verifyuser.tpl',
      1 => 1510370790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a066df0a6b7b8_37324164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>

<body>

    <div class="img-container">
        <div class="container">
            <!-- 選單 -->
            <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="pt-5">巷集談-街道新聞</h1>
            <p style="color:yellowgreen"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
