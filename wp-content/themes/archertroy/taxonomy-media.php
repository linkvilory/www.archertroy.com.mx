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
    	<article id="innerProyectos" class="page type-page status-publish hentry">
    		<header class="entry-header">
    			<h1>Proyectos > <?= get_query_var($wp_query->query_vars['taxonomy']); $_SESSION["categoria"] = get_query_var($wp_query->query_vars['taxonomy']);?></h1>
            </header>
        <div class='grid proyectos'>
			<?php while ( have_posts() ) : the_post(); ?>
        <div class='wp-caption'>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a> 
            <p class="wp-caption-text"><?php the_post_thumbnail_caption(); ?></p>
        </div>
			<?php endwhile; // end of the loop. ?>
        </div>
    	</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>