<?php
/**
 * Template Name: Ambassador
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-page site-main page-getting-started" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<div class="wrap">

			
			</div>
			<?php get_sidebar('ambassador'); ?>
		</main><!-- #main -->

		
	</div><!-- /.main-content -->

<?php get_footer(); ?>