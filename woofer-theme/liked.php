<?php
/*
*
* Template Name: liked
*
*
*/
get_header();
?>
<?php if(is_user_logged_in()) :?>
  <div class="woof-main-content full">
  <h1 class="woofer-page-title">
    Displaying the woofs I gave a bone to.
  </h1>
  <div class="woof-main-content full">

    <?php echo get_template_part('/template-parts/show-woofs-on-liked'); ?>

    <?php else: ?>
    <div class="woof-main-content full">

  <h2 class="woofer-page-title">
    You need to login !!
  </h2>
  <div class="woof-main-content full">

    <?php endif;?>


<?php
get_footer();
?>
