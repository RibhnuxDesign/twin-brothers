<?php
/**
 * Component Name: Pagination
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

if ( ! function_exists( 'twin_brothers_pagination' ) ) :
	/**
	 * Pagination used for archive, author, and all pages that have page partials.
	 *
	 * @return void
	 */
	function twin_brothers_pagination() {
		the_posts_pagination( array(
			'prev_text' => '&laquo; <span class="screen-reader-text">' . __( 'Previous page', 'twin-brothers' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twin-brothers' ) . '</span> &raquo;',
		) );
	}
endif;
