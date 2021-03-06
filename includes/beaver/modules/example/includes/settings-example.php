<?php
/**
 * Example module settings
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
} ?>
<div class="fl-builder-settings-section">

    <h3 class="fl-builder-settings-title"><?php _e( 'Include Example', 'ch-directs-plugin' ); ?></h3>

    <p><?php _e( 'This tab was created using a file instead of a sections array!', 'ch-directs-plugin' ); ?></p>

    <table class="fl-form-table">
        <tr>
            <th><?php _e( 'Text', 'ch-directs-plugin' ); ?></th>
            <td>
                <input type="text" name="included_text" value="<?php if ( isset( $settings->included_text ) ) { echo $settings->included_text; } ?>" class="text text-full">
            </td>
        </tr>
    </table>

</div>