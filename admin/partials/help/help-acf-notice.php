<?php
/**
 * Content for the Inline Scripts help tab.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Directs_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div>
	<h3><?php _e( 'Advanced Custom Fields Notice', 'ch-directs-plugin' ); ?></h3>
	<?php echo sprintf(
		'<p>%1s Advanced Custom Fields (ACF) %2s <a href="%3s" target="_blank">%4s</a> %5s <a href="%6s" target="_blank">%7s</a> %8s <a href="%9s" target="_blank">%10s</a></p>',
		esc_html__( 'The tabs and the settings on this page are reproduced by different code within this plugin when the', 'ch-directs-plugin' ),
		esc_html__( 'plugin is installed and activated. Specifically it needs to be the', 'ch-directs-plugin' ),
		esc_url( 'https://www.advancedcustomfields.com/pro' ),
		esc_html__( 'Pro edition', 'ch-directs-plugin' ),
		esc_html__( 'of the plugin or the', 'ch-directs-plugin' ),
		esc_url( 'https://wordpress.org/plugins/advanced-custom-fields/' ),
		esc_html__( 'free version', 'ch-directs-plugin' ),
		esc_html__( 'plus the', 'ch-directs-plugin' ),
		esc_url( 'https://www.advancedcustomfields.com/add-ons/options-page/' ),
		esc_html__( 'Options Page addon.', 'ch-directs-plugin' )
	); ?>
	<p><?php _e( 'One of the advantages of using ACF with the settings page is that the settings can be more easily added, editted, and rearranged than recoding this plugin using the WordPress Settings API. It is far easier to implement complicated settings fields, and has a nicer user interface than the native WordPress settings fields.', 'ch-directs-plugin' ); ?></p>
	<p><?php _e( 'This plugin comes equipped with an ACF fields import tool that will import the ACF fields registered by this plugin so that they can be modified.', 'ch-directs-plugin' ); ?></p>
</div>