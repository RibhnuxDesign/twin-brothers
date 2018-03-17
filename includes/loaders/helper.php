<?php
/**
 * Twin Brothers helper loader
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

foreach ( $twin_brothers_config['helpers'] as $helper ) {
	$helper_path = get_parent_theme_file_path( '/includes/helpers/' . $helper . '.php' );
	if ( file_exists( $helper_path ) ) {
		require $helper_path;
	}
}
