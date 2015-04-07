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

				<?php get_template_part( 'content', 'proyecto' ); $actualId = get_the_ID(); ?>

				<div class="project-navigation">
					<div class='entry-content-social-links'>
						<a id="facebookPost" class="sficn icon-facebook" alt="Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_title() . get_permalink() ?>"></a>
						<a id="twitterPost" class="sficn icon-twitter" alt="Twitter" target="_blank" href="https://twitter.com/home?status=<?php echo get_permalink() ?>"></a>
						<a id="pinterestPost" class="sficn icon-pinterest" alt="Pinterest" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo get_permalink() ?>&media=&description="></a>
						<a id="googlePost" class="sficn icon-google-plus" alt="Google" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink() ?>"></a>
					</div>
				<?php

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

				<div class="alignleft"><a href="<?php echo $arrayProjectos[$siguienteProjecto][1] ?>"><i class="icon-angle-left"></i> Anterior</a></div>
				<div class="alignright"><a href="<?php echo $arrayProjectos[$anteriorProjecto][1] ?>">Siguiente <i class="icon-angle-right"></i></a></div>
				
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