<?php
	$current_user = wp_get_current_user();
$currID = $current_user->ID;
    $loop = new WP_Query( array( 'post_type' => 'woof','posts_per_page'=>200) );
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
						<div class="like-counter" id="like-counter">
							<?php
							$nblikes = get_post_meta(get_the_ID(),'nblikes',true);
							if($nblikes){
								echo $nblikes;
							}else{
								echo 0;
							}
							?>
						</div>
          </div>
          <div>
          <?php if(is_user_logged_in()): ?>
            <!-- check which btn needs to be printed out, the follow or the unfollow -->
            <?php
            $usersfollowing = get_user_meta($currID, 'following');
            $autharr = array();
            $inarr = false;
            foreach($usersfollowing[0] as $user){
              if($user == $post->post_author){
                $inarr = true;
              }
            }
            if($inarr): ?>
                <button data-authid="<?php echo the_author_id();?>" class="sub-btn" style="display:none;">Tail
                </button>
                <button data-authid="<?php echo the_author_id();?>" class="unsub-btn">Un-leash
                </button>
            <?php else: ?>
              <button data-authid="<?php echo the_author_id();?>" class="sub-btn" >Tail
              </button>
              <button data-authid="<?php echo the_author_id();?>" class="unsub-btn" style="display:none;" >Un-leash
              </button>
            <?php endif; ?>
            <!-- check which btn needs to be printed out, the like or the unlike -->
            <?php
            $postsliked = get_user_meta($currID, 'likedposts');
            $inarr = false;
            foreach($postsliked[0] as $postl){
              if($postl == get_the_ID()){
                $inarr = true;
              }
            }
            if($inarr): ?>
              <img src="<?php echo get_template_directory_uri()?>/images/bone-hollow.png" data-postid="<?php echo the_ID();?>" class="like" width="40px" height="40px" style="display:none;"></img>
              <img src="<?php echo get_template_directory_uri()?>/images/bone-filled.png" data-postid="<?php echo the_ID();?>" class="unlike" width="50px" height="25px"></img>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()?>/images/bone-hollow.png" data-postid="<?php echo the_ID();?>" class="like" width="40px" height="40px"></img>
              <img src="<?php echo get_template_directory_uri()?>/images/bone-filled.png" data-postid="<?php echo the_ID();?>" class="unlike" width="50px" height="25px" style="display:none;"></img>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>
