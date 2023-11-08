<?php 
/**
 * Plugin Name:       Samm Plugin
 * Plugin URI:        https://www.mudassir.co/my-work/
 * Description:       Gutenberg blocks
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mudassir Hassan Khan
 * Author URI:        https://mudassir.co/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       samm-plugin
 * Domain Path:       /languages
 */

/**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';
require_once untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/inc/custom-functions.php';

use SAMMPLUGIN\Plugin;

*if ( class_exists( 'SAMMPLUGIN\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );
register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] ); */