<?php
/**
 * Template Name: APKU
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	<img src="http://americanparkour.com/wp-content/uploads/2014/07/APKUpt11.png" id='banner1'>
	<img src="http://americanparkour.com/wp-content/uploads/2014/07/APKUpt21.png" id='banner2'>
	<?php get_template_part( 'partials/featured-image-small'); ?>
	
	<div class="main-content wrap group">
		<main id="main" class="site-page site-main page-getting-started" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<div class="wrap">

			
			</div>
		</main><!-- #main -->

		
	</div><!-- /.main-content -->

<?php get_footer(); ?>



<style>

#banner1{
	display: inline;
	position: absolute;
	float: left;
	z-index: 1000;
	margin-left: 20%;
	margin-top: 30px;
}

#banner2{
	display: inline;
	float: left;
	position: absolute;
	z-index: 900;
	margin-left: 64%;
	margin-top: 30px;
	display:none;
}

@media screen and (max-width: 699px){

#banner1{
	display: none;
}

#banner2{
	display: none;
}



}

</style>

<script>

$(document).ready(function() {
 
 var Uslide = function(){
 	$("#banner2").slideDown('slow', 'linear');
 }
  window.setTimeout(Uslide, 1000);
});
</script>