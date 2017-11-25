<nav class="navbar navbar-expand-md navbar-dark bg-dark p-0 sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- 加入logo圖 -->
    <a class="navbar-brand" href="index.php">
        <img alt="{$title}" src="images/logo.png" class="img-fluid">
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
            {if isset($smarty.session.username)}
            <a href="admin.php?op=article_form" class="nav-link">發佈</a>
            <a href="logout.php" class="nav-link" style="color:darkorange">登出 {$smarty.session.username}</a>
            <!-- 無登入顯示 -->
            {else}
            <a href="signup.php" class="nav-link text-white">註冊</a>
            <a href="main_login.php" class="nav-link text-white">登入</a> {/if}
        </div>
    </div>
</nav>