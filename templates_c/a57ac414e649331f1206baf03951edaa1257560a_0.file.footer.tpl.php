<?php
/* Smarty version 3.1.30, created on 2017-11-04 06:23:54
  from "D:\AA10602\UniServerZ\www\reporter\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd5cfa4e80e1_45690899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57ac414e649331f1206baf03951edaa1257560a' => 
    array (
      0 => 'D:\\AA10602\\UniServerZ\\www\\reporter\\footer.tpl',
      1 => 1509767564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd5cfa4e80e1_45690899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- online bootstrap.min.css -->
<!-- <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        // random change background image
        var images = ['aircraft.jpg', 'fishing-boat.jpg'];
        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        // // random change title text
        // var txt = ['Hello', 'Welcome'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);


        // $('.img-container').css('background-image', 'url("images/aircraft.jpg")');
        $('.img-container').css('width', $(window).width());
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
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());

        // $('.img-container').height();
        // $('.img-container').width();
    });

<?php echo '</script'; ?>
>
<!-- 假文產生器 http://more.handlino.com/ -->
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
