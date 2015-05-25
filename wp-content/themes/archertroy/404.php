<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p class="errorFirstLine"><b>ERROR 404:</b> LO SENTIMOS LA PÁGINA QUE ESTÁS BUSCANDO NO EXISTE</p>
					<img class="errorImg" src="/wp-content/uploads/error/error-404.png"/>
					<p class="errorSecondLine">ESTÁS BUSCANDO ALGO EN ESPECÍFICO. TE AYUDAMOS A ENCONTRARLO</p>
					<input class="error404Contacto" type="button" value="CONTACTO" />				
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>