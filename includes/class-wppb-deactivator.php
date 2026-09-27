<?php
/**
 * Fired during plugin deactivation.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPPB_Deactivator {

	/**
	 * Run the deactivation routine.
	 */
	public static function deactivate() {
		// We purposefully leave this empty for now.
		// We DO NOT delete settings here!
	}
}