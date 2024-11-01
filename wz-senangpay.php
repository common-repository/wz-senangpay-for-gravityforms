<?php
/*
Plugin Name: WZ SenangPay for GravityForms
Plugin URI: http://www.facebook.com/billplzplugin
Description: Integrates Gravity Forms with SenangPay Payments, enabling end users to purchase goods and services through Gravity Forms.
Version: 1.0
Author: Wan Zulkarnain
Author URI: http://www.wanzul-hosting.com
Text Domain: senangpayforgravityforms
Domain Path: /languages
*/


define( 'GF_SENANGPAY_VERSION', '1.0' );

add_action( 'gform_loaded', array( 'GF_SenangPay_Bootstrap', 'load' ), 5 );

class GF_SenangPay_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-senangpay.php' );

		GFAddOn::register( 'GFSenangPay' );
	}
}

function gf_senangpay() {
	return GFSenangPay::get_instance();
}