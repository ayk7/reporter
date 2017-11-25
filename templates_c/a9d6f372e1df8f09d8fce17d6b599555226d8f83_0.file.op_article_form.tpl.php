<?php
/* Smarty version 3.1.30, created on 2017-11-18 03:59:55
  from "D:\AA10602\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fb03bd7d9a2_23546529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d6f372e1df8f09d8fce17d6b599555226d8f83' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1510972935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fb03bd7d9a2_23546529 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<!-- <textarea name="content" id="content"></textarea> -->

<form action="admin.php" method="post" enctype="multipart/form-data">
    <!-- ↑檔案上傳要加編碼enctype才可傳，否則變二進位11/18 -->
    <div class="form-group">
        <!-- <label for="title" class="col-form-label sr-only">Title</label> -->
        <input type="text" class="form-control" name="title" id="title" placeholder="Please enter title.">
    </div>
    <div class="form-group">
        <!-- <label for="content" class="col-form-label sr-only">Content</label> -->
        <textarea name="content" id="content" rows="20" cols="10" class="form-control" placeholder="請輸入文章內容" style="background-color:#dddddd"></textarea>
        <!-- 設透明 background:rgba(0,0,0,0.5)"> or background:transparent -->
        <!-- <input type="text" class="form-control" name="content" id="content" placeholder="Please enter content.">
                    </input> -->
    </div>
    <!-- Add file uploader to upload pic 11/18 -->
    <div class="form-group">
        <label for="title" class="col-form-label sr-only" style="color:black">封面照</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="Please upload pic.">
    </div>
    <!-- 置中 -->
    <div class="text-center">
        <!-- hidden field for programming skill to insert into DB -->
        <input type="hidden" name="op" value="insert">
        <!-- Add new hidden field for username 11/18 -->
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
</form>
<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

<?php echo '</script'; ?>
><?php }
}
