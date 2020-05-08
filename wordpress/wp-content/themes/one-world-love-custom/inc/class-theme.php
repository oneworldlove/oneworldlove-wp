<?php
/**
 * Bootstraps the One World Love Custom theme.
 *
 * @package OneWorldLove
 */

namespace OneWorldLove;

/**
 * Main plugin bootstrap file.
 */
class Theme extends Theme_Base {

	/**
	 * Plugin assets prefix.
	 *
	 * @var string Lowercased dashed prefix.
	 */
	public $assets_prefix;

	/**
	 * Plugin meta prefix.
	 *
	 * @var string Lowercased underscored prefix.
	 */
	public $meta_prefix;

	/**
	 * Plugin constructor.
	 */
	public function __construct() {
		parent::__construct();

		// Initiate classes.
		$classes = array(
			new Register( $this ),
		);

		// Add classes doc hooks.
		foreach ( $classes as $instance ) {
			$this->add_doc_hooks( $instance );
		}

		// Define some prefixes to use througout the plugin.
		$this->assets_prefix = strtolower( preg_replace( '/\B([A-Z])/', '-$1', __NAMESPACE__ ) );
		$this->meta_prefix   = strtolower( preg_replace( '/\B([A-Z])/', '_$1', __NAMESPACE__ ) );
	}

	/**
	 * Register Front Assets: No front end yet.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_assets() {
	    wp_enqueue_style("{$this->assets_prefix}-style", "{$this->dir_url}/assets/dist/css/app.css", null);
	}

	/**
	 * Admin assets.
	 *
	 * @action admin_enqueue_scripts
	 */
	public function admin_enqueue_assets() {
		wp_register_script( "{$this->assets_prefix}-admin", "{$this->dir_url}/assets/dist/js/admin.min.js", ['jquery', 'jquery-ui-datepicker', 'wp-color-picker', 'wp-util'], time(), true );
	}
}
