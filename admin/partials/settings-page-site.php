<?php
/**
 * Site settings page output.
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
}

/**
 * Active tab switcher.
 *
 * @since  1.0.0
 * @return void
 */
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = $_GET[ 'tab' ];
} else {
    $active_tab = 'dashboard';
}

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

    // Dashboard tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=dashboard" class="nav-tab %2s"><span class="dashicons dashicons-dashboard"></span> %3s</a>',
        CHD_ADMIN_SLUG,
        $active_tab == 'dashboard' ? 'nav-tab-active' : '',
        esc_html__( 'Dashboard', 'ch-directs-plugin' )
    ),

    // Admin menu tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=admin-menu" class="nav-tab %2s"><span class="dashicons dashicons-menu"></span> %3s</a>',
        CHD_ADMIN_SLUG,
        $active_tab == 'admin-menu' ? 'nav-tab-active' : '',
        esc_html__( 'Admin Menu', 'ch-directs-plugin' )
    ),

    // Admin pages tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=admin-pages" class="nav-tab %2s"><span class="dashicons dashicons-admin-page"></span> %3s</a>',
        CHD_ADMIN_SLUG,
        $active_tab == 'admin-pages' ? 'nav-tab-active' : '',
        esc_html__( 'Admin Pages', 'ch-directs-plugin' )
    ),

    // Users tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=users" class="nav-tab %2s"><span class="dashicons dashicons-admin-users"></span> %3s</a>',
        CHD_ADMIN_SLUG,
        $active_tab == 'users' ? 'nav-tab-active' : '',
        esc_html__( 'Site Users', 'ch-directs-plugin' )
    ),

    // Meta/SEO tab.
    sprintf(
        '<a href="?page=%1s-settings&tab=meta-seo" class="nav-tab %2s"><span class="dashicons dashicons-tag"></span> %3s</a>',
        CHD_ADMIN_SLUG,
        $active_tab == 'meta-seo' ? 'nav-tab-active' : '',
        esc_html__( 'Meta/SEO', 'ch-directs-plugin' )
    )

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'chd_tabs_site_settings', $tabs );

/**
 * Do settings section and fields by tab.
 *
 * @since  1.0.0
 * @return void
 */
if ( 'dashboard' == $active_tab  ) {
    $section = 'chd-site-dashboard';
    $fields  = 'chd-site-dashboard';
} elseif ( 'admin-menu' == $active_tab ) {
    $section = 'chd-site-admin-menu';
    $fields  = 'chd-site-admin-menu';
} elseif ( 'admin-pages' == $active_tab ) {
    $section = 'chd-site-admin-pages';
    $fields  = 'chd-site-admin-pages';
} elseif ( 'users' == $active_tab ) {
    $section = 'chd-site-users';
    $fields  = 'chd-site-users';
} elseif ( 'meta-seo' == $active_tab ) {
    $section = 'chd-site-meta-seo';
    $fields  = 'chd-site-meta-seo';
} else {
    $section = null;
    $fields  = null;
}

// Apply filters to the sections and fields for new tabs.
$do_section = apply_filters( 'chd_section_site_settings', $section );
$do_fields  = apply_filters( 'chd_fields_site_settings', $fields );

/**
 * Conditional save button text by tab.
 *
 * @since  1.0.0
 * @return string Returns the button label.
 */
if ( 'dashboard' == $active_tab  ) {
    $save = __( 'Save Dashboard', 'ch-directs-plugin' );
} elseif ( 'admin-menu' == $active_tab ) {
    $save = __( 'Save Menu', 'ch-directs-plugin' );
} elseif ( 'admin-pages' == $active_tab ) {
    $save = __( 'Save Pages', 'ch-directs-plugin' );
} elseif ( 'users' == $active_tab ) {
    $save = __( 'Save Users', 'ch-directs-plugin' );
} elseif ( 'meta-seo' == $active_tab ) {
    $save = __( 'Save Meta', 'ch-directs-plugin' );
} else {
    $save = __( 'Save Settings', 'ch-directs-plugin' );
}

// Apply a filter for new tabs added by another plugin or from a theme.
$button = apply_filters( 'chd_save_site_settings', $save );

?>
<div class="wrap">
	<?php echo sprintf(
        '<h1 class="wp-heading-inline">%1s %2s</h1>',
        get_bloginfo( 'name' ),
        esc_html__( 'Settings', 'ch-directs-plugin' )
    ); ?>
    <p class="description"><?php esc_html_e( 'Customize the way WordPress is used.', 'ch-directs-plugin' ); ?></p>
    <hr class="wp-header-end">
    <h2 class="nav-tab-wrapper">
		<?php echo implode( $page_tabs ); ?>
    </h2>
	<form method="post" action="options.php">
        <?php
        settings_fields( $do_fields );
        do_settings_sections( $do_section );
        ?>
        <p class="submit"><?php submit_button( $button, 'primary', '', false, [] ); ?></p>
    </form>
</div>