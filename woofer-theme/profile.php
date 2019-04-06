<?php
/*
*
* Template Name: profile
*
*
*/
get_header();
?>
<?php if(is_user_logged_in()) :?>
  <div class="woof-main-content full">

  <h1 class="woofer-page-title">
    Post a woof
  </h1>
  <form method="POST" style=padding:50px;>
      <textarea value="" rows="3" class="input-xlarge woof-post" name='text'>

      </textarea>

      <div>
        <button class="btn btn-primary sub-btn bestwoof">Woof!</button>
      </div>
      <input type="hidden" name="action" value="woof" />
   </from>

    <?php echo get_template_part('/template-parts/show-woofs-on-profile'); ?>
</div>
<?php else: ?>
  <div class="woof-main-content full">

    <h1 class="woofer-page-title">
    You need to login !!
  </h1>
</div>
<?php endif;?>


<?php
get_footer();
?>
