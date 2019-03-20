<h2 class="sidebar-title">
  Best Boy of the day
</h2>
<?php
$args = array(
        'orderby' => 'ID',
        'role' => 'woofer',
        'fields' => 'ID'
    );

$users = get_users($args);
$id = $users[0];
$userbest = get_user_by('id', $id);
if(get_user_meta($id, 'profilepic')) :
    ?>
  <div class="profile-pic-container bestwoof">
    <?php
    echo wp_get_attachment_image(get_user_meta($id, 'profilepic')[0]);
    ?>
  </div>
    <?php
endif;
echo '<br>' . $userbest->nickname . '&nbsp;&nbsp;&nbsp;<br>';
if(is_user_logged_in()) :

    $current_user = wp_get_current_user();
    $currID = $current_user->ID;
    $usersfollowing = get_user_meta($currID, 'following');
    $autharr = array();
    $inarr = false;
    foreach($usersfollowing[0] as $user){
        if($user == $id) {
            $inarr = true;
        }
    }
    if($inarr) : ?>
    <button data-authid="<?php echo $id;?>" class="sub-btn bestwoof" style="display:none;">Tail
    </button>
    <button data-authid="<?php echo $id;?>" class="unsub-btn bestwoof">Un-leash
    </button>
    <?php else: ?>
  <button data-authid="<?php echo $id;?>" class="sub-btn bestwoof" >Tail
  </button>
  <button data-authid="<?php echo $id;?>" class="unsub-btn bestwoof" style="display:none;" >Un-leash
  </button>
    <?php endif; ?>
<?php endif; ?>
