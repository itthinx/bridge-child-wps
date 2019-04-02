<?php
if ( function_exists( 'woocommerce_product_search' ) && function_exists( 'bridge_child_wps_search_form' ) ) {
	bridge_child_wps_search_form();
} else { ?>
<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
	<div><label class="screen-reader-text" for="s"><?php esc_html_e('Search for:', 'bridge')?></label>
		<input type="text" value="" placeholder="<?php esc_html_e('Search Here', 'bridge'); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="&#xf002" />
	</div>
</form>
<?php }
