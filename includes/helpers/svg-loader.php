<?php
/**
 * Helper Name: SVG Loader
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

if ( ! function_exists( 'twin_brothers_svg_loader' ) ) :
	/**
	 * Load SVGs in &#x60;assets/svgs&#x60; folder.
	 *
	 * @return void
	 */
	function twin_brothers_svg_loader( $svg_name = '' ) {
		if ( ! empty( $svg_name ) ) {
			require get_parent_theme_file_path( '/assets/svgs/' . $svg_name . '.svg' );
		}
	}
endif;
