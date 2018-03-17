<?php
/**
 * Partial Template Name: Page Content
 *
 * Page template for page.php.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'twin-brothers' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p>
		<?php
			esc_html_e(
				'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
				'twin-brothers'
			);
		?>
		</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'twin-brothers' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
