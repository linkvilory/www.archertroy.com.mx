<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class='mini-post'>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
      
      <div class='post-info'>
        <?php echo "<div class='post-date'>" .  date_i18n( 'd F Y', strtotime( post_date ) )  . "</div>"; ?>
			</div>
        <div class="navigation">
          <div class="alignleft">
          <?php
          $prev_post = get_previous_post();
          if (!empty( $prev_post )): ?>
            <a href="<?php echo $prev_post->ID; ?>" class="post-navigation-left"><i class="icon-angle-left"></i> Anterior</a>
          <?php endif; ?>
          </div>
          <div class="alignright">
          <?php
          $next_post = get_next_post();
          if (!empty( $next_post )): ?>
            <a href="<?php echo $next_post->ID; ?>" class="post-navigation-right">Siguiente <i class="icon-angle-right"></i></a>
            <?php endif; ?>
          </div>
        </div> <!-- end navigation -->
		</div><!-- .entry-content -->
		<?php endif; ?>
	</article><!-- #post -->
</div>