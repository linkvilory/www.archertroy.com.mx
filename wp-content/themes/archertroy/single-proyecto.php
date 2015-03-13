<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Utilizado para mostrar proyectos
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'proyecto' ); ?>

				<div class="project-navigation">
					<div class='entry-content-social-links'>
						<a id="facebookPost" class="sficn icon-facebook" alt="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_title() . get_permalink() ?>"></a>
						<a id="twitterPost" class="sficn icon-twitter" alt="Twitter" target="_blank" href="https://twitter.com/home?status=<?php echo get_permalink() ?>"></a>
						<a id="pinterestPost" class="sficn icon-pinterest" alt="Pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo get_permalink() ?>&media=&description="></a>
						<a id="googlePost" class="sficn icon-google-plus" alt="Google" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink() ?>"></a>
					</div>
				<?php
				/**
				* Infinite next and previous post looping in WordPress
				*/
				if( get_adjacent_post(false, '', false) ) {
				?>
				
				<div class="alignleft"><?php next_post_link( '%link', '<i class="icon-angle-left"></i> Siguiente' . _x( '', 'Next post link', 'twentytwelve' ) . '' ); ?></div>
				<?php	
				//next_post_link('%link', '&larr; Siguiente');
				} else {
				$args = array('post_type' => 'proyecto',
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'ASC');
				$last = new WP_Query($args); $last->the_post();
				?>
				<div class="alignleft"><a href="<?php echo get_permalink() ?>"><i class="icon-angle-left"></i> Siguiente</a></div>
				<?php
				//echo '<a href="' . get_permalink() . '">&larr; Siguiente</a>';
				wp_reset_query();
				};
				if( get_adjacent_post(false, '', true) ) {
				?>
				<div class="alignright"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentytwelve' ) . 'Anterior <i class="icon-angle-right"></i>' ); ?></div>
				<?php	
				//previous_post_link('%link', 'Anterior &rarr;');
				} else {
				$args = array('post_type' => 'proyecto',
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
				$first = new WP_Query($args); $first->the_post();
				?>
				<div class="alignright"><a href="<?php echo get_permalink() ?>">Anterior <i class="icon-angle-right"></i></a></div>
				<?php
				//echo '<a href="' . get_permalink() . '">Anterior &rarr;</a>';
				wp_reset_query();
				};
				
				?> 
				</div>
<!--
				<div class="project-navigation">
					<div class="alignleft"><?php next_post_link( '%link', '<i class="icon-angle-left"></i> Siguiente' . _x( '', 'Next post link', 'twentytwelve' ) . '' ); ?></div>
					<div class="alignright"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentytwelve' ) . 'Anterior <i class="icon-angle-right"></i>' ); ?></div>
				--> <!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<script>
  $("#menu-item-27").addClass("current-menu-item");
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>