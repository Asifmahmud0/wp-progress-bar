<?php
/**
 * Plugin Name:       WP Progress Bar
 * Plugin URI:        https://github.com/yourusername/wp-progress-bar
 * Description:       A lightweight reading progress bar for WordPress posts, pages, and custom post types.
 * Version:           1.0.0
 * Author:            Md Asif Ikbal
 * Text Domain:       wp-progress-bar
 * Domain Path:       /languages
 */

// Security: Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define Plugin Constants
if ( ! defined( 'WPPB_VERSION' ) ) {
	define( 'WPPB_VERSION', '1.0.0' );
}

if ( ! defined( 'WPPB_PLUGIN_DIR' ) ) {
	define( 'WPPB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'WPPB_PLUGIN_URL' ) ) {
	define( 'WPPB_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}