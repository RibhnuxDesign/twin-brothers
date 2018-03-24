<?php
/**
 * Partial Template Name: searchbar
 *
 * Intuitive search in navigation bar.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>

<div class="searchbar">
	<a class="searchbar-toggler d-flex align-items-center noBg" href="#" title="<?php esc_attr_e( 'Search', 'twin-brothers' ); ?>">
		<?php twin_brothers_svg_loader('search'); ?>
	</a>

	<div class="searchbar-form">
		<?php get_search_form(); ?>
	</div>
</div>
