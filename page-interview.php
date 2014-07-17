<?php
/**
 * Template Name: Interview
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-page site-main site-interview" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

		<?php // get_sidebar(); ?>
	</div><!-- /.main-content -->


<?php get_footer(); ?>
