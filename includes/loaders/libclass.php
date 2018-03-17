<?php
/**
 * Twin Brothers class loader
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

foreach ( $twin_brothers_config['libraries'] as $library ) {
	$libpath = get_parent_theme_file_path( '/includes/libraries/' . $library . '.php' );
	if ( file_exists( $libpath ) ) {
		require_once $libpath;
	}
}

