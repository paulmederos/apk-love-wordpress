<?php 
	// Set the variables via each page's custom attributes
	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );
	$page_image_credit = get_post_meta( get_the_ID(), "featured_image_credit", true );
?>

<?php if (!empty($page_header_image)): ?>
	<div class="featured-image featured-tiny animated fadeIn" style="background-image:url(<?php echo $page_header_image; ?>)">
<?php else: ?>
	<div class="featured-image featured-tiny animated fadeIn" style="background-repeat:repeat;">
<?php endif; ?>
	
	<?php if (!empty($page_title)): ?>
		<div class="wrap">
			<h1 class="featured-home-title">
				<?php echo $page_title; ?>
			</h1>
		</div>
	<?php endif; ?>
	
	<?php if (!empty($page_image_credit)): ?>
		<aside class="featured-image-caption">
			<?php echo $page_image_credit; ?>
		</aside>
	<?php endif; ?>
</div><!-- /.featured-image-tiny -->