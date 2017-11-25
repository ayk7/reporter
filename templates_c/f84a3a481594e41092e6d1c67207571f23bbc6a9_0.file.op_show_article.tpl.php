<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:30:44
  from "D:\AA10602\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fefb418c9f2_82199817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f84a3a481594e41092e6d1c67207571f23bbc6a9' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510993842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fefb418c9f2_82199817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $_smarty_tpl->tpl_vars['article']->value['username']) {?>
    <div class="alert alert-info text-center">
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=article_form&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">修改</a>
    </div>
    <?php }?>
</div><?php }
}
