<?php
/**
 * Register post types.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace CH_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register project types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register project types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Projects
         *
         * @since  1.0.0
         */

        $labels = [
            'name'                  => __( 'Projects', 'ch-directs-plugin' ),
            'singular_name'         => __( 'Project', 'ch-directs-plugin' ),
            'menu_name'             => __( 'Projects', 'ch-directs-plugin' ),
            'all_items'             => __( 'All Projects', 'ch-directs-plugin' ),
            'add_new'               => __( 'Add New', 'ch-directs-plugin' ),
            'add_new_item'          => __( 'Add New Project', 'ch-directs-plugin' ),
            'edit_item'             => __( 'Edit Project', 'ch-directs-plugin' ),
            'new_item'              => __( 'New Project', 'ch-directs-plugin' ),
            'view_item'             => __( 'View Project', 'ch-directs-plugin' ),
            'view_items'            => __( 'View Projects', 'ch-directs-plugin' ),
            'search_items'          => __( 'Search Projects', 'ch-directs-plugin' ),
            'not_found'             => __( 'No Projects Found', 'ch-directs-plugin' ),
            'not_found_in_trash'    => __( 'No Projects Found in Trash', 'ch-directs-plugin' ),
            'parent_item_colon'     => __( 'Parent Project', 'ch-directs-plugin' ),
            'featured_image'        => __( 'Featured image for this project', 'ch-directs-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this project', 'ch-directs-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this project', 'ch-directs-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this project', 'ch-directs-plugin' ),
            'archives'              => __( 'Project archives', 'ch-directs-plugin' ),
            'insert_into_item'      => __( 'Insert into Project', 'ch-directs-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Project', 'ch-directs-plugin' ),
            'filter_items_list'     => __( 'Filter Projects', 'ch-directs-plugin' ),
            'items_list_navigation' => __( 'Projects list navigation', 'ch-directs-plugin' ),
            'items_list'            => __( 'Projects List', 'ch-directs-plugin' ),
            'attributes'            => __( 'Project Attributes', 'ch-directs-plugin' ),
            'parent_item_colon'     => __( 'Parent Project', 'ch-directs-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'chd_project_labels', $labels );

        $options = [
            'label'               => __( 'Projects', 'ch-directs-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'ch-directs-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'project_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'projects',
                'with_front' => true
            ],
            'query_var'           => 'project',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-video',
            'supports'            => [
                'title',
                'thumbnail'
            ],
            'taxonomies'          => [
                'project_types'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'chd_project_args', $options );

        /**
         * Register the post type
         *
         * Maximum 20 characters, cannot contain capital letters or spaces.
         */
        register_post_type(
            'project',
            $options
        );

    }

}

// Run the class.
$projects = new Post_Types_Register;