<?php
/**
 * Template Name: Events
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
			<h2 class="animated fadeIn">Upcoming Events</h2>

			<p>Jams and events are the cornerstone of the parkour community, and we want to make it easier
				to connect traceurs with their communities. That's why we have this events calendar. If you have
				an upcoming event, let us know about it by <a href="https://docs.google.com/forms/d/1tlUKucjKmSMEeddq7W8KL5nnmG8ZNjOR212b_dtE_fU/viewform" target="_blank">filling out this form</a>.</p>


			<form id="event-search-form"  style="visibility:hidden;">
				<input type="text" class="search-input" placeholder="Search for event (eg. Beast Coast)" />
			</form>

			<ul class="event-list current-events" style="visibility:hidden;">
				
			</ul>

			<h3>Past Events</h3>

			<ul class="event-list past-events" style="visibility:hidden;">
				
			</ul>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- /.main-content -->

<script src="http://www.parsecdn.com/js/parse-1.2.15.min.js"></script>
<script src="/wp-content/themes/apk-love/js/moment.min.js"></script>
<script src="/wp-content/themes/apk-love/js/parse.app.events_page.js"></script>



<?php get_footer(); ?>
