/* All.js */


/* Scroll To Top */

	// hide #back-top first
	$("#uparrow").hide();

	// fade in #back-top

		$(window).scroll(function () {
			if ($(this).scrollTop() > 2140) {
				$('#uparrow').fadeIn();
			} else {
				$('#uparrow').fadeOut();
			}

			var scroll = $(window).scrollTop();
		    var h = $(window).height();
		     //>=, not <=
		    if (scroll >= 420) {
		        //clearHeader, not clearheader - caps H
		        $("#masthead").addClass("darkHeader");
		    } else {
		    	$("#masthead").removeClass("darkHeader");
		    }
		    
		    var footerPos = $(".site-info .logo");
		    var viewPos = $("button.view-more");
		   
		    if(scroll + h > footerPos.position().top){		    	
		    	$(".site-info .logo").stop().animate({ opacity: 1, top: "0px" }, 200);
		    }

		    /*if(scroll + h > viewPos.position().top) {
		    	viewPos.stop().animate({ opacity: 1, bottom: "0px" }, 200);
		    } else if(scroll + h < viewPos.position().top + viewPos.outerHeight()) {
		    	viewPos.stop().animate({ opacity: 0, bottom: "-100px" }, 200);
		    } else {
		    	viewPos.stop().animate({ opacity: 0, bottom: "-100px" }, 200);
		    }*/

		    if(scroll + h < viewPos.position().top) {
		        viewPos.stop().animate({ opacity: 0, bottom: "-100px" }, 100);

		    } else if(scroll + h < viewPos.position().top + viewPos.outerHeight()) {
		        viewPos.stop().animate({ opacity: 1, bottom: "0px" }, 100);

		    } else if(scroll > viewPos.position().top + viewPos.outerHeight()) {
		        viewPos.stop().animate({ opacity: 0, bottom: "-100px" }, 100);
		    } else if(scroll > viewPos.position().top) {
		        viewPos.stop().animate({ opacity: 1, bottom: "0px" }, 100);
		    } else {
		        viewPos.stop().animate({ opacity: 1, bottom: "0px" }, 100);
		    }

		});

		

   

$( document ).ready(function() {
	// scroll body to 0px on click
		$('.arrow-up').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	/* Body Scrolling */
	$('.contact-link').click(function(){

		$('html, body').stop().animate({
			scrollTop: $('#contact').offset().top -46
		}, 800);
		return false;
	});

	$('.work-link').click(function(){

		$('html, body').stop().animate({
			scrollTop: $('#work').offset().top -100
		}, 800);
		return false;
	});		

	$('.home-link').click(function(){

		$('html, body').stop().animate({
			scrollTop: $('html').offset().top 
		}, 800);
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

	$('.portfolio-project').hover( 
		function() {
			$(this).find('.project-overlay').fadeIn(300);
		}, 
		function() { 
			$(this).find('.project-overlay').fadeOut(300);
		}
	);	

	
	/* Fancybox */
	$(".fancybox").fancybox({
		helpers: {
	        title: {
	            type: 'outside'
	        },
	        overlay: {
	            locked: false
	        }
	    }
	});

	/* View More Work */
	var height = $("#viewWork").height();
	$("#viewWork").css("height", 0);
	$("#viewWork").hide();
	$("button.view-more").click(function(){		

		if($("#viewWork").height() === 0 ){
			$("#viewWork").show();
			$("#viewWork").animate({
				height: height
			}, function(){
				$('html, body').animate({
					scrollTop: $('#viewWork').offset().top -10
				});
				$("button.view-more").text("Close").addClass("close");
			});
			

		} else {

			$("#viewWork").animate({
				height: "0"
			}, function(){
				$('html, body').animate({
					scrollTop: $('#viewWork').offset().top -100
				});
				$("button.view-more").text("+").removeClass("close");
			});

			
		}
	});

});
				
