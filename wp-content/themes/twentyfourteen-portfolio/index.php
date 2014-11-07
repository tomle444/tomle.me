<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="main-content" class="main-content">

	<?php
		if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>

			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
					<div id="work" class="projects-container">
						<h2 class="entry-title">Recent Work</h2>
						<script>
							$(document).ready( function() {
								$('.project').hover( 
								function() {
									$(this).find('.project-overlay').fadeIn(300);
								}, 
								function() { 
									$(this).find('.project-overlay').fadeOut(300);
								});	
							});
						</script>
						<?php 
							query_posts('cat=7');
							while (have_posts()) : the_post();
						?>
							<div class="project <?php echo get_post_meta($post->ID, 'project_title', true); ?>">
												
								
									<div class="project-overlay">
										<div class="project-content">
											<?php the_title('<h3>','</h3>'); ?>
											<?php the_content(); ?>
											<?php
												$posttags = get_the_tags();
												if ($posttags) {
													$numItems = count($posttags);
													$i = 0;
													foreach($posttags as $tag) {
														echo $tag->name;
														if (++$i !== $numItems){
															echo ' | ';
														}
													}
												}
											?>
										</div>
									</div>
							
							</div>

						<?php	
							endwhile;
						?>
					</div>
				<?php
				
					query_posts(array('post__not_in' => array(9), 'cat' => -7));	
					if ( have_posts() ) :
						// Start the Loop.
						
						while ( have_posts() ) : the_post();
							
							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						// Previous/next post navigation.
						twentyfourteen_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>

				</div><!-- #content -->
			</div><!-- #primary -->

		<?php get_sidebar( 'content' ); ?>
	</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
