<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see twentyfourteen_content_width()
 *
 * @since Twenty Fourteen 1.0
 */

if ( ! function_exists( 'twentyfourteen_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_posted_on() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>';
	}

	// Set up and print post meta information.
	printf( '<span class="entry-date">%3$s</time></span> <span class="byline"><span class="author vcard">%5$s</span></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);
}
endif;

/* Sample Hook/Function */
/*add_action('wp_head', 'actionhook_example');

function actionhook_example(){
	echo '<meta name="description" content="Our New Meta Description">';
}*/



/* Add custom JS files */
function twentyfourteen_child_scripts() {

	wp_enqueue_script('jquery_js', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
	wp_enqueue_script('extra_js', get_stylesheet_directory_uri() . '/js/SmoothScroll.js');
	wp_enqueue_script('all_js', get_stylesheet_directory_uri() . '/js/all.js');
	wp_enqueue_script('fancybox_js', get_stylesheet_directory_uri() . '/js/jquery.fancybox.js');
	wp_enqueue_script('fancyboxpack_js', get_stylesheet_directory_uri() . '/js/jquery.fancybox.pack.js');
}

add_action( 'wp_enqueue_scripts', 'twentyfourteen_child_scripts' );

function twentyfourteen_custom_css() {
	wp_register_style('extra_css', get_stylesheet_directory_uri() . '/css/jquery.fancybox.css');
	wp_enqueue_style('extra_css', get_stylesheet_directory_uri() . '/css/jquery.fancybox.css');
}

add_action( 'wp_enqueue_scripts', 'twentyfourteen_custom_css' );



