<?php
/**
 * Sidebar widget.
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>

<div id="sidebar" class="col">
	<?php
	if ( is_active_sidebar( 'sidebar' ) ) :
		dynamic_sidebar( 'sidebar' );
	endif;
	?>
</div>
