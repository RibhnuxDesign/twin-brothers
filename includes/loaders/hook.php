<?php
/**
 * Twin Brothers hooks loader
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

foreach ( $twin_brothers_config['filters'] as $filter_name ) {
	$filter_path = get_parent_theme_file_path( '/includes/filters/' . $filter_name . '.php' );
	if ( file_exists( $filter_path ) ) {
		require $filter_path;
	}
}

foreach ( $twin_brothers_config['actions'] as $action_name ) {
	$action_path = get_parent_theme_file_path( '/includes/actions/' . $action_name . '.php' );
	if ( file_exists( $action_path ) ) {
		require $action_path;
	}
}
