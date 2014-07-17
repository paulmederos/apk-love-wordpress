<?php if (is_page_template('page-about.php')): ?>
	<footer id="colophon" class="footer about-footer" role="contentinfo">
		<div class="footer-color-overlay">
			<h2>Now you know who we are and what we do. Join the movement.</h2>
			<a href="/getting-started" class="button button-subtle">Get started here</a>
		</div>
	</footer><!-- #colophon -->
<?php else: ?>
	<footer id="colophon" class="footer" role="contentinfo">
		<div class="footer-color-overlay">
			<h2>We believe in the power of parkour to improve people's lives.</h2>
			<a href="/about" class="button button-subtle">See what else we believe in</a>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>