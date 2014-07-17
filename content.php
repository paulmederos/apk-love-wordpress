<?php
/**
 * @package apk-love
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class("home-news-item group"); ?>>
	<a href="<?php the_permalink() ?>" class="home-news-link">
		<div class="post-date"><?php the_date(); ?></div>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="post-summary"><?php the_excerpt(); ?></div>

		<footer class="entry-meta">
			<!-- 
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'apk-love' ) );
					if ( $categories_list && apk_love_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'apk-love' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'apk-love' ) );
					if ( $tags_list ) :
				?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'apk-love' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>
			-->
			
			<!-- <?php edit_post_link( __( 'Edit', 'apk-love' ), '<span class="edit-link">', '</span>' ); ?> -->
		</footer><!-- .entry-meta -->
	</a>
</article><!-- #post-## -->
