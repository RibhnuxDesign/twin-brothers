<?php
/**
 * Twin Brothers functions, hooks, and init
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

// Read theme config.
require get_parent_theme_file_path( '/twin-brothers-config.php' );

// Function helpers.
require get_parent_theme_file_path( '/includes/loaders/helper.php' );

// Class libraries.
require get_parent_theme_file_path( '/includes/loaders/libclass.php' );

// Theme setup.
require get_parent_theme_file_path( '/includes/loaders/theme.php' );

// Widgets init.
require get_parent_theme_file_path( '/includes/loaders/widget.php' );

// Plugin dependencies init.
require get_parent_theme_file_path( '/includes/loaders/plugin.php' );

// Actions and Filters init.
require get_parent_theme_file_path( '/includes/loaders/hook.php' );

// Assets (JS, CSS, Fonts) init.
require get_parent_theme_file_path( '/includes/loaders/asset.php' );

// Components init.
require get_parent_theme_file_path( '/includes/loaders/component.php' );

// Customizers init.
require get_parent_theme_file_path( '/includes/loaders/customizer.php' );
