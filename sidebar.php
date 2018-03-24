<?php
/**
 * Sidebar widget.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>

<aside class="col">
	<div id="sidebar">
		<?php
		if ( is_active_sidebar( 'sidebar' ) ) :
			dynamic_sidebar( 'sidebar' );
		endif;
		?>
	</div>
</aside>
