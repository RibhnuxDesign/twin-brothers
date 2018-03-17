<?php
/**
 * Partial Template Name: Search Content
 *
 * Search page template.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
			the_title(
				sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h3>'
			);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php twin_brothers_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php twin_brothers_post_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
