<?php
/**
 * Twin Brothers components loader
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

foreach ( $twin_brothers_config['components'] as $component ) {
	$component_path = get_parent_theme_file_path( '/components/' . $component . '.php' );
	if ( file_exists( $component_path ) ) {
		require $component_path;
	}
}
