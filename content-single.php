<?php
/**
 * @package apk-love
 */

$author_name = get_the_author_meta('display_name');
$author_bio = get_the_author_meta('user_description');
$author_avatar_url = "http://americanparkour.s3.amazonaws.com/assets/community/avatars/user-".get_the_author_meta('nickname').".png";

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<span class="post-date"><?php the_date(); ?></span>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->




	<footer class="entry-meta">
		<?php if (strlen($author_bio) > 0): ?>
			<div class="author-info">
				<img src="<?php echo $author_avatar_url; ?>" class="author-avatar" />
				<div class="author-details">
					<h4 class="author-written-by">Written by</h4>
					<h5 class="author-name"><?php echo $author_name; ?></h5>
					<p class="author-bio"><?php echo $author_bio; ?></p>
				</div>
			</div>
		<?php endif; ?>
		<!--
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'apk-love' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'apk-love' ) );

				if ( ! apk_love_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'apk-love' );
					} else {
						$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'apk-love' );
					}

				} else {
					// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'apk-love' );
					} else {
						$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'apk-love' );
					}

				} // end check for categories on this blog

				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
				);
			?>
		-->
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
