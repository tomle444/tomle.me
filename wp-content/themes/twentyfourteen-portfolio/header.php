<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oregano:400,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript">

		$(document).ready(function () {
				

				$('.contact-link').click(function(){

					$('html, body').stop().animate({
						scrollTop: $('#contact').offset().top -100
					}, 1000);
					return false;
				});
			
				$('.work-link').click(function(){

					$('html, body').stop().animate({
						scrollTop: $('#work').offset().top -100
					}, 1000);
					return false;
				});		

				$('.home-link').click(function(){

					$('html, body').stop().animate({
						scrollTop: $('html').offset().top 
					}, 1000);
					return false;
				});

		});

	</script>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo get_home_url(); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="header" role="banner">
		<div class="header-main">
			<h1 class="site-title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php /* bloginfo( 'name' ); */ ?>Tom Le</a></h1>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header><!-- #masthead -->
	<?php if ( is_front_page() && is_home() ): ?>
		<section id="mainHero">
			<section class="overlay">
				<div class="intro">
					<?php $intro_post = new WP_Query( 'p=9' ); ?>
					<?php while ($intro_post->have_posts()) : $intro_post->the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile;?>
					<?php wp_reset_postdata(); ?>
					<button class="continue work-link" >Continue</button>
				</div>
			</section>
		</section>
	<?php endif; ?>
	<section class="body">
	<div id="main" class="site-main">
