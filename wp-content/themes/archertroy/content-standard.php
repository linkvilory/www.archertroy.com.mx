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

<?php if (is_blog()) { ?>
<div class='blog-wp-caption'>
    <a href="<?php the_ID(); ?>" rel="bookmark" class='post-grid'><?php the_post_thumbnail(); ?></a> 
    <p class="blog-wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
</div>
<?php } else { ?>
  <div class='wp-caption'>
      <a href="<?php the_ID(); ?>" rel="bookmark" class='post-grid'><?php the_post_thumbnail(); ?></a> 
      <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
  </div>  
<?php } ?>
