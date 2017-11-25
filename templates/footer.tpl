<!-- for setting footer css before page bottom -->
<div class="footer"></div>
<footer class="bg-dark text-white fixed-bottom">

    <!-- column over 12 will add a new row to put column-->
    <div class="container">
        <!-- 「臺南公民智庫」是一個全新的概念，有效地運用社大的公民教育場域、加上民間NGO、專業學者，成為一個具有研究與提供思考與政策方向的機構，並兼具有行動力及參與城市運作的社會機能。 -->
        <div class="my-3 d-none d-sm-block">以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。</div>
        <div class="my-2 d-block d-sm-none text-center">台南市公民傳播媒體的草根平台</div>
    </div>
</footer>
<!-- online bootstrap.min.css -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script> -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        // random change background image
        // var images = ['aircraft.jpg', 'fishing-boat.jpg'];
        // $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        // // random change title text
        // var txt = ['Hello', 'Welcome'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);


        // $('.img-container').css('background-image', 'url("images/aircraft.jpg")');
        // $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
        // $('.img-container').css('width', '200px');
        // $('.img-container').css('height', '200px');
        // automatically produce h
        // $('.img-container').height();
        // $('.img-container').width();
    });
    $(window).resize(function () {
        //change image
        // $('.img-container').css('background-image', 'url("images/fishing-boat.jpg")');
        // $('.img-container').css('width', '200px');
        // automatically resize image if window resize
        // $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());

        // $('.img-container').height();
        // $('.img-container').width();
    });

</script>
<!-- 假文產生器 http://more.handlino.com/ -->
<!-- <script src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"></script> -->