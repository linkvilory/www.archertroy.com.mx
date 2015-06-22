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
		<meta content="Archer Troy es una agencia integral e independiente. Nuestra arma de conquista son las ideas, entre mas grandes, más poderosas: Ideas que Conquistan." name="description">
		<meta content="Archer Troy es una agencia integral e independiente. Nuestra arma de conquista son las ideas, entre mas grandes, más poderosas: Ideas que Conquistan." name="keywords">
		<meta name="author" content="Archer Troy" />		

		<meta name="google-site-verification" content="PFf1CGwQZlG76ubSM27jgHSeeVKguzJd2LaVAUsJ-x8" />
		
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/styleprint.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style599less.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style600-959.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style960more.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style1600more.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style1800more.css?ver=4.1.1" rel="stylesheet">

		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/audiotag.css?ver=4.1.1" rel="stylesheet">
		<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css?ver=4.1.1" rel="stylesheet">


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

<?php
 if($_SERVER['REQUEST_URI'] == "/legion/"){

?>

	<meta property="og:url" content="http://archertroy.com/legion/" />
	<meta property="og:title" content="Archer Troy - Legión" />
	<meta property="og:description" content="Diariamente colaboramos con nuestros clientes para librar batallas y obtener la mejor posición en el mercado, dedicamos todos nuestros esfuerzos para ser reconocidos por un gran trabajo y hacemos que los consumidores se enamoren de las marcas. Por eso podemos afirmar que nuestro trabajo es la conquista. ¿De qué? No de los gustos, ni de las necesidades y mucho menos del bolsillo del consumidor. Nosotros conquistamos su mente y corazón a través de nuestra mejor arma: las ideas, y entre más grandes, más poderosas." />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/legion.png" />
	
	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Legión" />
    <meta name="twitter:description" content="Diariamente colaboramos con nuestros clientes para librar batallas y obtener la mejor posición en el mercado, dedicamos todos nuestros esfuerzos para ser reconocidos por un gran trabajo y hacemos que los consumidores se enamoren de las marcas. Por eso podemos afirmar que nuestro trabajo es la conquista. ¿De qué? No de los gustos, ni de las necesidades y mucho menos del bolsillo del consumidor. Nosotros conquistamos su mente y corazón a través de nuestra mejor arma: las ideas, y entre más grandes, más poderosas." />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/legion.png" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/proyectos/" || $_SERVER['REQUEST_URI'] == "/media/tv/" || $_SERVER['REQUEST_URI'] == "/media/radio/" || $_SERVER['REQUEST_URI'] == "/media/print/" || $_SERVER['REQUEST_URI'] == "/media/outdoor/" || $_SERVER['REQUEST_URI'] == "/media/digital/" || $_SERVER['REQUEST_URI'] == "/media/activaciones/" || $_SERVER['REQUEST_URI'] == "/media/innovacion/" || $_SERVER['REQUEST_URI'] == "/media/integradas/"){

?>

	<meta property="og:url" content="http://archertroy.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:title" content="Archer Troy - Proyectos" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-proyectos.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Proyectos" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-proyectos.jpg" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/clientes/"){

?>

	<meta property="og:url" content="http://archertroy.com/clientes/" />
	<meta property="og:title" content="Archer Troy - Clientes" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-clientes.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Clientes" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-clientes.jpg" />

<?php 

 }elseif($_SERVER['REQUEST_URI'] == "/gente/"){

?>

	<meta property="og:url" content="http://archertroy.com/gente/" />
	<meta property="og:title" content="Archer Troy - Gente" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-gente.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Gente" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-gente.jpg" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/contacto/"){

?>

	<meta property="og:url" content="http://archertroy.com/contacto/" />
	<meta property="og:title" content="Archer Troy - Contacto" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-contacto.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Contacto" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-contacto.jpg" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/brain-breakers/"){

?>

	<meta property="og:url" content="http://archertroy.com/brain-breakers/" />
	<meta property="og:title" content="Archer Troy - Brain Break" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-brain.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Brain Break" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-brain.jpg" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/blog/"){

?>

	<meta property="og:url" content="http://archertroy.com/blog/" />
	<meta property="og:title" content="Archer Troy - Blog" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Blog" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="" />
    
<?php

 }elseif($_SERVER['REQUEST_URI'] == "/noticia/"){

?>

	<meta property="og:url" content="http://archertroy.com/noticia/" />
	<meta property="og:title" content="Archer Troy - Noticia" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Noticia" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="" />

<?php

 }elseif($_SERVER['REQUEST_URI'] == "/posters/"){

?>

	<meta property="og:url" content="http://archertroy.com/posters/" />
	<meta property="og:title" content="Archer Troy - Posters" />
	<meta property="og:description" content="" />
	<meta property="og:site_name" content="archertroy" />
	<meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-posters.jpg" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Archer Troy - Posters" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="http://archertroy.com/wp-content/uploads/image-share/image-share-posters.jpg" />

<?php

 }else{

 	if (is_single()){

?>

	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:title" content="<?php the_title(); ?> - Proyecto" />
	<meta property="og:description" content="<?php echo strip_tags($post->post_content); ?>" />
	<meta property="og:site_name" content="archertroy" />
	<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
	<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />

	<meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php the_title(); ?> - Proyecto" />
    <meta name="twitter:description" content="<?php echo strip_tags($post->post_content); ?>" />
    <meta name="twitter:site" content="@archertroy" />
    <meta name="twitter:creator" content="@archertroy" />
    <meta name="twitter:domain" content="http://archertroy.com" />
    <meta name="twitter:image:src" content="<?php echo $fb_image[0]; ?>" />

<?php

 	}

 }

?>		
	

</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
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