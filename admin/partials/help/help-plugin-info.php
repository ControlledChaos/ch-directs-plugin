<?php
/**
 * Content for the plugin More Information help tab.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Directs_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php echo sprintf(
	'%1s %2s %3s',
	__( 'More information about the', 'ch-directs-plugin' ),
	get_bloginfo( 'name' ),
	__( 'plugin', 'ch-directs-plugin' )
); ?></h3>
<h4><?php _e( 'The plugin source', 'ch-directs-plugin' ); ?></h4>
<p><?php _e( 'Following is the the link to this plugin as it comes out of the box. Change this information to complement your site-specific version.', 'ch-directs-plugin' ); ?></p>
<p><a href="https://github.com/ControlledChaos/ch-directs-plugin" target="_blank">https://github.com/ControlledChaos/ch-directs-plugin</a></p>
<h4><?php _e( 'Ask for development help', 'ch-directs-plugin' ); ?></h4>
<?php echo sprintf(
	'<p>%1s <a href="mailto:greg@ccdzine.com">greg@ccdzine.com</a></p>',
	__( 'If you would like help developing this plugin for your project, contact the plugin author, Greg Sweet, at' )
 ); ?>