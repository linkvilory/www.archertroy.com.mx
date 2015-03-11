<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content">
			<p><img class="alignnone size-full wp-image-34" src="wp-content/uploads/2014/11/header1.jpg" alt="header1" width="1920" height="455"></p>
      <h1>PROYECTOS RECIENTES</h1>
      <div class='proyectos-recientes'>     
      <?php
      /****
       *
       * Seleccionar los 8 proyectos más recientes para mostrarlos 
       * como imagen con un vínculo a su página
       *
       ****/
      $index = 0;
      $args = array(
          'post_type' => 'proyecto',
          'order' => 'DESC',
          'orderby' => 'date',
          'posts_per_page' => 8
      );
      $my_query = new WP_Query($args);

      if ($my_query->have_posts()) {
        while ($my_query->have_posts()) : $my_query->the_post(); 
        $index++;
        
        if ($index < 8) {        
        ?>
        <div class='wp-caption'>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
        </div>
    <?php
        } else {
          ?> 
        <div class='wp-caption'>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
        </div></div>          
          <?php  
        } 
        endwhile;
      } 
      wp_reset_query();
      ?>
      <!-- 
      h1>NOTICIAS</h1 
      div class="noticias"
      -->
      <h1>BLOG</h1>      
      <div class="proyectos-recientes">
          <?php
          /****
           *
           * Seleccionar los 8 proyectos más recientes para mostrarlos 
           * como imagen con un vínculo a su página
           *
           ****/
          $index = 0;
          /*
          $args = array(
              'post_type' => 'noticia',
              'order' => 'ASC',
              'orderby' => 'post_modified',
              'posts_per_page' => 5
          ); */
          $args = array(
              'post_type' => array('noticia', 'post'),
              'order' => 'ASC',
              'orderby' => 'date',
              'posts_per_page' => 8
          );
          
          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) {
            while ($my_query->have_posts()) : $my_query->the_post(); 
            $index++;
        
            if ($index < 8) {        
            ?>
            <div class='wp-caption'>
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
                <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
            </div>
        <?php
            } else {
              ?> 
            <div class='wp-caption'>
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
                <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
            </div></div>          
              <?php  
            } 
            endwhile;
          } 
          wp_reset_query();
          ?>
        
        <!-- img class="alignnone size-thumbnail wp-image-35" src="http://archertroy.eamexicano.com../../../wp-content/uploads/2014/11/noticias1-300x156.jpg" alt="noticias1" width="225" height="117">&nbsp;<img class="alignnone size-thumbnail wp-image-36" src="http://archertroy.eamexicano.com../../../wp-content/uploads/2014/11/noticias2-300x156.jpg" alt="noticias2" width="225" height="117">&nbsp;<img class="alignnone size-thumbnail wp-image-37" src="http://archertroy.eamexicano.com../../../wp-content/uploads/2014/11/noticias3-300x156.jpg" alt="noticias3" width="225" height="117">&nbsp;<img class="alignnone size-thumbnail wp-image-38" src="http://archertroy.eamexicano.com../../../wp-content/uploads/2014/11/noticias4-300x156.jpg" alt="noticias4" width="225" height="117">&nbsp;<img class="alignnone size-thumbnail wp-image-39" src="http://archertroy.eamexicano.com../../../wp-content/uploads/2014/11/noticias5-300x156.jpg" alt="noticias5" width="225" height="117" -->
        <!-- /div -->
    </div>
      
      
			<!-- ?php the_content(); ? -->
      
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
