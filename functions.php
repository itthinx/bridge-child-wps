<?php
/**
 * Integrates WooCommerce Product Search to use the live product search field instead of the default search forms.
 *
 * @author     itthinx
 * @link       https://www.itthinx.com
 * @package    bridge-child-wps
 * @since      1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns the live product search form if WooCommerce Product Search is active. Otherwise it will return an empty string.
 *
 * Uses the standard search form replacement if it is enabled. This will show the form based on the settings
 * under WooCommerce > Settings > Search > General : Standard Product Search : Product Search Field settings ...
 * If the standard search form replacement is not enabled, we will render the live product search field using
 * its default settings.
 */
function bridge_child_wps_search_form() {
	$form = '';
	if ( class_exists( 'WooCommerce_Product_Search_Field' ) && method_exists( 'WooCommerce_Product_Search_Field', 'get_product_search_form' ) ) {
		$form = WooCommerce_Product_Search_Field::get_product_search_form( '' );
	}
	if ( strlen( $form ) === 0 ) {
		$form = woocommerce_product_search( array( 'floating' => false, 'dynamic_focus' => false ) );
	}
	echo $form;
}

// function theme_enqueue_styles() {
// 	wp_enqueue_style( 'bridge-parent-stylesheet', get_template_directory_uri() . '/style.css' );
// 	wp_enqueue_style( 'bridge-child-wps', get_stylesheet_directory_uri() . '/style.css', array( 'bridge-stylesheet' ) );
// }
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
