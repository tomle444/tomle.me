<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<?php get_sidebar( 'footer' ); ?>
			
				
			
			<div id="contact" class="footer-contact">
			<div class="pageWidth overflowHidden marginAuto">
				<h2>Contact</h2>
				<div class="contact-form footer-column">
					<?php echo do_shortcode( '[bestwebsoft_contact_form]' ); ?>
				</div>
				<div class="hire-me footer-column">
					<div class="inner">
						<h3>Hire Me, <span>I am available for new projects</span></h3>
						<p>Get in touch with me about any projects you have in mind.  I am available to take on new work and to help in any way I can to get goals accomplished. Let’s work together and create something.</p>
					</div>
				</div>
			</div>
			</div>
			<div class="site-info">
				<div class="pageWidth overflowHidden marginAuto">
					<div class="footer-social">
						<a href="https://www.linkedin.com/profile/view?id=14393462" target="_blank" class="icon">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve" width="16px" height="16px" class="icon-linkedin" >
					
									<path d="M13,0H3C1.3,0,0,1.3,0,3v10c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3V3C16,1.3,14.7,0,13,0z M6,11.9H4v-7h2V11.9z M5.1,4.4
								C4.5,4.4,4.1,4,4.1,3.5s0.4-0.9,0.9-0.9C5.6,2.6,6,3,6,3.5C6,4,5.6,4.4,5.1,4.4z M13,11.9h-2V7.5c0-0.5-0.1-0.9-0.8-0.9
								C9.2,6.7,9,7.5,9,7.5v4.3H7v-7h2v0.7c0.3-0.2,1-0.7,2-0.7c0.6,0,2,0.4,2,2.7V11.9z"/>				
							</svg> 
						</a>	
						<a href="https://www.linkedin.com/profile/view?id=14393462" target="_blank" class="icon">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve" width="16px" height="16px" class="icon-resume ">				
									
										<path d="M14,0H2C1.4,0,1,0.4,1,1v14c0,0.6,0.4,1,1,1h12c0.6,0,1-0.4,1-1V1C15,0.4,14.6,0,14,0z M14,15H2V1h12V15z"/>
										<path d="M7.5,4h4C11.8,4,12,3.8,12,3.5S11.8,3,11.5,3h-4C7.2,3,7,3.2,7,3.5S7.2,4,7.5,4z"/>
										<path d="M4.5,7h7C11.8,7,12,6.8,12,6.5S11.8,6,11.5,6h-7C4.2,6,4,6.2,4,6.5S4.2,7,4.5,7z"/>
										<path d="M4.5,10h7c0.3,0,0.5-0.2,0.5-0.5S11.8,9,11.5,9h-7C4.2,9,4,9.2,4,9.5S4.2,10,4.5,10z"/>
										<path d="M4.5,13h7c0.3,0,0.5-0.2,0.5-0.5S11.8,12,11.5,12h-7C4.2,12,4,12.2,4,12.5S4.2,13,4.5,13z"/>
												
							</svg>
						</a>
					</div>
					<div class="footer-links"><?php wp_nav_menu( array('menu' => 'Portfolio Links' )); ?></div>
					
					<?php do_action( 'twentyfourteen_credits' ); ?>
					<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 47 47" enable-background="new 0 0 47 47" xml:space="preserve"><polygon points="37.4 32.1 14.9 9.6 19.8 4.7 37.6 22.4 47 13 47 3.9 47 0 43.1 0 3.9 0 0 0 0 3.9 0 24.5 13 11.5 17.8 16.3 14.4 19.7 32.1 37.4 27.2 42.4 9.4 24.6 0 34.1 0 43.1 0 47 3.9 47 43.1 47 47 47 47 43.1 47 22.5 "/></svg></a>
						
					</div>
					<p class="copyright">tomle.me <?php echo date('Y'); ?> 
						<span>All rights reserved.</span> </p>
					
				</div>
			</div><!-- .site-info -->
			
		</footer><!-- #colophon -->
		<div id="uparrow">			
			<div class="arrow-up"></div>
		</div> 
	<?php wp_footer(); ?>
</body>
</html>