<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till main content
 *
 * @package apk-love
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="keywords" content="parkour, free running, free run, jump, video, 
	tutorial, tutorials, videos, parkour tutorial, US, america, USA, free running videos, 
	parkour tutorials, new york, free running pictures, parkour new york, los angeles parkour, 
	california parkour, freerunning, parkour clothing, freerunning clothing, parkour merchandise, 
	parkour gear, parkour training, how to do parkour, parkour video">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://americanparkour.s3.amazonaws.com/assets/community/favicon.png" rel="shortcut icon" type="image/x-icon">

	<!-- TypeKit Fonts -->
  <script type="text/javascript" src="//use.typekit.net/vtc5bft.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- jQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<!-- Mixpanel Analytics -->
	<script type="text/javascript">
	(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
		typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
		b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
		mixpanel.init("aa454054df04171c37e39119acf31f86");
	</script>

	<!-- KISSmetrics Analytics Trial -->
	<script type="text/javascript">var _kmq = _kmq || [];
		var _kmk = _kmk || 'e0acac38ef0a87f4a417f885aca1c9bc4faebf60';
		function _kms(u){
		  setTimeout(function(){
		    var d = document, f = d.getElementsByTagName('script')[0],
		    s = d.createElement('script');
		    s.type = 'text/javascript'; s.async = true; s.src = u;
		    f.parentNode.insertBefore(s, f);
		  }, 1);
		}
		_kms('//i.kissmetrics.com/i.js');
		_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
	</script>

	<!-- Wordpress -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
		<div class="wrap group">
			<h1 class="site-title hide-text">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="apk-logo"><?php bloginfo( 'name' ); ?></a>
			</h1>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <div class="screen-reader-text skip-link hide-text"><a href="#content"><?php _e( 'Skip to content', 'apk-love' ); ?></a></div> -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			<a class="icon icon-menu" href="#open-menu"></a>
		</div><!-- /.wrap.group -->
	</header><!-- /.site-header -->

