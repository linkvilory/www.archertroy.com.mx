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
		<img class="coverPhotoFront Img Home" src="/wp-content/uploads/cover/homeMore959.jpg" alt="ArcherTroy"/>
    <div class="coverPhotoFront Bg Home"></div>	
      <div class="primerInnerPadding">
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
          'post__in' => array(1432, 1374, 1371, 1297, 1328, 1460, 1317, 1389),
          'orderby'=>'post__in'
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
      <h1>NOTICIAS</h1>      
      <div class="ultimas-noticias">
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
              'post_type' => 'noticia',
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
                <a href="/noticia/#<?php the_ID(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
                <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
            </div>
        <?php
            } else {
              ?> 
            <div class='wp-caption'>
                <a href="/noticia/#<?php the_ID(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
                <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
            </div></div>          
              <?php  
            } 
            endwhile;
          } 
          wp_reset_query();
          ?>
        
    </div>
      
      
			<!-- ?php the_content(); ? -->
      
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
      </div>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
