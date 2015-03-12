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
  <!-- Landing Page Content -->
  <?php

  if($_SESSION["entro"] == 1){

  }else{

  ?>
  <div class='landing'></div>

  <script>
    if ($(window).outerWidth() < 959) {
        $('.landing').html("<img src='/wp-content/uploads/2014/12/320-preloader.png' class='mobile-landing-preloader' alt='Landing preloader'>" +          
          "<div class='mobile-landing-login'>" +
            "<img src='/wp-content/uploads/2014/12/320-preloader-entrar.png'  class='img-mobile-landing-login' alt='Landing preloader boton'>" +
          "</div>");
    } else {        
      $('.landing').html("<div class='landing-start'>" +

        "<div class='landing-login'>" +
          "<img src='/wp-content/uploads/2015/02/1_firma-preload.jpg' class='landing-text-preload' alt='Text preload'>" +
          "<img src='/wp-content/uploads/2015/02/01-entrar-actualizado.jpg'  class='landing-boton-entrar' alt='Botón entrar'>" +
        "</div>" +
      "</div>");
    }
  </script>

  <?php

  }


  ?>
  <!-- Landing Page Content -->
  <!-- Home Page Content -->
<div id="page" class="hfeed site" style="display:none">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
    
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
          <a href='http://www.pinterest.com/archertroyp' class='icon-pinterest-1' target='_blank'></a>
          <a href='https://www.youtube.com/ConquistasArcher' class='icon-youtube-play' target='_blank'></a>
          <a href='https://plus.google.com/105080074709822071277/posts' class='icon-google-plus' target='_blank'></a>
        </div>
      </div>
			<div class="triangule">
      </div>
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
//$full_width_header = $('.entry-content p:first-child img:first'),
  var $landing = $('.landing'), 
      $landing_start = $('.landing-login'),
      $mobile_landing = $('.mobile-landing-preloader'),
      $mobile_landing_start = $('.mobile-landing-login'),
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
      
      $('.landing-boton-entrar').hover(function () {
        $(this).prop('src', '/wp-content/uploads/2015/03/entrar_gris1.jpg');
                            
      }, function () {
        $(this).prop('src', '/wp-content/uploads/2015/02/01-entrar-actualizado.jpg');
      });
    
      function resize_header(header) {
        var window_width = $(window).outerWidth() + 6, 
            adjust_offset = 0;
    
        if (header.length > 0) {    
          header.addClass('full-width-header');    
          adjust_offset = header.offset();
          adjust_offset.left = Math.ceil((adjust_offset.left + 3) * -1);
          $('.full-width-header').css({'width':  window_width, 'max-width':  window_width, 'left': adjust_offset.left, 'z-index': 9999 });      
          header.parent().css({'height': header.height(), 'margin-top': 0});
        }
    
        if (window.location.pathname.indexOf("proyecto") !== -1 || window.location.pathname.indexOf("media") !== -1 || window.location.pathname.indexOf("blog") !== -1 || window.location.pathname.indexOf("posters") !== -1 || window.location.pathname.indexOf("brain") !== -1 || window.location.pathname.indexOf("legion") !== -1) {
          mover_footer_al_fondo();  
        }    
      }
      
      function show_footer() {
        if ($(window).outerWidth() < 600) {          
          $('.site-info').prepend($('.copyright'));
          var new_height = $('#page').outerHeight() + 290;
          $("#page").css({height: new_height});
        } 
          $footer.show();
      }
      
      <?php

      if($_SESSION["entro"] == 1){

      ?>
        $div_page.css('display',"block");
        show_footer();
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
          //resize_header($full_width_header);                    
          show_footer();
        }
    
        $landing_start.click(function (e) {
          e.preventDefault();        
          cargar_home();
        });

      <?php

      }
        
      ?>
      
      
      $mobile_landing_start.click(function (e) {
        cargar_home();        
      });
      
      
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
            if (es_movil()) {
              ajustar_altura_proyectos();
            }            
          });

          ultimas_noticias = document.querySelector('.ultimas-noticias');
          imagesLoaded( ultimas_noticias, function() {            
            contenedor_noticias = new Masonry( ultimas_noticias, opciones_proyectos);
            if (es_movil()) {
              ajustar_altura_proyectos();
            }            
          });
      }
      
      function es_movil() {
        return $(window).outerWidth() < 959;
      }
      
      function modificar_contenido_para_moviles() {
        $('.proyectos-recientes .wp-caption:nth-child(7), .proyectos-recientes .wp-caption:nth-child(8)').remove();
        $('.proyectos-recientes:first').append("<span><a href='/proyectos' class='boton-carteles large'>VER MÁS</a></span>");
      }
            
      function ajustar_altura_proyectos() {
        $('.proyectos-recientes').height(490);        
      }
      
      window.onload = function () {
        if (es_movil()) {          
          imagesLoaded($landing, function() {
            $mobile_landing.animate({opacity: 1}, 800).promise().done(function () {
                $mobile_landing_start.animate({opacity: 1}, 600);
            });
          });
          modificar_contenido_para_moviles();
          $('#menu-item-27 .sub-menu').prepend("<li id='sub-menu-item-27' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-27 proyectos-movil'><a href='/projects/'>Todos</a></li>");          
          $("#menu-item-160 .sub-menu").prepend("<li id='sub-menu-item-652' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-652 proyectos-movil'><a href='/legion/'>La conquista</a></li>");          
        } else {
          imagesLoaded( $landing, function() {
            $landing.fadeIn(800, function () {
              $landing_start.css({top: 0});
              $landing_start.animate({opacity: 1}, 600);              
            });
          }); 
        }
      }
      
      $(window).on('resize', function () {
        //resize_header($full_width_header);
      });       
</script>
<?php $_SESSION["entro"] = 0; ?>
</body>
</html>
