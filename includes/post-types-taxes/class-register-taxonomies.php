<?php
/**
 * Register taxonomies.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace CH_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "chp_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'ch-directs-plugin' ),
            'singular_name'              => __( 'Taxonomy', 'ch-directs-plugin' ),
            'menu_name'                  => __( 'Taxonomy', 'ch-directs-plugin' ),
            'all_items'                  => __( 'All Taxonomies', 'ch-directs-plugin' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'ch-directs-plugin' ),
            'view_item'                  => __( 'View Taxonomy', 'ch-directs-plugin' ),
            'update_item'                => __( 'Update Taxonomy', 'ch-directs-plugin' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'ch-directs-plugin' ),
            'new_item_name'              => __( 'New Taxonomy', 'ch-directs-plugin' ),
            'parent_item'                => __( 'Parent Taxonomy', 'ch-directs-plugin' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'ch-directs-plugin' ),
            'popular_items'              => __( 'Popular Taxonomies', 'ch-directs-plugin' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'ch-directs-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'ch-directs-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'ch-directs-plugin' ),
            'not_found'                  => __( 'No Taxonomies Found', 'ch-directs-plugin' ),
            'no_terms'                   => __( 'No Taxonomies', 'ch-directs-plugin' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'ch-directs-plugin' ),
            'items_list'                 => __( 'Taxonomies List', 'ch-directs-plugin' )
        ];

        $options = [
            'label'              => __( 'Taxonomies', 'ch-directs-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'chp_taxonomy',
            [
                'chp_post_type'
            ],
            $options
        );

    }

}

// Run the class.
$chp_taxonomies = new Taxonomies_Register;