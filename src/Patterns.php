<?php
/**
 * Patterns Class.
 *
 * @package samm-plugin
 */

namespace SAMMPLUGIN;

/**
 * Class Patterns.
 */
class Patterns {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize.
	 */
	private function init() {
		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

	/**
	 * Register Block Patterns.
	 */
	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			// Get the two column pattern content.
			$two_columns_content = samm_plugin_get_template( 'patterns/two-columns' );

			/**
			 * Register Two Column Pattern
			 */
			register_block_pattern(
				'samm-plugin/two-columns',
				[
					'title'       => __( 'Samm Plugin Two Column', 'samm-plugin' ),
					'description' => __( 'Samm Two Column Patterns', 'samm-plugin' ),
					'categories'  => [ 'samm-columns' ],
					'content'     => $two_columns_content,
				]
			);

			/**
			 * Two Columns Secondary Pattern
			 */
			$two_columns_secondary_content = samm_plugin_get_template( 'patterns/two-columns-secondary' );

			register_block_pattern(
				'samm-plugin/two-columns-secondary',
				[
					'title'       => __( 'Samm Two Columns Secondary', 'samm-plugin' ),
					'description' => __( 'Samm Cover Block with image and text', 'samm-plugin' ),
					'categories'  => [ 'samm-columns' ],
					'content'     => $two_columns_secondary_content,
				]
			);
		}
	}

	/**
	 * Register Block Pattern Categories.
	 */
	public function register_block_pattern_categories() {

		$pattern_categories = [
			'samm-columns' => __( 'Samm Plugin Columns', 'samm-plugin' ),
		];

		if ( ! empty( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}
}
