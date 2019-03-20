<?php
/*
*
* Template Name: registration
*
*
*/
get_header();
if(defined('REGISTRATION_ERROR')) {
    foreach(unserialize(REGISTRATION_ERROR) as $error) {
        echo "<div class=\"error\">{$error}</div>";
    }
}
  // errors here, if any

elseif(defined('REGISTERED_A_USER')) {
    echo 'a email has been sent to '.REGISTERED_A_USER;
}
?>
<div class="woof-main-content full">
  <h1 class="woofer-page-title">
  Register
</h1>

<form method="post" style="margin:50px;" action="<?php echo add_query_arg('do', 'register', home_url('/')); ?>">
  <label>
    User:
    <input type="text" name="user" value=""/>
  </label>

  <label>
    Password:
    <input type="text" name="pass" value=""/>
  </label>


  <input type="submit" class="sub-btn bestwoof" value="register" />
</form>
</div>
<?php
get_footer();
?>
