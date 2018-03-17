<?php
/**
 * Partial Template Name: Single Content
 *
 * Single post template.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php twin_brothers_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twin-brothers' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twin_brothers_post_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
