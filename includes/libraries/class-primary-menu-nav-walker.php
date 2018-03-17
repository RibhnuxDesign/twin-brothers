<?php
/**
 * Primary Nav Walker
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

if ( ! class_exists( 'Primary_Menu_Nav_Walker' ) ) :

	/**
	 * Primary Menu Navigation Walker Class
	 *
	 * @since 1.0.0
	 * @package Twin Brothers
	 * @author  Ribhnux Design
	 */
	class Primary_Menu_Nav_Walker extends Walker_Nav_Menu {
		/**
		 * Start Level.
		 *
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param int   $depth (default: 0) Depth of page. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @return void
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= '<ul>';
		}

		/**
		 * Ends the list of after the elements are added.
		 *
		 * @access public
		 * @param string   $output Passed by reference. Used to append additional content.
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 */
		public function end_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= '</ul>';
		}

		/**
		 * Start El.
		 *
		 * @access public
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @param mixed $item Menu item data object.
		 * @param int   $depth (default: 0) Depth of menu item. Used for padding.
		 * @param array $args (default: array()) Arguments.
		 * @param int   $id (default: 0) Menu item ID.
		 * @return void
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$classes = array();
			if ( ! empty( $item->classes ) ) {
				$classes = (array) $item->classes;
			}

			$active_class = '';
			if ( in_array( 'current-menu-item', $classes ) ) {
				$active_class = ' class="active"';
			} else if ( in_array( 'current-menu-parent', $classes ) ) {
				$active_class = ' class="active-parent"';
			} else if ( in_array( 'current-menu-ancestor', $classes ) ) {
				$active_class = ' class="active-ancestor"';
			}

			$url = '';
			if ( ! empty( $item->url ) ) {
				$url = $item->url;
			}

			$output .= sprintf(
				/* translators: active class, url, title attribute and anchor text */
				'<li %s><a href="%s" title="%s">%s</a></li>',
				$active_class,
				$url,
				/* translators: %s: title */
				sprintf( __( 'Link to %s' ), $item->title ),
				$item->title
			);
		}

		/**
		 * Ends the element output, if needed.
		 *
		 * @access public
		 * @param string   $output Passed by reference. Used to append additional content.
		 * @param WP_Post  $item   Page data object. Not used.
		 * @param int      $depth  Depth of page. Not Used.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 */
		public function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$output .= '</li>';
		}

		/**
		 * Menu Fallback
		 * =============
		 * If this function is assigned to the wp_nav_menu's fallback_cb variable
		 * and a menu has not been assigned to the theme location in the WordPress
		 * menu manager the function with display nothing to a non-logged in user,
		 * and will add a link to the WordPress menu manager if logged in as an admin.
		 *
		 * @param array $args passed from the wp_nav_menu function.
		 */
		public static function fallback( $args ) {

		}
	}
endif;
