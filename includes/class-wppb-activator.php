<?php
/**
 * Fired during plugin activation.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPPB_Activator {

	/**
	 * Run the activation routine.
	 */
	public static function activate() {
		// Define the default settings for our plugin
		$default_settings = array(
			'enabled'    => 1,               // 1 means enabled, 0 means disabled
			'post_types' => array( 'post' ), // Array of post types, defaulting to standard blog posts
			'position'   => 'top',           // 'top' or 'bottom'
			'color'      => '#28E98C',       // Our default green color
			'height'     => 4,               // 4px height
			'z_index'    => 99999,           // High z-index to stay above sticky menus
		);

		// Check if settings already exist in the database.
		// If they do NOT exist (false), add our defaults.
		if ( false === get_option( 'wppb_settings' ) ) {
			add_option( 'wppb_settings', $default_settings );
		}
	}
}