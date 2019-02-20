<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Directs_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'ch-directs-plugin' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'ch-directs-plugin' ),
	esc_url( admin_url( '?page=' . CHP_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'ch-directs-plugin' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'ch-directs-plugin' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'ch-directs-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'ch-directs-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'ch-directs-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'ch-directs-plugin' ); ?></li>
</ul>