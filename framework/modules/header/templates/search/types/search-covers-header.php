<?php $qodeIconCollections = bridge_qode_return_icon_collections();?>
<form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="qode_search_form_3" method="get">
	<?php if($header_in_grid){ ?>
    <div class="container">
        <div class="container_inner clearfix">
			<?php if($overlapping_content) {?><div class="overlapping_content_margin"><?php } ?>
				<?php } ?>
                <div class="form_holder_outer">
                    <div class="form_holder">

						<?php if ( function_exists( 'woocommerce_product_search' ) && function_exists( 'bridge_child_wps_search_form' ) ) {
							bridge_child_wps_search_form();
						} else { ?>
                        <input type="text" placeholder="<?php esc_html_e('Search', 'bridge'); ?>" name="s" class="qode_search_field" autocomplete="off" />
						<?php } ?>
                        <div class="qode_search_close">
                            <a href="#">
								<?php $qodeIconCollections->getSearchClose(bridge_qode_option_get_value('search_icon_pack')); ?>
                            </a>
                        </div>
                    </div>
                </div>
				<?php if($header_in_grid){ ?>
				<?php if($overlapping_content) {?></div><?php } ?>
        </div>
    </div>
<?php } ?>
</form>
<style type="text/css">
form.qode_search_form_3 div.product-search {
	display: inline-block;
	width: 90%;
	font-size: 14px;
	vertical-align: top;
}
form.qode_search_form_3 div.product-search .title {
	height: initial;
}
form.qode_search_form_3 div.product-search .product-search-field-clear {
	font-size: 28px;
	color: #f33;
}
</style>
