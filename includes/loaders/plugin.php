<?php
/**
 * Twin Brothers plugin setup
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

foreach ( $twin_brothers_config['plugins'] as $slug => $plugin ) {
	if ( $plugin['init'] ) {
		require get_parent_theme_file_path( '/includes/plugins/' . $slug . '.php' );
	}
}

if ( ! function_exists( 'twin_brothers_tgmpa_register' ) ) :
	/**
	 * Register plugin dependencies using TGMPA
	 *
	 * @return void
	 */
	function twin_brothers_tgmpa_register() {
		global $twin_brothers_config;

		/**
		* Read plugins from config
		*
		* @var array
		*/
		$plugins = array();
		foreach ( $twin_brothers_config['plugins'] as $slug => $plugin ) {
			$plugin['slug'] = $slug;
			unset( $plugin['init'] );
			unset( $plugin['srctype'] );
			$plugins[] = $plugin;
		}

		/**
		* TMGPA Config
		*
		* @var array
		*/
		$config = array(
			'id'           => 'twin-brothers',
			'default_path' => '',
			'menu'         => 'twin-brothers-install-plugins',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);

		tgmpa( $plugins, $config );
	}
endif;
add_action( 'tgmpa_register', 'twin_brothers_tgmpa_register' );
