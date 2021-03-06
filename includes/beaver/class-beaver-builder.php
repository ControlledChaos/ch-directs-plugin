<?php
/**
 * Provided for Beaver Builder customization.
 *
 * The example modules here are taken from the official Beaver
 * Builder example plugin.
 *
 * @link       https://kb.wpbeaverbuilder.com/article/124-custom-module-developer-guide
 *
 * No namespace since Beaver Builder is not namespaced and class
 * references will throw an error without a namespace reference.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Includes\Beaver
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Beaver Builder class.
 *
 * @since  1.0.0
 * @access public
 */
class CHD_Beaver_Builder {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		add_action( 'plugins_loaded', [ $this, 'setup_hooks' ] );

	}

	/**
	 * Setup hooks if the builder is installed and activated.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function setup_hooks() {

		// Load custom modules.
		add_action( 'init', [ $this, 'load_modules' ] );

		// Register custom fields.
		add_filter( 'fl_builder_custom_fields', [ $this, 'register_fields' ] );

		// Enqueue custom field assets.
		add_action( 'init', [ $this, 'enqueue_field_assets' ] );

	}

	/**
	 * Loads our custom modules.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	static public function load_modules() {

		require_once CHD_PATH . 'includes/beaver/modules/basic-example/basic-example.php';
		require_once CHD_PATH . 'includes/beaver/modules/example/example.php';

	}

	/**
	 * Registers our custom fields.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Returns the path to the module fields.
	 */
	static public function register_fields( $fields ) {

		$fields['chd-custom-beaver-field'] = CHD_PATH . 'includes/beaver/fields/custom-fields.php';
		return $fields;

	}

	/**
	 * Enqueues our custom field assets only if the builder UI is active.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	static public function enqueue_field_assets() {

		if ( ! FLBuilderModel::is_builder_active() ) {
			return;
		}

		wp_enqueue_style( 'chd-beaver-fields', CHD_URL . 'includes/beaver/assets/css/fields.css', [], '' );
		wp_enqueue_script( 'chd-beaver-fields', CHD_URL . 'includes/beaver/assets/js/fields.js', [], '', true );

	}

}

// Run the class.
$chd_beaver_builder = new CHD_Beaver_Builder;