<?php
/*
*
* Template Name: explore
*
*
*/
$current_user = wp_get_current_user();
$currID = $current_user->ID;
get_header();
?>
<div class="woof-main-content">
  <h1 class="woofer-page-title">
    Explore
  </h1>
  <?php echo get_template_part( '/template-parts/show-woofs-on-explore' ); ?>
</div>
<div class="woof-sidebar">
  <?php echo get_template_part( '/template-parts/good-boy-of-the-day' ); ?>

</div>

<?php
get_footer();
?>
