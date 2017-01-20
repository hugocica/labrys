<?php
/**
 * Search form template
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.1
 */

?>

<form method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-wrap" js-ui-search>
		<input type="text" / js-ui-text>
		<span type="search" value="" placeholder="<?php _e( 'Search field: type and press enter', 'wm_domain' ); ?>" name="s" class="eks" js-ui-close></span>
	</div>
</form>