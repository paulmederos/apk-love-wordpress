<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package apk-love
 */

get_header(); ?>

<div class="error-404-page">
	<div class="main-content wrap group">
		<div class="error-404-content group">
			<h1>404</h1>
			<h2>Oops, this is funky!</h2>
			<p>The page you're looking for doesn't seem to exist, or it might have been moved.</p>
			<p>
				We recommend <a href="http://archives.americanparkour.com<?php echo $_SERVER["REQUEST_URI"] ?>">searching the ancient archives</a>; 
				Jump back <a href="/">home</a>; 
				or do 20 squats and 10 pushups, then try reloading the page.</p>
				<p></p>
		</div>

	</div><!-- /.wrap.group -->
</div>

<?php wp_footer(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-741642-5', 'americanparkour.com');
	  ga('send', 'pageview');
	  ga('send', '404');

	</script>