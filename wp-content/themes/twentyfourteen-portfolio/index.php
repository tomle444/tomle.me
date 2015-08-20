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
							<h2 class="entry-title">Featured Work</h2>
							
							<?php 
								query_posts('cat=7&order=DESC' );
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
						
						<div id="viewWork">
						<div class="inner">
							<h2>Portfolio</h2>
							<?php
								query_posts('cat=15');
								while (have_posts()) : the_post();
									//get_template_part( 'content', get_post_format() );
							?>
								<?php $full = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large' ); ?>
								<a class="portfolio-project fancybox" rel="group-fancybox" href="<?php echo $full[0]; ?>" > 
									<div class="portfolio-inner">									
										<?php echo get_the_content(); ?>
										<div class="project-overlay">
												<span class="over-text">
													<?php the_title('<h3>','</h3>'); ?>
												
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
												</span>									
										</div>
									</div>
								</a>
							<?php
								endwhile;
							?>
						</div>
						</div>
						
					</div><!-- #content -->
					<button class="view-more open"><span>+</span></button>
				</div><!-- #primary -->
				
			<?php get_sidebar( 'content' ); ?>
		</div><!-- #main-content -->
	</section>

	<section class="services">
		<div id="services" class="content-area">
			<h2 class="entry-title">What I can do for you</h2>
			<div class="services-container">
				<div class="service service-code">
					<span>HTML/CSS Code</span>
				</div>
				<div class="service service-design">
					<span>Web & Graphic Design</span>
				</div>
				<div class="service service-responsive">
					<span>Responsive Web Design</span>
				</div>
				<div class="service service-logo">
					<span>Logo Design</span>
				</div>
				<div class="service service-ecommerce">
					<span>E-Commerce</span>
				</div>
			</div>
		</div>
		<div id="tools" class="content-area">
			<h2 class="entry-title">My Toolbox</h2>
			<div class="tool tool-sublime">
				<span>Sublime Text</span>
			</div>
			<div class="tool tool-photoshop">
				<span>Photoshop</span>
			</div>
			<div class="tool tool-illustrator">
				<span>Illustrator</span>
			</div>
			<div class="tool tool-magento">
				<span>Magento</span>
			</div>
			<div class="tool tool-wordpress">
				<span>Wordpress</span>
			</div>
			<div class="tool tool-bitbucket">
				<span>Bitbucket</span>
			</div>
		</div>
	</section>
<?php
//get_sidebar();
get_footer();
