<div class="img-container">
    <div class="container">

    </div>
</div>

<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <!-- 印出文章標題 -->
    <div class="row">
        {foreach $all as $article}
        <div class="col-sm-4">
            <!-- 定義cover是封面圖名稱11/18 -->
            <!-- 列表用小圖thumb_ &副檔名為admin.php內 insert_article上傳工具的副檔名png -->
            {assign var="cover" value="uploads/thumb_`$article.sn`.png"} {if file_exists($cover)}
            <!-- 找該文章的封面圖，存在就放，不存在就找假圖代替11/18 --><img src="{$cover}" alt="{$article.title}" class="cover rounded"> {else}
            <img src="https://picsum.photos/400/200?image={$article@index}" alt="{$article.title}" class="cover rounded">            {/if}
            <!-- 設連結可讀出內容 -->
            <h3><a href="index.php?sn={$article.sn}">{$article.title}</a></h3>

            <p>{$article.summary}</p>
            <!-- 印出摘要11/18 -->
        </div>
        {foreachelse}
        <h1>No Content.</h1>
        {/foreach}
    </div>
</div>