<?php
/**
 * The main plugin bootstrap class.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPPB_Plugin {

	/**
	 * Holds the singleton instance.
	 */
	private static $instance = null;

	/**
	 * Get the singleton instance.
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {
		$this->load_dependencies();
		$this->init();
	}

	/**
	 * Load required files.
	 */
	private function load_dependencies() {
		// Load the centralized Settings class
		require_once WPPB_PLUGIN_DIR . 'includes/class-wppb-settings.php';
	}

	/**
	 * Initialize the classes based on the environment.
	 */
	private function init() {
		// If we are in the WordPress admin dashboard...
		if ( is_admin() ) {
			// new WPPB_Admin(); (We will create this class later)
		}

		// If we are on the frontend...
		if ( ! is_admin() ) {
			// new WPPB_Frontend(); (We will create this class later)
		}
	}
}

