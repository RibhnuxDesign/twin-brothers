<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

get_header();
?>
 
<div class="siteWrapper-notFound">
	<div id="content-wrapper" class="contentWrapper" tabindex="-1">
		<main id="main" class="siteMain">
			<?php get_template_part( 'partial-templates/post/content', 'not-found' ); ?>
		</main><!-- #main -->
	</div><!-- #content -->

	<?php get_sidebar(); ?>
</div><!-- #content-wrapper -->

<?php get_footer(); ?>
