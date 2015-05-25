<?php
/**
 * The template for displaying Search Results pages
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
        <h2 class='texto-noticia'><a href='/blog' class='blog-link'>Blog</a></h2>
        <div class='hamburger-menu-icon'> <!--EN CSS HASTA ABAJO DISPLAY NONE-->
          <!-- div class="icon-align-justify"></div -->
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
      
      
      
		<?php if ( have_posts() ) : ?>      
			<?php /* Start the Loop */ ?>
      <div class='blog-grid'>
			<?php while ( have_posts() ) : the_post(); ?>
        <?php 
          $format = get_post_format();
          if ($format == 'post') {
             get_template_part( 'content', get_post_format() ); 
          }
          /*
            if ($format == false) {
              get_template_part( 'content', 'standard' );
            } else {
              get_template_part( 'content', get_post_format() ); 
            }
          */
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
					<h1 class="entry-title">No se ha encontrado nada</h1>
				</header>

				<div class="entry-content">
					<p>
              No existen entradas que coincidan con tu búsqueda.<br>
              Intenta utilizar otros términos y / o palabras.
          </p>
					<!-- ?php get_search_form(); ? -->
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

  <!-- Post content should be visible in here -->
  <div id='post-visualization' class='post-content'>

  </div>
  <!-- Post content should be visible in here -->
  </div>    
<!-- ?php get_sidebar(); ? -->
<?php get_footer(); ?>