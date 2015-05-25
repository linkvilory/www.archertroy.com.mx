<!DOCTYPE html>
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
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/styleprint.css?ver=4.1.1" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style599less.css?ver=4.1.1" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style600-959.css?ver=4.1.1" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style960more.css?ver=4.1.1" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style1600more.css?ver=4.1.1" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/style1800more.css?ver=4.1.1" rel="stylesheet">

    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css?ver=4.1.1" rel="stylesheet">
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
    <meta property="og:url" content="http://archertroy.com" />
    <meta property="og:title" content="Archer Troy - Sitio Oficial" />
    <meta property="og:description" content="Archer Troy es una agencia integral e independiente. Nuestra arma de conquista son las ideas, entre mas grandes, más poderosas: Ideas que Conquistan." />
    <meta property="og:site_name" content="archertroy" />
    <meta property="og:image" content="http://archertroy.com/wp-content/uploads/image-share/image-share-archer-troy.jpg" />
</head>
<body <?php body_class(); ?>>
  <!-- Landing Page Content -->
  <?php
  unset($_SESSION["categoria"]);
  if($_SESSION["entro"] == 1){

  }else{

  ?>

  <div class='landing'>
    <div class='landing-start'>
        <div class='landing-login'>
          <img src='/wp-content/uploads/2015/02/1_firma-preload.jpg' class='landing-text-preload' alt='Text preload'>
          <button class='boton-Archer'>ENTRAR</button>
        </div>
      </div>
  </div>

  <?php

  }


  ?>
  <!-- Landing Page Content -->
  <!-- Home Page Content -->
<div id="page" class="hfeed site" style="display:none">
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><div class="icon-align-justify"></div></button>
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
	  <div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php  get_template_part( 'content', 'page-home' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
  <!-- Home Page Content -->  
  </div><!--  #main .wrapper -->
</div><!-- #page -->
<!-- footer OUTSIDE container -->
	<footer id="colophon" role="contentinfo" style='display: none;'>
		<div class="site-info">
      <div class="solid">
        <div class='social-links'>
          <a href='https://www.facebook.com/archertroy' class='icon-facebook' target='_blank'></a>
          <a href='https://twitter.com/ArcherTroy' class='icon-twitter' target='_blank'></a>
          <a href='http://instagram.com/archertroy' class='icon-instagram' target='_blank'></a>
          <a href='http://www.pinterest.com/archertroyp' class='icon-pinterest' target='_blank'></a>
          <a href='https://www.youtube.com/ConquistasArcher' class='icon-youtube-play' target='_blank'></a>
          <a href='https://www.linkedin.com/company/archer-troy-publicidad-s-a-de-c-v-?trk=company_logo' class='icon-linkedin' target='_blank'></a>
        </div>
      </div>
      <img class="triangule" src="/wp-content/themes/archertroy/img/footer-triangule.png" />
			<div class='copyright'>
        <span class='reg'>&reg;</span> ARCHER TROY S.A. DE C.V. LOS USUARIOS SE OBLIGAN A CUMPLIR CON LOS TÉRMINOS Y CONDICIONES DEL WEB. MARCA REGISTRADA. DECLARACIÓN DE PRIVACIDAD DE LA INFORMACIÓN DE MÉXICO (55) 55 39 22 72
			</div>
		</div><!-- .site-info -->    
	</footer><!-- #colophon -->
<!-- footer OUTSIDE container -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/archertroy.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script>
      var $landing = $('.landing'), 
      $start = $('.boton-Archer'),
      $div_page = $('div#page'), 
      $footer = $("#colophon"),
      $full_width_header = $('.size-full'),
      $submenu = $('.sub-menu'),
      contenedor_proyectos,
      proyectos_recientes,            
      contenedor_noticias,
      ultimas_noticias,
      opciones_proyectos,
      opciones_noticias;

      var idleInterval;

      <?php

      if($_SESSION["entro"] == 1){

      ?>
        $div_page.css('display',"block");
        $footer.show();
        ajustar_noticias_proyectos_recientes();
      <?php

      }else{

      ?>
     
      $div_page.css({'opacity': 0}).show();
  
        function cargar_home() {
          ajustar_noticias_proyectos_recientes();
          $landing.fadeOut(600, function() {
            $(this).remove();
             $div_page.animate({'opacity': 1 }, 600);
          });  
          $footer.show();
        }
    
        $start.click(function (e) {
          e.preventDefault();  
          clearInterval(idleInterval);    
          cargar_home();
        });

      <?php

      }
        
      ?>
      
      function onLayout(){
        console.log('Ok');
        $(".proyectos-recientes").css("display","block");
      }

      function ajustar_noticias_proyectos_recientes() {
        opciones_proyectos = {
            gutter: 16, 
            itemSelector: 'div',
            transitionDuration: '1s'
          },
          opciones_noticias = {
            gutter: 16, 
            itemSelector: 'div',
            transitionDuration: '1s'
          }
          
          proyectos_recientes = document.querySelector('.proyectos-recientes');
          imagesLoaded( proyectos_recientes, function() {            
            contenedor_proyectos = new Masonry( proyectos_recientes, opciones_proyectos);
         
          });

          ultimas_noticias = document.querySelector('.ultimas-noticias');
          imagesLoaded( ultimas_noticias, function() {            
            contenedor_noticias = new Masonry( ultimas_noticias, opciones_proyectos);
 
          });
      }
      
      function es_movil() {
        return $(window).outerWidth() < 959;
      }
   
      window.onload = function () {

        //Incrementa el contador cada minuto
        idleInterval = setInterval(timerIncrement, 60000); // 1 minute

        if (es_movil()) {          
          imagesLoaded($landing, function() {
      
          });
        } else {
          imagesLoaded( $landing, function() {
            $landing.fadeIn(800, function () {
            });
          }); 
        }
        ajustar_footer();
        mover_footer_al_fondo();
      }
      
      $(window).on('resize', function () {
        ajustar_noticias_proyectos_recientes();
        mover_footer_al_fondo();
      });       
</script>
<?php $_SESSION["entro"] = 0; ?>
</body>
</html>
