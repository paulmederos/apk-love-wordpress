<?php
/**
 * Template Name: About
 *
 * @package apk-love
 */

	$page_title = get_post_meta( get_the_ID(), "title", true );
	$page_header_image = get_post_meta( get_the_ID(), "featured_image", true );

	get_header(); 
?>
	
	<?php get_template_part( 'partials/featured-image-small'); ?>

	<main id="main" role="main" class="page-content page-about">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>

		<div class="wrap about-wrap">
			<p class="about-intro">American Parkour improves people’s lives by promoting, teaching, and 
				advancing the discipline of parkour. Come with us on a journey to discover 
				what your body and mind are capable of.</p>
		</div>

		<div class="wrap mid-wrap about-wrap">
			<p>We've been helping traceurs and freerunners from around the world to learn, 
				train, connect, and enjoy life via parkour since 2002.</p>
			<p>We run the <a href="/academy#gyms">APK Academy</a>, a parkour gym in Washington, DC. We have <a href="/academy#affiliates">Affiliates</a> 
				around the world. We offer the world's most comprehensive <a href="/academy/parkour-instructor-certification">parkour instructor 
				certification</a> to help trainers learn what they need to safely teach parkour 
				to others.</p>
			<p>We love representing parkour in our day-to-day lives, so we've always focused 
				on creating the best apparel for parkour and freerunning through our <a href="http://store.americanparkour.com">parkour store</a>.</p>
			<p>Our globally renowned performance team, <a href="http://tribalmovement.com">the Tribe</a>, have 
				travelled for live events, seminars, and have performed at hundreds of commercial venues.</p>
		</div>
		<div class="core-beliefs">
			<div class="wrap mid-wrap">
				<h2 class="about-subhead subhead-belief">We've had years to discover who we are, and what we believe in:</h2>
				<ol class="core-belief-list">
					<li class="belief">
						<h3>We believe in the power of parkour to improve people's live. </h3>
						<p>People should be accountable for their actions and proud of themselves. 
							Through personal achievement, you build self reliance, self confidence, and patience.</p>
					</li>
					<li class="belief">
						<h3>We believe in exploring the world.</h3>
						<p>It's important to play, like a kid. We believe in seeing things 
							in new ways, different perspectives, an open mind. Explore yourself.</p>
					</li>
					<li class="belief">
						<h3>We believe in making things of quality, substance, and lasting value.</h3>
						<p>Things we build should be useful for generations to come.</p>
					</li>
					<li class="belief">
						<h3>We believe in respecting ourselves and the community.</h3>
						<p>Our environment is sacred, and we aim to protect it. The Leave No Trace 
							mentality is second-nature to us.</p>
					</li>
					<li class="belief">
						<h3>We believe that humans are capable of amazing things.</h3>
						<p>Improvement comes from constant hard work and progression, not quick fixes or 
							“natural abilities”. We believe in striving for progress, not perfection.</p>
					</li>
					<li class="belief">
						<h3>Play is important.</h3>
						<p>We have fun, because it's the best part of being human.</p>
					</li>
					<li class="belief">
						<h3>We believe in living in the moment.</h3>
						<p>Society tells you that a hand rail is to be leaned on. Parkour shows you 
							that the hand rail can be a tool for exercise, play, creativity and improvement.</p>
					</li>
				</ol>
			</div><!-- /.wrap -->
		</div><!-- /.core-beliefs -->
		<div class="contact-us wrap mid-wrap">
			<h2 class="about-subhead">Whenever you need us, reach out.</h2>
			<p>You can connect with us through <a href="http://facebook.com/americanparkour">Facebook</a>, 
				<a href="http://twitter.com/americanparkour">Twitter</a>, or <a href="http://instagram.com/americanparkour">Instagram</a>. 
				We're always open through <a href="mailto:hello@americanparkour.com">email</a>. 
				If you happen to be in Washington, DC, <a href="/academy/washington-dc">come by our gym</a> 
				to say hello!</p>
		</div>
	</main><!-- #main -->

<script type="text/javascript">
	if ('undefined' !== typeof mixpanel) {
		mixpanel.track("About viewed");
	} else {
		console.log('Mixpanel not loaded.');
	}
</script>

<?php get_footer(); ?>
