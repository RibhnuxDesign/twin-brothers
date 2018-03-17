<?php
/**
 * Template Name: Empty Page
 * Post Type: page
 *
 * Template for displaying a page just with the header, footer, and a "naked" content area.
 * Good for landing pages or other types of pages where you want to add a lot of custom markup.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

get_header();
while ( have_posts() ) :
	the_post();
	get_template_part( 'partial-templates/post/content', 'empty' );
endwhile;
get_footer();
