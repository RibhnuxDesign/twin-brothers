<?php
/**
 * Component Name: Post Meta
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

if ( ! function_exists( 'twin_brothers_post_meta' ) ) :
	/**
	 * Display meta information for the categories, tags and comments.
	 *
	 * @return void
	 */
	function twin_brothers_post_meta() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' ', 'twin-brothers' ) );
			if ( $categories_list ) {
				printf(
					/* translators: categories list */
					'<span class="cat-links">' . esc_html__( '%1$s', 'twin-brothers' ) . '</span>',
					wp_kses( $categories_list, array(
						'a' => array(
							'href' => array(),
							'rel' => array(),
							'class' => array(),
						),
					) )
				);
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ' ', 'twin-brothers' ) );
			if ( $tags_list ) {
				twin_brothers_svg_loader( 'tag' );
				printf(
					/* translators: tag list */
					'<span class="tags-links">' . esc_html__( '%1$s', 'twin-brothers' ) . '</span>',
					wp_kses( $tags_list, array(
						'a' => array(
							'href' => array(),
							'rel' => array(),
							'class' => array(),
						),
					) )
				);
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'twin-brothers' ), esc_html__( '1 Comment', 'twin-brothers' ), esc_html__( '% Comments', 'twin-brothers' ) );
			echo '</span>';
		}

		// Edit link.
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'twin-brothers' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
