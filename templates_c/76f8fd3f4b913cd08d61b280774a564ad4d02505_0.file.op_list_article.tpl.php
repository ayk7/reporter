<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:54:51
  from "D:\AA10602\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe74b8e52f7_49689036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f8fd3f4b913cd08d61b280774a564ad4d02505' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1510991689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe74b8e52f7_49689036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
    <div class="container">

    </div>
</div>

<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <!-- 印出文章標題 -->
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <!-- 定義cover是封面圖名稱11/18 -->
            <!-- 列表用小圖thumb_ &副檔名為admin.php內 insert_article上傳工具的副檔名png -->
            <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <!-- 找該文章的封面圖，存在就放，不存在就找假圖代替11/18 --><img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="cover rounded"> <?php } else { ?>
            <img src="https://picsum.photos/400/200?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="cover rounded">            <?php }?>
            <!-- 設連結可讀出內容 -->
            <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>

            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>
            <!-- 印出摘要11/18 -->
        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

        <h1>No Content.</h1>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}
