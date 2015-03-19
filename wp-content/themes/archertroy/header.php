<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<!-- lightbox -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet">
<!-- lightbox -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">	
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="mstile-144x144.png">
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle">
          <div class="icon-align-justify"></div>
        </button>
        <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
        <a class='mini-logo' href="/">
          <img src="/wp-content/uploads/2014/11/logo.jpg">
        </a>
        <div class='sidebar'>
          <a class='mini-logo-internal' href="/">
            <img src="/wp-content/uploads/2014/11/logo.jpg">
          </a>          
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </div>
		</nav><!-- #site-navigation -->


		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

  <div id="main" class="wrapper">