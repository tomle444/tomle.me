/* All.js */

$( document ).ready(function() {
	
	/* Body Scrolling */
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

		$('.service-link').click(function(){

			$('html, body').stop().animate({
				scrollTop: $('#services').offset().top -100
			}, 1000);
			return false;
		});

	/* Recent Work Hover */
	$('.project').hover( 
		function() {
			$(this).find('.project-overlay').fadeIn(300);
		}, 
		function() { 
			$(this).find('.project-overlay').fadeOut(300);
		}
	);	

	/* Scroll To Top */

		// hide #back-top first
		$("#uparrow").hide();

		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 340) {
					$('#uparrow').fadeIn();
				} else {
					$('#uparrow').fadeOut();
				}
			});

			// scroll body to 0px on click
			$('.arrow-up').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});

	/* Fancybox */
	$(".fancybox").fancybox();
});
