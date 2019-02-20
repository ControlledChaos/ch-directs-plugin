<?php
/**
 * Settings fields for media options.
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
 * Settings fields for media options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Media {

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

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

        // Hard crop default image sizes.
        add_action( 'after_setup_theme', [ $this, 'crop' ] );

    }

    /**
	 * Media settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        /**
         * Image crop settings.
         */
        add_settings_field( 'chd_hard_crop_medium', __( 'Medium size crop', 'ch-directs-plugin' ), [ $this, 'medium_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'ch-directs-plugin' ) ] );

        add_settings_field( 'chd_hard_crop_large', __( 'Large size crop', 'ch-directs-plugin' ), [ $this, 'large_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'ch-directs-plugin' ) ] );

        register_setting(
            'media',
            'chd_hard_crop_medium'
        );

        register_setting(
            'media',
            'chd_hard_crop_large'
        );

        /**
         * SVG options.
         */
        add_settings_section( 'chd-svg-settings', __( 'SVG Images', 'ch-directs-plugin' ), [ $this, 'svg_notice' ], 'media' );

        add_settings_field( 'chd_add_svg_support', __( 'SVG Support', 'ch-directs-plugin' ), [ $this, 'svg_support' ], 'media', 'chd-svg-settings', [ __( 'Add ability to upload SVG images to the media library.', 'ch-directs-plugin' ) ] );

        register_setting(
            'media',
            'chd_add_svg_support'
        );

        /**
         * Fancybox settings.
         */
        add_settings_section( 'chd-media-settings', __( 'Fancybox', 'ch-directs-plugin' ), [ $this, 'fancybox_description' ], 'media' );

        add_settings_field( 'chd_enqueue_fancybox_script', __( 'Enqueue Fancybox script', 'ch-directs-plugin' ), [ $this, 'fancybox_script' ], 'media', 'chd-media-settings', [ __( 'Needed for lightbox functionality.', 'ch-directs-plugin' ) ] );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            add_settings_field( 'chd_enqueue_fancybox_styles', __( 'Enqueue Fancybox styles', 'ch-directs-plugin' ), [ $this, 'fancybox_styles' ], 'media', 'chd-media-settings', [ __( 'Leave unchecked to use a custom stylesheet in a theme.', 'ch-directs-plugin' ) ] );
        }

        register_setting(
            'media',
            'chd_enqueue_fancybox_script'
        );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            register_setting(
                'media',
                'chd_enqueue_fancybox_styles'
            );
        }

    }

    /**
     * Medium crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function medium_crop( $args ) {

        $html = '<p><input type="checkbox" id="chd_hard_crop_medium" name="chd_hard_crop_medium" value="1" ' . checked( 1, get_option( 'chd_hard_crop_medium' ), false ) . '/>';

        $html .= '<label for="chd_hard_crop_medium"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Large crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function large_crop( $args ) {

        $html = '<p><input type="checkbox" id="chd_hard_crop_large" name="chd_hard_crop_large" value="1" ' . checked( 1, get_option( 'chd_hard_crop_large' ), false ) . '/>';

        $html .= '<label for="chd_hard_crop_large"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Update crop options.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function crop() {

        if ( get_option( 'chd_hard_crop_medium' ) ) {
            update_option( 'medium_crop', 1 );
        } else {
            update_option( 'medium_crop', 0 );
        }

        if ( get_option( 'chd_hard_crop_large' ) ) {
            update_option( 'large_crop', 1 );
        } else {
            update_option( 'large_crop', 0 );
        }

    }

    /**
     * Add warning about using SVG images.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function svg_notice() {

        $html = sprintf( '<p>%1s</p>', esc_html__( 'Use SVG images with caution! Only add support if you trust or examine each SVG file that you upload.', 'ch-directs-plugin' ) );

        echo $html;

    }

    /**
     * SVG options.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     *
     * @since    1.0.0
     */
    public function svg_support( $args ) {

        $html = '<p><input type="checkbox" id="chd_add_svg_support" name="chd_add_svg_support" value="1" ' . checked( 1, get_option( 'chd_add_svg_support' ), false ) . '/>';

        $html .= '<label for="chd_add_svg_support"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox settings description.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_description() {

        $url  = 'http://fancyapps.com/fancybox/3/';
        $html = sprintf( '<p>%1s <a href="%2s" target="_blank">%3s</a></p>', esc_html__( 'Documentation on the Fancybox website:', 'ch-directs-plugin' ), esc_url( $url ), $url );

        echo $html;

    }

    /**
     * Fancybox script field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_script( $args ) {

        $html = '<p><input type="checkbox" id="chd_enqueue_fancybox_script" name="chd_enqueue_fancybox_script" value="1" ' . checked( 1, get_option( 'chd_enqueue_fancybox_script' ), false ) . '/>';

        $html .= '<label for="chd_enqueue_fancybox_script"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox styles field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_styles( $args ) {

        $html = '<p><input type="checkbox" id="chd_enqueue_fancybox_styles" name="chd_enqueue_fancybox_styles" value="1" ' . checked( 1, get_option( 'chd_enqueue_fancybox_styles' ), false ) . '/>';

        $html .= '<label for="chd_enqueue_fancybox_styles"> '  . $args[0] . '</label></p>';

        echo $html;

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function chd_settings_fields_media() {

	return Settings_Fields_Media::instance();

}

// Run an instance of the class.
chd_settings_fields_media();