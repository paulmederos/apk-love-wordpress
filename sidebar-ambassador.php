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




		<?php endif; // end sidebar widget area ?>

		<?php if ($hide_primary_sidebar == 'true'): ?>
			<!-- Removed default sidebar for this page (look at Page options) -->
		<?php else: ?>
			<ul class='ambassador' style="padding-left: 0px;">
			<?php
				$blogusers = get_users( 'blog_id=1&orderby=nicename&role=administrator' );
				foreach ( $blogusers as $user ) {
					echo '<li>' . esc_html( $user->user_nicename ) . '</li>';
				}?>
				</ul>

			<!-- Begin custom side modules found in sidebar.php -->
			

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


<style>
	
	.ambassador li{
		list-style: none;
		border: 1px solid black;
		border-radius: 20px;
		font-size: 1em;
		padding: 7px 0px 7px 15px
	}

	.ambassador ul{
		padding-left: 0px;
	}

    .ambassador li:hover{
    	color: white;
    	background-color: #126aff;
    	border-color: white;
    }
 




</style>