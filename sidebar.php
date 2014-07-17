<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package apk-love
 */

$hide_primary_sidebar = get_post_meta( get_the_ID(), "hide_primary_sidebar", true );

?>
	<div id="secondary" class="widget-area group" role="complementary">
		
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

<!-- 			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', 'apk-love' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h3 class="widget-title"><?php _e( 'Meta', 'apk-love' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside> -->

		<?php endif; // end sidebar widget area ?>

		<?php if ($hide_primary_sidebar == 'true'): ?>
			<!-- Removed default sidebar for this page (look at Page options) -->
		<?php else: ?>

			<!-- Begin custom side modules found in sidebar.php -->
			<aside class="widget widget_text store-widget">
				<h3 class="widget-title" id="store-widget-title">Embrace the Enso</h3>
				<div class="textwidget">
					<a href="http://store.americanparkour.com/products/enso-hooded-shirt-heather-white" >
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/store-module-photo-enso.png" class="store-widget-photo" />
					</a>
					<p>A moment of flow, your mind is clear, and movement is perfect. That's <a href="http://store.americanparkour.com/products/enso-hooded-shirt-heather-white">the Enso</a>.</p>
				</div>
			</aside>

			<!-- <aside class="widget widget_text">
				<h3 class="widget-title">APK Academy WOD</h3>
				<div class="textwidget">
					<p>Daily parkour-inspired <a href="/category/academy/workouts/">workouts</a>, sent straight to your inbox. Be strong, and sign up now:</p>
					<form action="" method="post">
						<input type="email" class="email-input" placeholder="Your email address" />
						<input type="submit" class="email-submit button button-subtle" value="Send me daily workouts" />
					</form>
				</div>
			</aside> -->

			<aside class="widget widget_text">
				<h3 class="widget-title">Connect on Social</h3>
				<div class="textwidget">
					<ul class="social-list">
						<li class="social-network">
							<a href="http://facebook.com/americanparkour" class="social-network-link group" target="_blank">
								<span class="social-icon social-icon-facebook"></span>
								<span class="social-text">Say hi on Facebook</span>
							</a>
						</li>
						<li class="social-network">
							<a href="http://instagram.com/americanparkour" class="social-network-link group" target="_blank">
								<span class="social-icon social-icon-instagram"></span>
								<span class="social-text">#apklife on Instagram</span>
							</a>
						</li>
						<li class="social-network">
							<a href="http://youtube.com/americanparkour" class="social-network-link group" target="_blank">
								<span class="social-icon social-icon-youtube"></span>
								<span class="social-text">Be inspired on YouTube</span>
							</a>
						</li>
						<li class="social-network">
							<a href="http://twitter.com/americanparkour" class="social-network-link group" target="_blank">
								<span class="social-icon social-icon-twitter"></span>
								<span class="social-text">Hang out on Twitter</span>
							</a>
						</li>
					</ul>
				</div>
			</aside>

			<aside class="widget widget_text store-widget">
				<h3 class="widget-title" id="store-widget-title">Feiyues in the APK Store</h3>
				<div class="textwidget">
					<a href="http://store.americanparkour.com/products/feiyue-parkour-training-shoes">
						<img src="http://americanparkour.s3.amazonaws.com/assets/community/store-module-photo-feiyue.png" class="store-widget-photo" />
					</a>
					<p>The best pair of parkour shoes of all time? Probably. Pick them up now <a href="http://store.americanparkour.com/products/feiyue-parkour-training-shoes">in our store</a>.</p>
				</div>
			</aside>
			<!-- end custom side modules -->
		<?php endif; ?>

	</div><!-- #secondary -->
