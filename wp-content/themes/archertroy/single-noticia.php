<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

  <div class='archertroy-blog'>
  <div class='archertroy-blog-margin-top'></div>
	<div id="primary" class="post-browse">

		<div id="content" role="main">
      
      <div class='blog-posts-header'>
        <h2 class='texto-noticia'>Noticias</h2>
        <div class='hamburger-menu-icon'>
          <div class="icon-align-justify"></div>
        </div>
        <?php get_search_form( ); ?>
        
      	<div class='header-social-links'>
    			<a href='https://www.facebook.com/archertroy' class='icon-facebook' target='_blank'></a>
    			<a href='https://twitter.com/ArcherTroy' class='icon-twitter' target='_blank'></a>
    			<a href='http://instagram.com/archertroy' class='icon-instagram' target='_blank'></a>
    			<a href='http://www.pinterest.com/archertroyp' class='icon-pinterest-1' target='_blank'></a>
    			<a href='https://www.youtube.com/ConquistasArcher' class='icon-youtube-play' target='_blank'></a>
    			<a href='https://plus.google.com/105080074709822071277/posts' class='icon-google-plus' target='_blank'></a>
    		</div>
      </div>
    <?php
      
    $args = array(
        'post_type' => 'noticia',
        'order' => 'DESC',
        'orderby' => 'post_modified',
        'posts_per_page' => 10
    );
    $my_query = new WP_Query($args);
      
    ?>
      
      
		<?php if ( $my_query->have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
      <div class='blog-grid'>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php 
        $format = get_post_format();
          if ($format == false) {
            get_template_part( 'content', 'standard' );
          } else {
            get_template_part( 'content', get_post_format() ); 
          }
        ?>
			<?php endwhile; ?>
      </div>      
			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

  <!-- Post content should be visible in here -->
    <div id='post-visualization' class='post-content'>
  		<?php if ( have_posts() ) : ?>
  			<?php /* Start the Loop */ ?>
  			<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', 'blog-post' ); ?>
  			<?php endwhile; ?>
        <?php endif; ?>
    </div>
  <!-- Post content should be visible in here -->
  </div>    
  
  <!-- Cargar contenido del blog y ajustar columnas -->
  <script>
  /*
  (function esperar_a_cargar_contenido_del_blog() {  
    var $tmp_node = $('<div>').html($(".archertroy-blog").html());
    var content_images = $tmp_node.find('img').length;
    $('img',$tmp_node).load(function(){
      content_images--;
      if (content_images == 0) { 
        ajustar_altura_columnas();
        var document_height = $('#page').outerHeight() - $('header').outerHeight();
        if ($('.mini-post').outerHeight() < document_height) {
          $('.mini-post, #main').height(document_height);
        }
      }
    });  
  }());
    */
  
  (function esperar_a_cargar_contenido_del_blog() {  
    var $tmp_node = $('<div>').html($(".archertroy-blog").html());
    var content_images = $tmp_node.find('img').length;
    $('img',$tmp_node).load(function(){
      content_images--;
      if (content_images == 0) { 

          /* 
            Si se visualiza en móvil o tableta hacer ajustes 
          */
        if ($(window).outerWidth() > 959) {
          ajustar_altura_columnas();
          var document_height = $('#page').outerHeight() - $('header').outerHeight();
          if ($('.mini-post').outerHeight() < document_height) {
            $('.mini-post, #main').height(document_height);
          }
        } else {
            $postVisualizationContent = $('#post-visualization').html();
          
          if ($('.blog-wrapper').length > 0 || $('.blog-grid').parent() === $('#post-visualization').parent()) {
            $('#post-visualization').html($postVisualizationContent);
            $('.mini-post .wp-caption').css({"margin-top" : 0});         
            $('html, body').animate({scrollTop: -$('#post-visualization').offset().top}, 600);
          } else {
            /* Si no están agrupados agruparlos y visualizar el contenido*/
              $('#post-visualization').remove();
              $('.blog-grid').wrap("<div class='blog-wrapper'></div>");
              $('.blog-wrapper').append("<div id='post-visualization' class='post-content'></div>");
              $('#post-visualization').html($postVisualizationContent);

              var desplazar = 0;

              if ($(window).outerWidth() > 599) {
                desplazar = -515;
              } else {
                desplazar = -285;
              }
              
              var altura_ajustada = $(".mini-post").outerHeight() + 180;
              $(".mini-post").height(altura_ajustada);                            
              $('.blog-wrapper').animate({'margin-left': desplazar}, 600);              
              $('.mini-post .wp-caption').css({"margin-top" : 0});        
          }          
        }
      } // content_images == 0
    });  
  }());
    
  
  </script>
    <!-- Cargar contenido del blog y ajustar columnas -->
    
    
<!-- ?php get_sidebar(); ? -->
<?php get_footer(); ?>