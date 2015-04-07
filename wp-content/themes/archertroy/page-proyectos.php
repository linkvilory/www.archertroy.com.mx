<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
    	<article id="post-<?php the_ID(); ?>" class="page type-page status-publish hentry">
    		<header class="entry-content">
    			<h1>PROYECTOS</h1>
    		</header>
        <div class='grid proyectos'>
			<?php 

			$ids = array();

        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'tv',
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?>  

        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'radio',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?>  
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'print',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'outdoor',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'digital',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'activaciones',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'innovacion',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
          		$ids[] = get_the_ID();
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        	<?php 
        	$args = array('post_type' => 'proyecto',
        			  'taxonomy' => 'media',
        			  'term' => 'integradas',
        			  'post__not_in' => $ids,
                      'post_status' => 'publish',
                      'orderby' => 'date',
                      'order' => 'DESC');
        	$my_query = new WP_Query($args);
       		if ($my_query->have_posts()) {
          		while ( $my_query->have_posts() ) : $my_query->the_post(); 
      		?>
		        <div class='wp-caption'>
		            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
		            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
		        </div>
			<?php endwhile; 
        	} 
            wp_reset_query();
      		// end of the loop. 
        	?> 
        </div>   
        <button class="boton-Cartel">CARTELES</button>    
        	<!--<a href="/?page_id=308" class="boton-carteles large" style="position: absolute; right: 2px; bottom: -50px;">CARTELES</a> --> 
          	<!--<a href='posters/' class='boton-carteles large' style='display: none;'>CARTELES</a>-->
          	<!--<a href='posters/' class='boton-carteles small' style='display: none;'>CARTELES</a>-->
    	</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>