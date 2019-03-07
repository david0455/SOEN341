<?php
/**
 * Template Name: User Profile
 *
 * Allow users to update their profiles from Frontend.
 *
 */
 $current_user = wp_get_current_user();
 $currID = $current_user->ID;
get_header();
/* Get user info. */
 $post_id = $post->ID;
if ( isset( $_POST['html-upload'] ) && !empty( $_FILES ) ) {
    require_once(ABSPATH . 'wp-admin/includes/admin.php');
    $id = media_handle_upload('async-upload', $post_id); //post id of Client Files page
    unset($_FILES);
    if ( is_wp_error($id) ) {
        $errors['upload_error'] = $id;
        $id = false;
    }

    if ($errors) {
        echo "<p>There was an error uploading your file.</p>";
    } else {
        update_user_meta($currID,'profilepic',$id);
        echo "<p>Your file has been uploaded.</p>";
    }
}

?>
<?php if(is_user_logged_in()):?>

<h1 style="margin:100px;">
  Current profile picture :
</h1>
<div style="margin:100px;border-radius:50px;width:75px;height:75px;margin-top:0px;">
<?php if(get_user_meta($currID,'profilepic')){
  echo wp_get_attachment_image(get_user_meta($currID,'profilepic')[0]);
}
?>
</div>

    <form id="file-form" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" style="margin:50px;">

    <p id="async-upload-wrap"><label for="async-upload">Change profile pictre :</label>
      <br>
    <input style="margin:20px;" type="file" id="async-upload" name="async-upload"><br> <input style="margin:20px;" type="submit" value="Update" name="html-upload"></p>

    <p><input type="hidden" name="post_id" id="post_id" value="<?php echo $post_id ?>" />
    <?php wp_nonce_field('client-file-upload'); ?>
    <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" /></p>

    <p><input type="submit" value="Save all changes" name="save" style="display: none;"></p>
    </form>
<?php else: ?>
  <h1 style="margin:50px;">
    You need to login !!
  </h1>

<?php endif;?>
