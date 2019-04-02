<?php $qodeIconCollections = bridge_qode_return_icon_collections();?>
<form role="search" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="qode_search_form" method="get">
	<?php if($header_in_grid){ ?>
	<div class="container">
		<div class="container_inner clearfix">
			<?php } ?>
			<?php if ( function_exists( 'woocommerce_product_search' ) && function_exists( 'bridge_child_wps_search_form' ) ) {
				bridge_child_wps_search_form();
			} else { ?>
			<?php $qodeIconCollections->getSearchIcon(bridge_qode_option_get_value('search_icon_pack'), array('icon_attributes' => array('class' => 'qode_icon_in_search'))); ?>
			<input type="text" placeholder="<?php esc_html_e('Search', 'bridge'); ?>" name="s" class="qode_search_field" autocomplete="off" />
			<input type="submit" value="<?php esc_html_e('Search', 'bridge'); ?>" />
			<?php } ?>
			<div class="qode_search_close">
				<a href="#">
					<?php $qodeIconCollections->getSearchClose(bridge_qode_option_get_value('search_icon_pack'), array('icon_attributes' => array('class' => 'qode_icon_in_search'))); ?>
				</a>
			</div>
			<?php if($header_in_grid){ ?>
		</div>
	</div>
<?php } ?>
</form>
<style type="text/css">
.qode_search_form {
	z-index: 1000;
}
form.qode_search_form div.product-search {
	display: inline-block;
	width: 90%;
	font-size: 14px;
	vertical-align: top;
	z-index: 10000;
}
form.qode_search_form div.product-search .title {
	height: initial;
}
form.qode_search_form div.product-search .product-search-field {
	font-size: 16px;
	height: 3em;
}
form.qode_search_form div.product-search .product-search-field-clear {
	font-size: 28px;
	color: #f33;
	bottom: -10px;
	top: 0;
	z-index: 100000;
}
</style>
<script type="text/javascript">
if ( typeof jQuery !== 'undefined' ) {
	jQuery( document ).ready( function() {
		jQuery( '.product-search-field' ).on( 'focusin', function(event) {
			jQuery( '.qode_search_form' ).css( 'overflow', 'visible' );
		} );
		jQuery( '.product-search-field' ).on( 'focusout', function(event) {
			jQuery( '.qode_search_form' ).css( 'overflow', 'hidden' );
		} );
	} );
}
</script>
