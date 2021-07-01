<?php
/**
 * Plugin Name: Object Sync for Salesforce
 * Description: Object Sync for Salesforce maps and syncs data between Salesforce objects and WordPress objects.
 * Version: 2.0.0
 * Author: MinnPost
 * Author URI: https://code.minnpost.com
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: object-sync-for-salesforce
 *
 * @package Object_Sync_Salesforce
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * The full path to the main file of this plugin
 *
 * This can later be passed to functions such as
 * plugin_dir_path(), plugins_url() and plugin_basename()
 * to retrieve information about plugin paths
 *
 * @since 2.0.0
 * @var string
 */
define( 'OBJECT_SYNC_SALESFORCE_FILE', __FILE__ );

/**
 * The plugin's current version
 *
 * @since 2.0.0
 * @var string
 */
define( 'OBJECT_SYNC_SALESFORCE_VERSION', '2.0.0' );

// Load the autoloader.
require_once 'lib/autoloader.php';

/**
 * Retrieve the instance of the main plugin class
 *
 * @since 0.2.0
 * @return Object_Sync_Salesforce
 */
function object_sync_for_salesforce() {
	static $plugin;

	if ( is_null( $plugin ) ) {
		$plugin = new Object_Sync_Salesforce( OBJECT_SYNC_SALESFORCE_VERSION, __FILE__ );
	}

	return $plugin;
}

object_sync_for_salesforce()->init();
