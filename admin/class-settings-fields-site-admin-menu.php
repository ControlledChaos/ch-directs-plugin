<?php
/**
 * Settings for the Admin Menu tab on the Site Settings page.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Directs_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Admin Menu tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Menu {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Admin Menu tab.
		require CHD_PATH . 'admin/partials/field-callbacks/class-admin-menu-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin menu settings section.
		add_settings_section(
			'chd-site-admin-menu',
			__( 'Admin Menu Settings', 'ch-directs-plugin' ),
			[],
			'chd-site-admin-menu'
		);

		// Site Settings page position.
		add_settings_field(
			'chd_site_settings_position',
			__( 'Site Settings Position', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_position' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Make this settings page a top-level link and hide other settings links.', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_settings_position'
		);

		// Site Settings page link label.
		add_settings_field(
			'chd_site_settings_link_label',
			__( 'Site Settings Label', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_label' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Change the label of the link to this page', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_settings_link_label'
		);

		// Site Settings page link icon if set to top level.
		add_settings_field(
			'chd_site_settings_link_icon',
			__( 'Site Settings Icon', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_icon' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to this page', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_settings_link_icon'
		);

		// Site Plugin page position.
		add_settings_field(
			'chd_site_plugin_link_position',
			__( 'Site Plugin Position', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_position' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Make the site-specific plugin admin page a top-level link.', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_plugin_link_position'
		);

		// Site Plugin page link label.
		add_settings_field(
			'chd_site_plugin_link_label',
			__( 'Site Plugin Label', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_label' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Change the label of the link to the site-specific plugin page', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_plugin_link_label'
		);

		// Site Plugin page link icon if set to top level.
		add_settings_field(
			'chd_site_plugin_link_icon',
			__( 'Site Plugin Icon', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_icon' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to the site-specific plugin page', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_site_plugin_link_icon'
		);

		// Menus link position.
		add_settings_field(
			'chd_menus_position',
			__( 'Menus Position', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'menus_position' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Make Menus a top-level link', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_menus_position'
		);

		// Widgets link position.
		add_settings_field(
			'chd_widgets_position',
			__( 'Widgets Position', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'widgets_position' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Make Widgets a top-level link', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_widgets_position'
		);

		// Hide Appearance link.
		add_settings_field(
			'chd_hide_appearance',
			__( 'Hide Appearance', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_appearance' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Hide the Appearance link in the admin menu', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_hide_appearance'
		);

		// Hide Plugins link.
		add_settings_field(
			'chd_hide_plugins',
			__( 'Hide Plugins', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_plugins' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Hide the Plugins link in the admin menu', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_hide_plugins'
		);

		// Hide Users link.
		add_settings_field(
			'chd_hide_users',
			__( 'Hide Users', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_users' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Hide the Users link in the admin menu', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_hide_users'
		);

		// Hide Tools link.
		add_settings_field(
			'chd_hide_tools',
			__( 'Hide Tools', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_tools' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'Hide the Tools link in the admin menu', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_hide_tools'
		);

		// Show/Hide Links Manager link.
		add_settings_field(
			'chd_hide_links',
			__( 'Restore Links Manager', 'ch-directs-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_links' ],
			'chd-site-admin-menu',
			'chd-site-admin-menu',
			[ esc_html__( 'The old Links Manager is hidden by default in newer WordPress installations', 'ch-directs-plugin' ) ]
		);

		register_setting(
			'chd-site-admin-menu',
			'chd_hide_links'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function chd_settings_fields_site_admin_menu() {

	return Settings_Fields_Site_Admin_Menu::instance();

}

// Run an instance of the class.
chd_settings_fields_site_admin_menu();