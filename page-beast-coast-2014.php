<?php
/**
 * Template Name: Beast Coast 2014
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<main id="main" role="main" class="page-content page-beast-2014">
		<div class="wrap about-wrap" style="max-width:600px;">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</main><!-- #main -->

<script type="text/javascript">
	if ('undefined' !== typeof mixpanel) {
		mixpanel.track("Beast Coast 2014 viewed");
	} else {
		console.log('Mixpanel not loaded.');
	}
</script>

<?php get_footer(); ?>
