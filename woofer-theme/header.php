<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woofer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<header>
		<div id="site-navigation">
			<div id="woof-menu-hamburger">
			</div>
			<div id="exit-btn">
			</div>
			<div id="menu-items">
				<?php
				$menus = get_nav_menu_items_by_location('left_menu');
				foreach($menus as $menu):
					$name = $menu->title;
					$link = $menu->url;
					?>
					<a href="<?php echo $link?>" class="woof-menu-item"><?php echo $name ?></a>
					<?php
				endforeach;
				?>
			</div>
			<img src="<?php echo get_template_directory_uri();?>/images/woofer-logo.png" class="nav-brand" />
			<?php if(is_user_logged_in()):?>
				<a href="<?php echo wp_logout_url(site_url()); ?>" class="woof-menu-item right">Logout</a>
			<?php else: ?>
				<a href="https://orphic.ca/soen341/login/" class="woof-menu-item right">Login</a>
				<a href="https://orphic.ca/soen341/new-user/" class="woof-menu-item right">Create account</a>
			<?php endif; ?>
		</div>
		<?php if(is_user_logged_in()):?>
			<div style="position:absolute;right:10px;margin-top:90px;font-size:10px;font-weight:300;z-index:99;">
				<?php
				$current_user = wp_get_current_user();
				?>
				Currently logged in as : <?php echo $current_user->display_name; ?>
			</div>
		<?php endif; ?>
	</header>
