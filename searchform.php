<?php
/**
 * The template for displaying search forms
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<form class="searchForm" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="searchForm-input">
		<input class="field" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Type and enter to search!', 'twin-brothers' ); ?>">
	</div>
</form>
