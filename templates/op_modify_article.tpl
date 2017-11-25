<script src="ckeditor/ckeditor.js"></script>
<!-- <textarea name="content" id="content"></textarea> -->

<form action="admin.php" method="post" enctype="multipart/form-data">
    <!-- ↑檔案上傳要加編碼enctype才可傳，否則變二進位11/18 -->
    <div class="form-group">
        <!-- <label for="title" class="col-form-label sr-only">Title</label> -->
        <input type="text" class="form-control" name="title" id="title" placeholder="Please enter title." value="{$article.title}">
    </div>
    <div class="form-group">
        <!-- <label for="content" class="col-form-label sr-only">Content</label> -->
        <textarea name="content" id="content" rows="20" cols="10" class="form-control" placeholder="請輸入文章內容" style="background-color:#dddddd">{$article.content}</textarea>
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
        <!-- hidden field for programming skill to load from DB -->
        <input type="hidden" name="sn" value="{$article.sn}">
        <!-- hidden field for programming skill to update into DB -->
        <input type="hidden" name="op" value="update">
        <!-- Add new hidden field for username 11/18 -->
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary ">更新</button>
    </div>
</form>
<script>
    CKEDITOR.replace('content');

</script>