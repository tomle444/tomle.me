<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.css" rel="stylesheet">
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body <?php body_class(); ?>>

        <a class="scroll-top"><span class="glyphicon glyphicon-chevron-up"></span>Top</a>
            <div class="overlay"></div>
            <div class="overlay-results">
                <div class="overlay-modal vcenter">
                    <a href="javascript:void(0);" class="overlay-close" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="overlay-project"></div>
                </div>
            </div>
            <!-- nav -->
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand site-logo" href="#">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 90 612 612" enable-background="new 0 90 612 612" xml:space="preserve">
                            <polygon points="487,508 194,215 257.8,151.2 489.6,381.7 612,259.3 612,140.8 612,90 561.2,90 50.8,90 0,90 0,140.8 0,409 
                            169.3,239.7 231.8,302.2 187.5,346.5 418,577 354.2,642.1 122.4,410.3 0,534 0,651.2 0,702 50.8,702 561.2,702 612,702 612,651.2 
                            612,383 "/>
                        </svg>

                    </a>
                </div>
                <div id="navbar" class="pull-right">
                    <button type="button" class="nav-close navbar-toggle" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0);" class="portfolio-link">Portfolio</a></li>
                        <li><a href="javascript:void(0);" class="about-link">About</a></li>
                        <li><a href="javascript:void(0);" class="contact-link">Contact</a></li>
                    </ul>          
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
    	<!-- wrapper -->
    	<div class="main-container">

    	<!-- /nav -->

    	<!-- header -->
    	<header class="header clear" role="banner">

    		<!-- Main jumbotron for a primary marketing message or call to action -->
    		<div class="jumbotron">
    			<div class="jumbotron-overlay"></div>
    			<div class="container">
    				<h1>Hello, <span>my name is Tom Le</span></h1>
    				<p>I am a <span>web designer</span> and <span>front-end developer</span> who lives in San Diego.</p>
    				<p class="last"><a class="btn btn-primary btn-lg portfolio-link" href="#" role="button"><i class="fa fa-angle-down"></i></a></p>
    			</div>
    		</div>
    		

    	</header>
    	<!-- /header -->
