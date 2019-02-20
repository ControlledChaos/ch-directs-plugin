<?php
/**
 * Register project types.
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
 * Register project types.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomy_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom project types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom project types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Project Type
         */

        $labels = [
            'name'                       => __( 'Project Types', 'ch-directs-plugin' ),
            'singular_name'              => __( 'Project Type', 'ch-directs-plugin' ),
            'menu_name'                  => __( 'Project Types', 'ch-directs-plugin' ),
            'all_items'                  => __( 'All Project Types', 'ch-directs-plugin' ),
            'edit_item'                  => __( 'Edit Project Type', 'ch-directs-plugin' ),
            'view_item'                  => __( 'View Project Type', 'ch-directs-plugin' ),
            'update_item'                => __( 'Update Project Type', 'ch-directs-plugin' ),
            'add_new_item'               => __( 'Add New Project Type', 'ch-directs-plugin' ),
            'new_item_name'              => __( 'New Project Type', 'ch-directs-plugin' ),
            'parent_item'                => __( 'Parent Project Type', 'ch-directs-plugin' ),
            'parent_item_colon'          => __( 'Parent Project Type', 'ch-directs-plugin' ),
            'popular_items'              => __( 'Popular Project Types', 'ch-directs-plugin' ),
            'separate_items_with_commas' => __( 'Separate Project Types with commas', 'ch-directs-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Project Types', 'ch-directs-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Project Types', 'ch-directs-plugin' ),
            'not_found'                  => __( 'No Project Types Found', 'ch-directs-plugin' ),
            'no_terms'                   => __( 'No Project Types', 'ch-directs-plugin' ),
            'items_list_navigation'      => __( 'Project Types List Navigation', 'ch-directs-plugin' ),
            'items_list'                 => __( 'Project Types List', 'ch-directs-plugin' )
        ];

        $options = [
            'label'              => __( 'Project Types', 'ch-directs-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Project Types',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'project types',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'project types',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'project_types',
            [
                'project'
            ],
            $options
        );

    }

}

// Run the class.
$chd_project = new Taxonomy_Register;