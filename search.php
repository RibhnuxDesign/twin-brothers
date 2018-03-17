<?php
/**
 * The template for displaying the search pages.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

get_header();
?>

<div class="siteWrapper-search">
	<div id="content-wrapper" class="contentWrapper" tabindex="-1">
		<main id="main" class="siteMain">
			<header id="page-header" class="pageHeader-author">
				<h1 class="page-title">
				<?php
					printf(
						/* translators: %s: search query */
						esc_html__( 'Search Results for: %s', 'twin-brothers' ),
						'<span>' . get_search_query() . '</span>'
					);
				?>
				</h1>
			</header><!-- #page-header -->

			<?php if ( have_posts() ) : ?>
				
				<?php
				while ( have_posts() ) :
					the_post();
					// Load partial-templates for search page.
					get_template_part( 'partial-templates/post/content', 'search' );
				endwhile; // end of the loops.
				?>

			<?php else : ?>

				<?php
					// Load partial-templates for empty content.
					get_template_part( 'partial-templates/post/content', 'none' );
				?>

			<?php endif; ?>
		</main><!-- #main -->

		<!-- The pagination component -->
		<?php twin_brothers_pagination(); ?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>
</div><!-- #content-wrapper -->

<?php get_footer(); ?>
