<?php
/**
 * Courtney Hoffman Directs
 *
 * @package     CH_Directs_Plugin
 * @version     1.0.0
 * @author      Greg Sweet <greg@ccdzine.com>
 * @copyright   Copyright © 2018, Greg Sweet
 * @link        https://github.com/ControlledChaos/ch-directs-plugin
 * @link        https://controlledchaos.github.io/ch-directs-plugin/
 * @license     GPL-3.0+ http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Plugin Name:  Courtney Hoffman Directs
 * Plugin URI:   https://github.com/ControlledChaos/ch-directs-plugin
 * Description:  Functionality for the courtneyhoffmandirects.com website.
 * Version:      1.0.0
 * Author:       Controlled Chaos Design
 * Author URI:   http://ccdzine.com/
 * License:      GPL-3.0+
 * License URI:  https://www.gnu.org/licenses/gpl.txt
 * Text Domain:  ch-directs-plugin
 * Domain Path:  /languages
 * Tested up to: 5.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class
 *
 * Defines constants, gets the initialization class file
 * plus the activation and deactivation classes.
 *
 * @since  1.0.0
 * @access public
 */

// First check for other classes with the same name.
if ( ! class_exists( 'CH_Directs_Plugin' ) ) :
	final class CH_Directs_Plugin {

		/**
		 * Instance of the class
		 *
		 * @since  1.0.0
		 * @access public
		 * @return object Returns the instance.
		 */
		public static function instance() {

			// Varialbe for the instance to be used outside the class.
			static $instance = null;

			if ( is_null( $instance ) ) {

				// Set variable for new instance.
				$instance = new self;

				// Define plugin constants.
				$instance->constants();

				// Require the core plugin class files.
				$instance->dependencies();

			}

			// Return the instance.
			return $instance;

		}

		/**
		 * Constructor method
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void Constructor method is empty.
		 */
		private function __construct() {}

		/**
		 * Define plugin constants
		 *
		 * Change the prefix, the text domain, and the default meta image
		 * to that which suits the needs of your website.
		 *
		 * Change the version as appropriate.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function constants() {

			/**
			 * Plugin version
			 *
			 * Keeping the version at 1.0.0 as this is a starter plugin but
			 * you may want to start counting as you develop for your use case.
			 *
			 * @since  1.0.0
			 * @return string Returns the latest plugin version.
			 */
			if ( ! defined( 'CHP_VERSION' ) ) {
				define( 'CHP_VERSION', '1.0.0' );
			}

			/**
			 * Text domain
			 *
			 * @since  1.0.0
			 * @return string Returns the latest plugin version.
			 *
			 * @todo   Replace all strings with constant.
			 */
			if ( ! defined( 'CHP_DOMAIN' ) ) {
				define( 'CHP_DOMAIN', 'ch-directs-plugin' );
			}

			/**
			 * Plugin folder path
			 *
			 * @since  1.0.0
			 * @return string Returns the filesystem directory path (with trailing slash)
			 *                for the plugin __FILE__ passed in.
			 */
			if ( ! defined( 'CHP_PATH' ) ) {
				define( 'CHP_PATH', plugin_dir_path( __FILE__ ) );
			}

			/**
			 * Plugin folder URL
			 *
			 * @since  1.0.0
			 * @return string Returns the URL directory path (with trailing slash)
			 *                for the plugin __FILE__ passed in.
			 */
			if ( ! defined( 'CHP_URL' ) ) {
				define( 'CHP_URL', plugin_dir_url( __FILE__ ) );
			}

			/**
			 * Universal slug
			 *
			 * This URL slug is used for various plugin admin & settings pages.
			 *
			 * The prefix will change in your search & replace in renaming the plugin.
			 * Change the second part of the define(), here as 'ch-directs-plugin',
			 * to your preferred page slug.
			 *
			 * @since  1.0.0
			 * @return string Returns the URL slug of the admin pages.
			 */
			if ( ! defined( 'CHP_ADMIN_SLUG' ) ) {
				define( 'CHP_ADMIN_SLUG', 'ch-directs-plugin' );
			}

			/**
			 * Default meta image
			 *
			 * Change the path and file name to suit your needs.
			 *
			 * @since  1.0.0
			 * @return string Returns the URL of the image.
			 */
			if ( ! defined( 'CHP_DEFAULT_META_IMAGE' ) ) {
				define(
					'CHP_DEFAULT_META_IMAGE',
					plugins_url( 'frontend/assets/images/default-meta-image.jpg', __FILE__ )
				);
			}

		}

		/**
		 * Throw error on object clone.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __clone() {

			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'ch-directs-plugin' ), '1.0.0' );

		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __wakeup() {

			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, __( 'This is not allowed.', 'ch-directs-plugin' ), '1.0.0' );

		}

		/**
		 * Require the core plugin class files.
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void Gets the file which contains the core plugin class.
		 */
		private function dependencies() {

			// The hub of all other dependency files.
			require_once CHP_PATH . 'includes/class-init.php';

			// Include the activation class.
			require_once CHP_PATH . 'includes/class-activate.php';

			// Include the deactivation class.
			require_once CHP_PATH . 'includes/class-deactivate.php';

		}

	}
	// End core plugin class.

	/**
	 * Put an instance of the plugin class into a function.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance of the `CH_Directs_Plugin` class.
	 */
	function chd_plugin() {

		return CH_Directs_Plugin::instance();

	}

	// Begin plugin functionality.
	chd_plugin();

// End the check for the plugin class.
endif;

// Bail out now if the core class was not run.
if ( ! function_exists( 'chd_plugin' ) ) {
	return;
}

/**
 * Register the activaction & deactivation hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
register_activation_hook( __FILE__, '\chd_activate_plugin' );
register_deactivation_hook( __FILE__, '\chd_deactivate_plugin' );

/**
 * The code that runs during plugin activation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function chd_activate_plugin() {

	// Run the activation class.
	chd_activate();

}

/**
 * The code that runs during plugin deactivation.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function chd_deactivate_plugin() {

	// Run the deactivation class.
	chd_deactivate();

}

/**
 * Add a link to the plugin's about page on the plugins page.
 *
 * The about page in its original form is intended to be read by
 * developers for getting familiar with the plugin, so it is
 * included in the admin menu under plugins.
 *
 * If you would like to link the page elsewhere as you make it your own then
 * do so in admin/class-admin-pages.php, in the about_plugin method.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @param  array $links Default plugin links on the 'Plugins' admin page.
 * @since  1.0.0
 * @access public
 * @return mixed[] Returns an HTML string for the about page link.
 *                 Returns an array of the about link with the default plugin links.
 * @link   https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
 */
function chd_about_link( $links ) {

	/**
	 * Site about page link depends on the admin menu setting.
	 *
	 * @since  1.0.0
	 * @return string returns the URL of the page with parent or not.
	 */

	if ( is_admin() ) {

		// If Advanced Custom Fields is active.
		if ( chd_acf_options() ) {

			// Get the field.
			$acf_position = get_field( 'chd_site_plugin_link_position', 'option' );

			// Return true if the field is set to `top`.
			if ( 'top' == $acf_position ) {
				$position = true;

			// Otherwise return `false`.
			} else {
				$position = false;
			}

		// If ACF is not active, get the field from the WordPress options page.
		} else {

			// Get the field.
			$position = get_option( 'chd_site_plugin_link_position' );
		}

		if ( true == $position ) {
			$url = admin_url( 'index.php?page=' . CHP_ADMIN_SLUG . '-settings' );
		} else {
			$url = admin_url( 'admin.php?page=' . CHP_ADMIN_SLUG . '-settings' );
		}

		// Create new settings link array as a variable.
		$about_page = [
			sprintf(
				'<a href="%1s" class="' . CHP_ADMIN_SLUG . '-page-link">%2s</a>',
				admin_url( 'plugins.php?page=' . CHP_ADMIN_SLUG . '-page' ),
				esc_attr( 'Documentation', 'ch-directs-plugin' )
			),
		];

		// Merge the new settings array with the default array.
		return array_merge( $about_page, $links );

	}

}
// Filter the default settings links with new array.
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'chd_about_link' );

/**
 * Add links to the plugin settings pages on the plugins page.
 *
 * Change the links to those which fill your needs.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @param  array  $links Default plugin links on the 'Plugins' admin page.
 * @param  object $file Reference the root plugin file with header.
 * @since  1.0.0
 * @return mixed[] Returns HTML strings for the settings pages link.
 *                 Returns an array of custom links with the default plugin links.
 * @link   https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
 */
function chd_settings_links( $links, $file ) {

	if ( is_admin() ) {

		/**
		 * Site settings page link depends on the admin menu setting.
		 *
		 * @since  1.0.0
		 * @return string returns the URL of the page with parent or not.
		 */

		// If Advanced Custom Fields is active.
		if ( chd_acf_options() ) {

			// Get the field.
			$acf_position = get_field( 'chd_settings_link_position', 'option' );

			// Return true if the field is set to `top`.
			if ( 'top' == $acf_position ) {
				$position = true;

			// Otherwise return `false`.
			} else {
				$position = false;
			}

		// If ACF is not active, get the field from the WordPress options page.
		} else {

			// Get the field.
			$position = get_option( 'chd_site_settings_position' );
		}

		if ( $position || true == $position ) {
			$url = admin_url( 'admin.php?page=' . CHP_ADMIN_SLUG . '-settings' );
		} else {
			$url = admin_url( 'index.php?page=' . CHP_ADMIN_SLUG . '-settings' );
		}

		if ( $file == plugin_basename( __FILE__ ) ) {

			// Add links to settings pages.
			$links[] = sprintf(
				'<a href="%1s" class="' . CHP_ADMIN_SLUG . '-settings-link">%2s</a>',
				$url,
				esc_attr( 'Site Settings', 'ch-directs-plugin' )
			);
			$links[] = sprintf(
				'<a href="%1s" class="' . CHP_ADMIN_SLUG . '-scripts-link">%2s</a>',
				admin_url( 'options-general.php?page=' . CHP_ADMIN_SLUG . '-scripts' ),
				esc_attr( 'Script Options', 'ch-directs-plugin' )
			);

		}

		// Return the full array of links.
		return $links;

	}

}
add_filter( 'plugin_row_meta', 'chd_settings_links', 10, 2 );

/**
 * Check if WordPress is 5.0 or greater.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if the WordPress version is 5.0 or greater.
 */
function chd_new_cms() {

	// Get the WordPress version.
	$version = get_bloginfo( 'version' );

	if ( $version >= 5.0 ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Check if the CMS is ClassicPress.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if ClassicPress is running.
 */
function chd_classicpress() {

	if ( function_exists( 'classicpress_version' ) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Check for Advanced Custom Fields.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if the ACF free or Pro plugin is active.
 */
function chd_acf() {

	if ( class_exists( 'acf' ) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Check for Advanced Custom Fields Pro.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if the ACF Pro plugin is active.
 */
function chd_acf_pro() {

	if ( class_exists( 'acf_pro' ) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Check for Advanced Custom Fields options page.
 *
 * @since  1.0.0
 * @access public
 * @return bool Returns true if the ACF free plus the
 *              Options Page addon or Pro plugin is active.
 */
function chd_acf_options() {

	if ( class_exists( 'acf_pro' ) ) {
		return true;
	} elseif ( ( class_exists( 'acf' ) && class_exists( 'acf_options_page' ) ) ) {
		return true;
	} else {
		return false;
	}

}