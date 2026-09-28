<?php
/**
 * Handles retrieving and updating plugin settings.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPPB_Settings {

	/**
	 * Get all plugin settings merged with defaults.
	 *
	 * @return array
	 */
	public static function get_settings() {
		// 1. Define our centralized defaults.
		$defaults = array(
			'enabled'    => 1,
			'post_types' => array( 'post' ), // Default to 'post' only
			'position'   => 'top',
			'color'      => '#28E98C',
			'height'     => 4,
			'z_index'    => 99999,
		);

		// 2. Fetch the saved options from the database.
		// If nothing is saved yet, return an empty array.
		$saved_settings = get_option( 'wppb_settings', array() );

		// 3. Merge saved settings with defaults.
		// If a saved setting is missing, the default is used automatically!
		return wp_parse_args( $saved_settings, $defaults );
	}
}