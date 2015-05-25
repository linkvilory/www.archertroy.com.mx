<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * s
 */
?>
<div id="<?php the_ID(); ?>" class='listado-noticias'>
  <div class="contenedor-imagen">
      <?php the_post_thumbnail(); ?>
  </div>
  <div class='contenedor-texto'>
      <h1 class="titulo"><?php the_title(); ?></h1>
        <?php
          $trimexcerpt = get_the_excerpt();
          $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 38, $more = '… ' ); 
      ?>
        <p><?php echo $shortexcerpt; ?></p>
        <div class='datos-extra'>
          <div class='fecha'><?php the_time('M.j.Y'); ?></div>  <a href='<?php echo get_post_meta($post->ID, 'url_noticia', true); ?>' class='boton-noticia' target='_blank'>VER MÁS</a>
        </div>
  </div>
</div>  