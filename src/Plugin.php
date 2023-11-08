<?php
/**
 * Plugin Class.
 *
 * @package samm-plugin
 */

namespace SAMMPLUGIN;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	public function activate() {}
	public function deactivate() {}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'SAMM_PLUGIN_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'SAMM_PLUGIN_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'SAMM_PLUGIN_PLUGIN_BUILD_PATH', SAMM_PLUGIN_PLUGIN_PATH . '/assets/build' );
		define( 'SAMM_PLUGIN_PLUGIN_BUILD_URL', SAMM_PLUGIN_PLUGIN_URL . '/assets/build' );
		define( 'SAMM_PLUGIN_PLUGIN_VERSION', '1.0.0' );

		new Assets();
		new Patterns();
		new SearchApi();
	}
}

