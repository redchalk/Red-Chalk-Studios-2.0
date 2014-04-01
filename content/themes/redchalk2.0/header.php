<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<title>
    <?php if(is_page('Home Page')) {
    		bloginfo('description'); echo ' | '; bloginfo('name'); echo ' | Creative Agency Virginia Beach, VA';
		  } else {    
			wp_title('|', true, 'right'); echo ' | '; bloginfo('description'); echo ' | Creative Agency Virginia Beach, VA';
		  }	?>
	</title>
	
	<!-- Stylesheets -->
	<!--[if (lt IE 9) & (!IEMobile)]>
    	<link href="<?php get_stylesheet_directory_uri(); ?>/css/no-mq.css" rel="stylesheet">
	<![endif]-->

	<!--[if (gte IE 9) | (IEMobile)]><!-->
    <link href="<?php bloginfo('template_url'); ?>/css/mq.css" rel="stylesheet">
	<!--<![endif]-->
	
	<!-- Favicon -->	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_user_logged_in() ) { ?>
		<!-- Moves WPAdmin Bar below fixed menu -->
		<style type="text/css">@media screen and (min-width:769px) {#wpadminbar{top: 68px !important;}}</style>
	<?php } // end if ?>
	
	
	<!-- Typekit JS -->
	<script type="text/javascript" src="//use.typekit.net/pgk0oli.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>    
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<header>
		<div class="row">
			<div class="small-7 medium-4 large-3 columns">
				<a href="<?php echo site_url(); ?>" title="<?php echo bloginfo('name'); ?>"><img src="<?php the_field('site_logo','option') ?>" /></a>
			</div>
			<div class="small-1 large-2 columns">
				<a title="Access the navigation menu" class="menu-toggle">TOGGLE</a>
			</div>
		</div>				
	</header>