<h2 class="woofer-page-title">
  Displaying my woofs
</h2>
<?php
$current_user = wp_get_current_user();
$currID = $current_user->ID;
    $loop = new WP_Query( array( 'post_type' => 'woof','author'=> $current_user->ID) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="woof-container">
          <?php if(get_user_meta(get_the_author_meta('ID') ,'profilepic')):?>
            <div class="profile-pic-container">
              <?php
              echo wp_get_attachment_image(get_user_meta(get_the_author_meta('ID') ,'profilepic')[0]);
              ?>
            </div>
          <?php endif; ?>
          <div class="woof-content-container">
            <?php echo the_author_nickname(); ?>
            <div style="color:black;font-weight:400;">
              <?php echo the_content(); ?>
            </div>
          </div>
        </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>
