<?php
/*
Plugin Name: WP Block Semalt
Plugin URI: https://www.filament-studios.com
Description: Helps reduce traffic from the semalt crawler
Version: 1.1
Author: Chris Klosowski
Author URI: http://www.kungfugrep.com
License: GPLv2 or later
*/

class WP_Block_Semalt {

	public function __construct() {
		add_action( 'parse_request', array( $this, 'block_all_the_semalts' ) );
	}

	public function block_all_the_semalts() {

		// Don't even check if the user is logged in or we're in the admin
		if ( is_user_logged_in() || is_admin() ) {
			return;
		}

		$referer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : false;

		if ( empty( $referer ) ) {
			return;
		}

		$default_urls = array(
			'.semalt.com',
			'best-seo-offer.com',
		);

		$bad_urls = apply_filters( 'wpbs_semalt_urls', $default_urls );

		foreach ( $bad_urls as $bad_url ) {
			if ( strpos( $referer, $bad_url ) !== false ) {
				wp_die( '', '', array( 'response' => 403 ) );
				exit;
			}
		}
	}
}

function wp_bs_load_plugin() {
	$wp_bs_loaded = new WP_Block_Semalt();
}
add_action( 'plugins_loaded', 'wp_bs_load_plugin' );
