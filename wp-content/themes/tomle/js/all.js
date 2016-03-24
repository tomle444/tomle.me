// jshint ignore: start 
$(function(){
	

 	/***
 	**	Scroll to Navigation
 	***/
 	scrollToNavigation();
 	function scrollToNavigation(){
 		$('.portfolio-link').click(function(){
			$('html, body').stop().animate({
				scrollTop: $('.portfolio').offset().top -46 
			}, 800);
			return false;
		});

		$('.about-link').click(function(){
			$('html, body').stop().animate({
				scrollTop: $('.about').offset().top -46
			}, 800);
			return false;
		});

		$('.contact-link').click(function(){
			$('html, body').stop().animate({
				scrollTop: $('.contact').offset().top -46
			}, 800);
			return false;
		});
 	}

 	
 	
	$('.overlay-project').html(' ');  

 	
	 	/***
	 	**	Ajax Get Info - Portfolio
	 	***/
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
					console.log($('.overlay-modal').position().top );
					$('html, body').animate({
						scrollTop: $('.overlay-modal').position().top - 30
					}, 800);

				},
				error: function(jqXHR, textStatus, errorThrown){
					alert('error: ' + textStatus + ': ' + errorThrown);
				}
			});
	 	});

	 	$('.overlay-results .overlay-close').on('click', function(){
	 		closeDetails();
	 	});
 		
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
    }

    function closeDetails(){
    	$('.overlay-results').fadeOut(100); 
    	$('.overlay-project').html(' ');  
    	$('.overlay-project').attr('id', '');  
    }


    

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
 
	function initDesktopNav(){ 
		$overlayDiv.css('display', 'none' );
		$navBar.css({'display': 'block', 'right': -navigationWidth, 'position': 'fixed', 'width': '100%'}).removeClass('active');
		$mainContainer.css('right', 0 );
	}
	function clickDesktopNav(){
		$('.navbar-toggle, .nav-close, .overlay').bind('click', function(){
			if($navBar.hasClass('active')){					
				$navBar.css('right', -navigationWidth ).removeClass('active');					
				$mainContainer.css('right', 0 );
				$overlayDiv.stop().fadeOut(100); 
			} else {				
				$navBar.css({'right': 0, 'position': 'fixed'}).addClass('active'); 
				$mainContainer.css('right', navigationWidth );		 			
				$overlayDiv.stop().fadeIn();
			}
		});	
		
	}
	function clickMobileNav(){

		$navBar.css({'display': 'block', 'right': -windowWidth, 'position': 'fixed', 'max-width' : windowWidth, 'width' : windowWidth }).removeClass('active');
		$mainContainer.removeAttr('style' );

		$('.navbar-toggle, .nav-close, .overlay').bind('click', function(){
			if($navBar.hasClass('active')){
				$navBar.css('right', '0' );
				$mainContainer.css('right', windowWidth );	
			} else {
				$navBar.css('right', -windowWidth );
				$mainContainer.css('right', 0 );	
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
					$(this).css('right', -navigationWidth ).removeClass('active');	
					next();
				});				
				$mainContainer.delay( 800 ).queue(function(next1){
					$(this).css('right', 0 );	
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
			$navBar.css({'display': 'block', 'right': 0, 'position': 'absolute', 'width' : 'auto' });
			$('.navbar-nav li a').unbind('click');
			scrollToNavigation();
 
		} 
	});	

	enquire.register("screen and (max-width:400px)", {

		match : function(){		 
			$('body').addClass('touch');	
			clickMobileNav();
		},
		unmatch : function(){
			
			//$('.navbar-toggle, .nav-close, .overlay').unbind('click');
			$navBar.css({'display': 'block', 'right': -windowWidth, 'position': 'fixed', 'max-width' : windowWidth, 'width' : windowWidth }).removeClass('active');
			$mainContainer.removeAttr('style' );
		}
	});
}); 



$(window).scroll(function(){

	var navbar = $('nav.navbar');
	var sitelogo = $('a.site-logo');
	var windowHeight = $(window).innerHeight();
	var scrollTop = $(window).scrollTop();	
 	
	if(scrollTop > 200){
		navbar.addClass('nav-height');
		//console.log(scrollTop);	
	} 
	 else {
		navbar.removeClass('nav-height');
	}

	enquire.register("screen and (max-width:768px)", {
		match : function(){
			//$('.navbar-fixed-top').css('position', 'fixed');
		},
		unmatch : function(){

		}
	});
});