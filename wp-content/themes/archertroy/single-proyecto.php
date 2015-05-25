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

			<?php while ( have_posts() ) : the_post(); $actualId = get_the_ID(); ?>

				<?php get_template_part( 'content', 'proyecto' ); ?>

				<div class="project-navigation">
					<div class='entry-content-social-links'>
						<a id="facebookPost" class="sficn icon-facebook" alt="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_title() . get_permalink() ?>"></a>
						<a id="twitterPost" class="sficn icon-twitter" alt="Twitter" target="_blank" href="https://twitter.com/home?status=<?php echo the_title() . get_permalink() ?>"></a>
					</div>
				<?php

				if(isset($_SESSION["categoria"])){
					$arrayProjectos = array();
					$countProject = 0;
					$categoria = $_SESSION["categoria"];
					$args = array('post_type' => 'proyecto',
	                      'post_status' => 'publish',
	                      'taxonomy' => 'media',
	        			  'term' => $categoria,
	                      'orderby' => 'date',
	                      'order' => 'DESC');
					$last = new WP_Query($args); 
					while ( $last->have_posts() ) : $last->the_post();
					$arrayProjectos["$countProject"] = array(get_the_ID(), get_permalink());
					if($actualId == get_the_ID()){
						$orden = $countProject;
					}
					$countProject++;
					endwhile;
					$firstProject = 0;
					$lastProject = count($arrayProjectos) - 1;
					$anteriorProjecto = 0;
					$siguienteProjecto = 0;
					if($orden == $firstProject){
						$anteriorProjecto = count($arrayProjectos) - 1;
						$siguienteProjecto = $orden + 1;
					} else if($orden == $lastProject){
						$anteriorProjecto = $orden - 1;
						$siguienteProjecto = $firstProject;
					} else{
						$anteriorProjecto = $orden - 1;
						$siguienteProjecto = $orden + 1;
					}
					?>
						<div class="alignleft"><a href="<?php echo $arrayProjectos[$anteriorProjecto][1] ?>"><i class="icon-angle-left"></i> <span>Anterior</span></a></div>
						<div class="alignright"><a href="<?php echo $arrayProjectos[$siguienteProjecto][1] ?>"><span>Siguiente</span> <i class="icon-angle-right"></i></a></div>

				<?php	
				}else{
					if( get_adjacent_post(false, '', false) ) {
					?>
					
					<div class="alignleft"><?php next_post_link( '%link', '<i class="icon-angle-left"></i> <span>Anterior</span>' . _x( '', 'Next post link', 'twentytwelve' ) . '' ); ?></div>
					<?php	
					//next_post_link('%link', '&larr; Anterior');
					} else {
					$args = array('post_type' => 'proyecto',
	                      'post_status' => 'publish',
	                      'orderby' => 'date',
	                      'order' => 'ASC');
					$last = new WP_Query($args); $last->the_post();
					?>
					<div class="alignleft"><a href="<?php echo get_permalink() ?>"><i class="icon-angle-left"></i> <span>Anterior</span></a></div>
					<?php
					//echo '<a href="' . get_permalink() . '">&larr; Anterior</a>';
					wp_reset_query();
					}
					if( get_adjacent_post(false, '', true) ) {
					?>
					<div class="alignright"><?php previous_post_link( '%link', '' . _x( '', 'Previous post link', 'twentytwelve' ) . '<span>Siguiente</span> <i class="icon-angle-right"></i>' ); ?></div>
					<?php	
					//previous_post_link('%link', 'Siguiente &rarr;');
					} else {
					$args = array('post_type' => 'proyecto',
	                      'post_status' => 'publish',
	                      'orderby' => 'date',
	                      'order' => 'DESC');
					$first = new WP_Query($args); $first->the_post();
					?>
					<div class="alignright"><a href="<?php echo get_permalink() ?>"><span>Siguiente</span> <i class="icon-angle-right"></i></a></div>
					<?php
					//echo '<a href="' . get_permalink() . '">Siguiente &rarr;</a>';
					wp_reset_query();
					}
				}
				?>
				</div>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<script>
  $("#menu-item-27").addClass("current-menu-item");
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>