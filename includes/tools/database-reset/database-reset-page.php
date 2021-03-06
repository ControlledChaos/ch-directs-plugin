<?php
/**
 * Reset admin page.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Includes\Tools\Database_Reset
 *
 * @since      1.0.0
 * @author     Chris Berthe <chris.berthe@shopify.com>
 * @author     Greg Sweet <greg@ccdzine.com>
 */

// namespace CH_Directs_Plugin\Includes\Tools\Database_Reset;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<div class="wrap">
	<h2><?php _e( 'Database Reset', 'ch-directs-plugin' ) ?></h2>
	<p class="description"><?php _e( 'Reset the WordPress database back to its original state.', 'ch-directs-plugin' ); ?></p>
	<hr />

	<?php include( 'partials/notice.php' ) ?>

	<form method="post" id="db-reset-form">
		<p>1. <?php _e( 'Select the database tables you would like to reset', 'ch-directs-plugin' ) ?>:</p>

		<div id="select-container">
			<a href='#' id="select-all"><?php _e( 'Select All', 'ch-directs-plugin' ) ?></a>
			<select id="wp-tables" multiple="multiple" name="db-reset-tables[]">
				<?php foreach ( $this->wp_tables as $key => $value ) : ?>
				<option value="<?php echo $key ?>"><?php echo $key ?></option>
				<?php endforeach ?>
			</select>
		</div>

		<p id="reactivate" style="display: none">
			<label for="db-reset-reactivate-theme-data">
			<input type="checkbox" name="db-reset-reactivate-theme-data" id="db-reset-reactivate-theme-data" checked="checked" value="true" />
			<?php _e( 'Reactivate current theme and plugins after reset?', 'ch-directs-plugin' ) ?>
			</label>
		</p>

		<p id="disclaimer" style="display: none">
			<em><?php printf( __( 'You selected the users table. Only the <strong><u>%s</u></strong> user will be restored', 'ch-directs-plugin' ), $this->user->user_login ) ?>.</em>
		</p>
		<p>
		2. <?php _e( 'Enter the security code into the text box', 'ch-directs-plugin' ) ?>:
		<span id="security-code"><?php echo $this->code ?></span>
		</p>

		<input type="hidden" name="db-reset-code" value="<?php echo $this->code ?>" />
		<input type="text" name="db-reset-code-confirm" id="db-reset-code-confirm" value="" placeholder="*****" />
		<p>
			<input type="submit" name="db-reset-submit" value="<?php _e( 'Reset Tables', 'ch-directs-plugin' ) ?>" id="db-reset-submit" class="button-primary" disabled />
			<img src="<?php echo plugins_url( 'assets/images/spinner.gif', dirname( __DIR__ ) ) ?>" alt="loader" id="loader" style="display: none" />
		</p>
	</form>
</div>