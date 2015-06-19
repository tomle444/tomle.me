<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="body">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">


				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>


				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. ', 'twentyfourteen' ); ?></p>

					
				</div><!-- .page-content -->

			</div><!-- #content -->
		</div><!-- #primary -->
	</div>
</section>
<?php
get_sidebar( 'content' );
//get_sidebar();
get_footer();
