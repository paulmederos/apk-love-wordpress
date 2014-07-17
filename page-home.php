<?php
/**
 * Template Name: Home
 *
 * @package apk-love
 */

$args = array('category_name' => 'news', 'showposts' => '4');
$the_query = new WP_Query($args);
$store_sale = get_post_meta( get_the_ID(), "store_sale", true );
$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );
$page_header_overlay = get_post_meta( get_the_ID(), "featured_overlay", true );

get_header(); 

?>




	<?php if (!empty($page_header_image)): ?>
		<div class="featured-image featured-home animated fadeIn" style="background-image:url(<?php echo $page_header_image; ?>)">
	<?php else: ?>
		<div class="featured-image featured-home animated fadeIn">
	<?php endif; ?>
	
	<?php if (!empty($page_header_overlay)): ?>
		<div class="featured-overlay" style="background-color:<?php echo $page_header_overlay; ?>"></div>
	<?php endif; ?>
	<div class="wrap group">
		<h1 class="featured-home-title animated fadeInLeft">
			<?php echo get_post_meta( get_the_ID(), "title", true ); ?>
		</h1>
	</div>

	<?php if ($store_sale == 'true'): ?>
		<div class="store-sale animated bounceInUp delayed-animation">
			<div class="wrap">
				<p>Our Store has crazy prices right now: get up to <strong>50% off</strong> on our most popular items. How long will this last? Who knows.</p>
				<a href="http://store.americanparkour.com/?utm_source=community&utm_medium=featured-banner&utm_campaign=holiday2013" class="button button-subtle with-arrow">Shop Now</a>
			</div>
		</div>
	<?php endif; ?>
</div><!-- /.featured-home -->

<div class="main-content wrap group">	
	<main id="main" class="site-main" role="main">
		<h3>Lastest Community Updates</h3>
		<ul class="post-summary-list">
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<li class="home-news-item">
					<a href="<?php the_permalink() ?>" class="home-news-link">
						<div class="post-date"><?php the_date(); ?></div>
						<h2 class="post-title"><?php the_title(); ?></h2>
						<div class="post-summary"><?php the_excerpt(); ?></div>
					</a>
				</li>
			<?php endwhile;?>
		</ul>
	</main><!-- #main -->

	<?php get_sidebar(); ?>
</div><!-- /.wrap.group -->

<script type="text/javascript">
	if ('undefined' !== typeof mixpanel) {
		mixpanel.track("Welcome viewed");
	} else {
		console.log('Mixpanel not loaded.');
	}
</script>

<?php get_footer(); ?>
