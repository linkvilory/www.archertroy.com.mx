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
					<div class="alignleft"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentytwelve' ) . '<i class="icon-angle-left"></i> Anterior' ); ?></div>
					<div class="alignright"><?php next_post_link( '%link', 'Siguiente <i class="icon-angle-right"></i>' . _x( '', 'Next post link', 'twentytwelve' ) . '' ); ?></div>
				</div><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<script>
  $("#menu-item-27").addClass("current-menu-item");
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>