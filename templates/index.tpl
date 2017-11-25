<!doctype html>
<html lang="en">

<head>
    {include file="header.tpl"}

</head>

<body>
    <!-- 選單 -->
    {include file="nav.tpl"}

    <!-- 假文產生器內容 http://more.handlino.com/ -->
    <!-- <div class="container">
        <h2 class="lipsum(1,5-10) my-3"></h2>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
    </div> -->

    <!-- <div class="container"> -->
    <!-- {if $op=="show_article"} -->
    <!-- {else}
     {/if} -->

    <!-- </div> -->
    <!-- 自動載入op對應的樣板值 -->
    {include file="op_`$op`.tpl"} {include file="footer.tpl"}
</body>

</html>