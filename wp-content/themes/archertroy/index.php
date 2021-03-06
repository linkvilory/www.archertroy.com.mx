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
        <h2 class='texto-noticia'><a href='/blog' class='blog-link'>Blog</a></h2>
        <?php get_search_form( ); ?>
      	<div class='header-social-links'>
    			<a class="icon-facebook" target="_blank" href="https://www.facebook.com/archertroy"></a>
          <a class="icon-twitter" target="_blank" href="https://twitter.com/ArcherTroy"></a>
          <a class="icon-instagram" target="_blank" href="http://instagram.com/archertroy"></a>
          <a class="icon-pinterest" target="_blank" href="http://www.pinterest.com/archertroyp"></a>
          <a class="icon-youtube-play" target="_blank" href="https://www.youtube.com/ConquistasArcher"></a>
          <a class="icon-linkedin" target="_blank" href="https://www.linkedin.com/company/archer-troy-publicidad-s-a-de-c-v-?trk=company_logo"></a>
    		</div>
      </div>
      
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
      <div class='blog-grid'>
			<?php while ( have_posts() ) : the_post(); ?>
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
    <div id='post-visualization' class='post-content'></div>
  <!-- Post content should be visible in here -->
  </div>    
  <script type="text/javascript">
  $(function() {
    var post_id = $('.post-grid:first').attr('href');
    $.ajax({
      type: "GET",
      url:  window.location.origin + "/wp-admin/admin-ajax.php",
      dataType: 'html',
      data: ({ action: 'visualize_post', id: post_id}),
      success: function (data) {
        load_visualization(data);
      },
      error: function (data) {
        trace_error(data);
      }
    }); 
  }); 
  </script>
    
<!-- ?php get_sidebar(); ? -->
<?php get_footer(); ?>