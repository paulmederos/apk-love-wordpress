<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );
	$hide_primary_sidebar = get_post_meta( get_the_ID(), "hide_primary_sidebar", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-page site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		
		<?php get_sidebar(); ?>
	</div><!-- /.main-content -->


<?php get_footer(); ?>
