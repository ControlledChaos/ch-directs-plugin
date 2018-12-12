<?php
/**
 * About page media options output.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CH_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h2><?php _e( 'Media and Upload Options', 'ch-directs-plugin' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'ch-directs-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'ch-directs-plugin' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'ch-directs-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'ch-directs-plugin' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'ch-directs-plugin' ); ?></h3>