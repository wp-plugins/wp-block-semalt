<?php
/*
Plugin Name: WP Block Semalt
Plugin URI: https://www.filament-studios.com
Description: Helps reduce traffic from the semalt crawler
Version: 1.0
Author: Chris Klosowski
Author URI: http://www.kungfugrep.com
License: GPLv2 or later
*/

class WP_Block_Semalt {

	public function __construct() {
		add_action( 'parse_request', array( $this, 'block_all_the_semalts' ) );
	}

	public function block_all_the_semalts() {
		$referer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : false;

		if ( empty( $referer ) ) {
			return;
		}

		if ( strpos( $referer, '.semalt.com' ) !== false ) {
			wp_die( '', '', array( 'response' => 403 ) );
			exit;
		}
	}
}

function wp_bs_load_plugin() {
	$wp_bs_loaded = new WP_Block_Semalt();
}
add_action( 'plugins_loaded', 'wp_bs_load_plugin' );
