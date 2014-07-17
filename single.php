<?php
/**
 * The Template for displaying all single posts.
 *
 * @package apk-love
 *
 */

	get_header()
?>

	<?php get_template_part( 'partials/featured-image-tiny'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-post site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- .main-content -->

<?php get_footer(); ?>