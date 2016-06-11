// jshint ignore: start 
$(function(){

 	/***
 	**	Scroll to Navigation
 	***/
 	
 	// init scrollTo Navigation function
 	scrollToNavigation();

 	// section location variables
 	var homeSection = 0;
 	var portfolioSection = $('.portfolio').offset().top - 46;
 	var contactSection = $('.contact').offset().top - 46;
 	var aboutSection = $('.about').offset().top - 46;
 	var workSection = $('.other-work').offset().top - 46;
 	//console.log(parseInt(contactSection));
 	function scrollToNavigation(){
 		$('.portfolio-link').click(function(){
			$('body').stop().scrollTo(portfolioSection, {duration:600, easing: 'easeInCubic'} );
		});

 		$('.contact-link').click(function(){
			$('body').stop().scrollTo(contactSection, {duration:600, easing: 'easeInCubic'});
		});

		$('.about-link').click(function(){
			$('body').stop().scrollTo(aboutSection, {duration:600, easing: 'easeInCubic'});
		});

		$('.work-link').click(function(){
			$('body').stop().scrollTo(workSection, {duration:600, easing: 'easeInCubic'});
		});
		
		$('.site-logo, .scroll-top').click(function(){			
			$('body').stop().scrollTo(homeSection, {duration:600, easing: 'easeInCubic'});
		});
 	}
 	
 		
 	/***
 	**	Ajax Get Info - Portfolio
 	***/

 	// create blank html container for Ajax content
	$('.overlay-project').html(' ');  
 	$('.item .btn-default, .portfolio-image').bind('click', function(){ 
			//alert($(this).data('id'));
		$.ajax({
			url : '/wordpress/wp-content/themes/tomle/js/get_ajax.php',
			async: false,   // asynchronous request? (synchronous requests are discouraged...)
			cache: true,   // with this, you can force the browser to not make cache of the retrieved data
			data: {
				portfolio_id: $(this).data('id')
			},
			dataType: "json",  // jQuery will infer this, but you can set explicitly
			type: 'POST',
			success: function( data, textStatus, jqXHR ) {
				var resourceContent = data; // can be a global variable too...
				// process the content...
				showDetails(data);					
			},
			complete: function(data){
				//console.log($('.overlay-modal').position().top );
				$('html, body').scrollTo(
					$('.overlay-modal').position().top - 40
				, {duration: 800});

			},
			error: function(jqXHR, textStatus, errorThrown){
				alert('error: ' + textStatus + ': ' + errorThrown);
			}
		});
 	});

 	$('.overlay-results .overlay-close').on('click', function(){
 		closeDetails();
 	});
 	$('.navbar-toggle').on('click', function(){
 		if($('.overlay-results').hasClass('active')){
 			$('.overlay-results').removeClass('active'); 
 			$('.overlay-results').fadeOut(100); 
	    	$('.overlay-project').html(' ');  
	    	$('.overlay-project').attr('id', '');
 		}
 		
 	});


 	/**
 	 * showDetails() function:
 	 * Action after clicking View Details button using Ajax to pull from
 	 * - js/get_ajax.php - file contains an array of portfolio data 
 	 */
 		
 	
 	function showDetails(data){
 		$('.overlay-project').html(' ');
		
		var json = JSON.stringify(data);  
		
		//$('.overlay-project').append('Title: ' + JSON.stringify(data.id));
		$.each(data, function(index, element) {
			$('.overlay-project').attr('id', data[index].id);
			$('.overlay-project').append('<div class="overlay-project-title"><h2>' + data[index].title + '</h2>' + '</div>');
			if(data[index].url){
				$('.overlay-project-title h2').append('<span><a href=//' + data[index].url + ' target="_blank">' + data[index].url + '</a></span>');
			}
			$('.overlay-project').append('<p class="overlay-project-date">' + data[index].date + '</p>');			
				
				$('.overlay-project').append('<div class="overlay-project-main">');
	            
	            $('.overlay-project-main').append('<div class="overlay-project-description">' + data[index].description + '</div>');	            
	           
	            $('.overlay-project').append('<div class="overlay-project-tags">' + data[index].tags + '</div>');

	            if(data[index].url){
	            	$('.overlay-project').append('<div class="overlay-project-url"><a class="btn-default btn" href="//' + data[index].url + '" target="_blank">View Site</a></div>');
	            }
	            if(data[index].thumbnail_1){
	            	$('.overlay-project').append('<div class="overlay-project-thumb" style="min-height: ' + data[index].thumbnail_1.height + 'px">' + '<img src="' + data[index].thumbnail_1.src + '" />' + '</div>');
	        	}
	        	if(data[index].thumbnail_2){
	            	$('.overlay-project').append('<div class="overlay-project-thumb">' + '<img src="' + data[index].thumbnail_2 + '" />' + '</div>');
	        	}
	        	if(data[index].thumbnail_3){
	            	$('.overlay-project').append('<div class="overlay-project-thumb">' + '<img src="' + data[index].thumbnail_3 + '" />' + '</div>');
	        	}	         
        });       	
		
		//return false;
		$('.overlay-results').fadeIn(); 
		$('.overlay-results').addClass('active'); 
    }

    function closeDetails(){
    	$('.overlay-results').fadeOut(100); 
    	$('.overlay-project').html(' ');  
    	$('.overlay-project').attr('id', '');
    	// scroll back to the top of Portfolio section on Overlay close  
    	$('body').stop().scrollTo(
			portfolioSection,
		{ duration: 800}, function(){
			$('.overlay-results').removeClass('active'); 
		});
    }


	/**
	* Get Website List
	*/
	$('.website-list').addClass('inactive').hide();

	$('.view-website-list').bind('click', function(){
		if($('.website-list').hasClass('inactive')){
			$('.website-list').addClass('active').removeClass('inactive');
			$('.website-list').slideDown(function(){				
				$('.view-website-list').text('Close');
				$('body').stop().scrollTo(workSection, {duration:600, easing: 'easeInOutCubic'});
			});
		} else {
			$('.website-list').addClass('inactive').removeClass('active');
			$('.website-list').slideUp(function(){				
				$('.view-website-list').text('View List');
			});
		}
		
	});
	

	$.ajax({
		type: 'POST',
		url : '/wordpress/wp-content/themes/tomle/js/get_websitelist.php',
		dataType: 'json',
		cache: false,
		success: function(result){
			$('.website-list').append('<ul>');
			
			$(result).each(function(i,val){				
				$('.website-list ul').append("<li>" + val + "</li>");
			});
			
		}
	});
    		
    

    

 	/***
 	**	Navigation
 	***/
	var navigationWidth = 400;  
	var windowWidth = $(window).innerWidth();
	var $overlayDiv = $('.overlay');
	var $navBar = $('#navbar');
	var $mainContainer = $('.main-container');
	var $navbarToggle = $('.touch .navbar-toggle');
	//$('#navbar').css('display', 'none' );
 
 	// switched to css transform: translateX animations to fix animation choppyness/layout thrashing on mobile
	function initDesktopNav(){ 
		$overlayDiv.css('display', 'none' );
		$navBar.css({'display': 'block', 'transform': "translateX("+ (windowWidth) +"px)", 'position': 'fixed', 'width': '100%'}).removeClass('active');
		$mainContainer.css('transform', 'translateX(0)' );
	}
	function clickDesktopNav(){
		$('.navbar-toggle, .nav-close, .overlay').bind('click', function(){
			if($navBar.hasClass('active')){					
				$navBar.css('transform', "translateX("+ (windowWidth) +"px)").removeClass('active');					
				$mainContainer.css('transform', 'translateX(0)' );
				$overlayDiv.stop().fadeOut(100); 
			} else {				
				$navBar.css({'transform': 'translateX(0)', 'position': 'fixed'}).addClass('active'); 
				$mainContainer.css('transform', "translateX(0)" );		 			
				$overlayDiv.stop().fadeIn();
			}
		});	
		
	}
	function clickMobileNav(){
		$navBar.css({'display': 'block', 'transform': 'translateX(windowWidth)', 'position': 'fixed', 'max-width' : windowWidth, 'width' : windowWidth }).removeClass('active');
		$mainContainer.removeAttr('style' );

		$('.navbar-toggle, .nav-close, .overlay').bind('click', function(){
			if($navBar.hasClass('active')){
				$navBar.css('transform', 'translateX(0)' );
				$mainContainer.css('transform', "translateX(" + (-windowWidth) + "px)" );	
			} else {
				$navBar.css('transform', "translateX(" + (windowWidth) + "px)" );
				$mainContainer.css('transform', 'translateX(0)' );	 
			}
		});
	}

	function clickMobileLandscape(){

		$navBar.css({'display': 'block', 'transform': 'translateX(windowWidth)', 'position': 'fixed', 'max-width' : windowWidth, 'width' : windowWidth }).removeClass('active');
		$mainContainer.removeAttr('style' );

		$('.navbar-toggle, .nav-close, .overlay').bind('click', function(){
			if($navBar.hasClass('active')){
				$navBar.css('transform', 'translateX(0)' );
				$mainContainer.css('transform', "translateX(" + (-navigationWidth) + "px)" );	
			} else {
				$navBar.css('transform', "translateX(" + (navigationWidth) + "px)" );
				$mainContainer.css('transform', 'translateX(0)' );	 
			}
		});		
	}

	enquire.register("screen and (max-width:769px)", { 

		match : function(){			
			$('body').addClass('touch');  
			initDesktopNav();
			clickDesktopNav();
			$('.navbar-nav li a').bind('click', function(){
				$navBar.delay( 800 ).queue(function(next){
					$(this).css({'transform' : "translateX(" + (navigationWidth) +"px)", 'transformY' : "0"} ).removeClass('active');	
					next();
				});				
				$mainContainer.delay( 800 ).queue(function(next1){
					$(this).css('transform', 'translateX(0)' );	
					next1();
				});
				$overlayDiv.delay( 800 ).queue(function(next2){ 
					$(this).stop().fadeOut(100); 
					next2();	
				});
			});
		}, 
		unmatch : function(){ 
			
			$('.navbar-toggle, .nav-close, .overlay').unbind('click');
			$('body').removeClass('touch');
			$overlayDiv.css('display', 'none' );
			$mainContainer.removeAttr('style' );
			$navBar.css({'display': 'block', 'transform': 'translateX(0)', 'position': 'absolute', 'width' : 'auto' });
			$('.navbar-nav li a').unbind('click');
			scrollToNavigation();
 
		} 
	});	
	
	/* Mobile Phone Portrait Size */
	enquire.register("screen and (max-width:420px) and (orientation: portrait)", {

		match : function(){	 
			
			$('body').addClass('touch');	
			clickMobileNav();
			// reset styles of navigation links on orientation change
			$navBar.css({'display': 'block', 'transform': "translateX(" + (windowWidth) + "px)", 'position': 'fixed', 'max-width' : windowWidth, 'width' : windowWidth }).removeClass('active');
		},
		unmatch : function(){
			
			
			$mainContainer.removeAttr('style' );
		} 
	});
	/* Mobile Landscape Size */
	enquire.register("screen and (max-width:769px) and (orientation: landscape)", {

		match : function(){		 
			clickMobileLandscape();
			// reset styles of navigation links on orientation change
			$navBar.css({'display': 'block', 'transform': "translateX(" + (navigationWidth) + "px)", 'position': 'fixed', 'max-width' : navigationWidth, 'width' : navigationWidth }).removeClass('active');
		},
		unmatch : function(){
			$mainContainer.removeAttr('style' );
			
		} 
	});
}); 



$(window).scroll(function(){

	var navbar = $('nav.navbar');
	var sitelogo = $('a.site-logo');
	var windowHeight = $(window).innerHeight();
	var scrollTop = $(window).scrollTop();	
	var contactSection = $('.contact').offset().top - 46;
 	
	if(scrollTop > 200){
		navbar.addClass('nav-height');
	} 
	 else {
		navbar.removeClass('nav-height');
	}

	// Scroll to Top of Page functionality
 	if(scrollTop > parseInt(contactSection)) {
 		$('.scroll-top').css({  "opacity": 1});
 	} else {
 		$('.scroll-top').css({"opacity": 0});
 	}

	
});