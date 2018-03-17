<?php
/**
 * Twin Brothers widgets
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

if ( ! function_exists( 'twin_brothers_widgets_init' ) ) :
	/**
	 * Init all widgets from config.
	 *
	 * @return void
	 */
	function twin_brothers_widgets_init() {
		global $twin_brothers_config;

		foreach ( $twin_brothers_config['widgets'] as $id => $widget ) {
			$widget['id'] = $id;
			register_sidebar( $widget );
		}
	}
endif;
add_action( 'widgets_init', 'twin_brothers_widgets_init' );
