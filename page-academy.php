<?php
/**
 * Template Name: Academy
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<div class="main-content wrap group">
		<main id="main" class="site-page site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

			<a name="gyms"></a>
			<h2 class="page-title">American Parkour Academies</h2>
			<p>Our safe, proven curriculum has started <b>thousands</b> on their journeys to 
				imagine and become what they are capable of. We started the world's first parkour gym, 
				and now the APK Academy is growing across the country with accredited gyms and affiliates 
				to bring you the best possible learning and fitness experience through Parkour and Freerunning.</p>
			<ul class="academy-list">
				<li class="academy-gym-item">
					<a href="/academy/washington-dc/">
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/academy-thumbnail-dc.jpg" class="academy-image" />
						<h3 href="/academy/washington-dc/" class="academy-title">APK Academy in Washington, DC</h3>
						<p class="academy-address">219 M St., NW<br />
							Washington, DC 20001</p>
					</a>
				</li>
			</ul>

			<a name="affiliates"></a>
			<h2 class="inner-header">APK Affiliate Gyms</h2>
			<p>APK leads the nation's foremost Parkour Instructor Certification Program. 
				Each APK Academy Affiliate has at least one APK Certified Instructor to guide 
				their programming to be as effective and safe as possible. </p>
			<ul class="academy-list">
				<li class="academy-gym-item">
					<a href="http://www.fightorflightacademy.com/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" target="_blank">
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/academy-thumbnail-affiliate-fof.jpg" class="academy-image" />
						<h3 href="http://www.fightorflightacademy.com/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" class="academy-title" target="_blank">Fight or Flight Academy</h3>
						<p class="academy-address">
							7355 Washington Ave. S <br />
							Edina, MN 55439
						</p>
					</a>
				</li>
				<li class="academy-gym-item">
					<a href="http://www.precisionparkour.com/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" target="_blank">
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/academy-thumbnail-affiliate-precisionparkour.jpg" class="academy-image" />
						<h3 href="http://www.precisionparkour.com/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" class="academy-title" target="_blank">Precision Parkour</h3>
						<p class="academy-address">
							432 Keawe St.<br />
							Honolulu, HI 96813
						</p>
					</a>
				</li>
				<li class="academy-gym-item">
					<a href="http://strikegym.com/programs/kids-teens-classes/parkour-urban-acrobatics/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" target="_blank">
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/academy-thumbnail-affiliate-strikegym.jpg" class="academy-image" />
						<h3 href="http://strikegym.com/programs/kids-teens-classes/parkour-urban-acrobatics/?utm_source=apk&utm_medium=academy-page&utm_campaign=referral" class="academy-title" target="_blank">StrikeGym</h3>
						<p class="academy-address">
							6814 North State Road 7<br />
							Coconut Creek, FL 33073
						</p>
					</a>
				</li>
			</ul>
		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div><!-- /.main-content -->


<?php get_footer(); ?>
