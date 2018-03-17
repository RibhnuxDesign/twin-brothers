<?php
/**
 * The template for displaying search forms
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<form class="searchForm" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s"><?php esc_html_e( 'Search', 'twin-brothers' ); ?></label>
	<div class="searchForm-input">
		<input class="field" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search &hellip;', 'twin-brothers' ); ?>">
		<span class="searchForm-submit">
			<input class="submit" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'twin-brothers' ); ?>">
		</span>
	</div>
</form>
