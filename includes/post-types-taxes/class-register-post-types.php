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

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "chp_post_type" and replace with your post type database name.
         * Search case "custom-posts" and replace with your post type archive permalink slug.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'ch-directs-plugin' ),
            'singular_name'         => __( 'Custom Post', 'ch-directs-plugin' ),
            'menu_name'             => __( 'Custom Posts', 'ch-directs-plugin' ),
            'all_items'             => __( 'All Custom Posts', 'ch-directs-plugin' ),
            'add_new'               => __( 'Add New', 'ch-directs-plugin' ),
            'add_new_item'          => __( 'Add New Custom Post', 'ch-directs-plugin' ),
            'edit_item'             => __( 'Edit Custom Post', 'ch-directs-plugin' ),
            'new_item'              => __( 'New Custom Post', 'ch-directs-plugin' ),
            'view_item'             => __( 'View Custom Post', 'ch-directs-plugin' ),
            'view_items'            => __( 'View Custom Posts', 'ch-directs-plugin' ),
            'search_items'          => __( 'Search Custom Posts', 'ch-directs-plugin' ),
            'not_found'             => __( 'No Custom Posts Found', 'ch-directs-plugin' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'ch-directs-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'ch-directs-plugin' ),
            'featured_image'        => __( 'Featured image for this custom post', 'ch-directs-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'ch-directs-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'ch-directs-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'ch-directs-plugin' ),
            'archives'              => __( 'Custom Post archives', 'ch-directs-plugin' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'ch-directs-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'ch-directs-plugin' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'ch-directs-plugin' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'ch-directs-plugin' ),
            'items_list'            => __( 'Custom Posts List', 'ch-directs-plugin' ),
            'attributes'            => __( 'Custom Post Attributes', 'ch-directs-plugin' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'ch-directs-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'chp_custom_posts_labels', $labels );

        $options = [
            'label'               => __( 'Custom Posts', 'ch-directs-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'ch-directs-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'chp_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'chp_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'chp_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'chp_custom_posts_args', $options );

        /**
         * Register the post type
         *
         * Maximum 20 characters, cannot contain capital letters or spaces.
         */
        register_post_type(
            'chp_post_type',
            $options
        );

    }

}

// Run the class.
$chp_post_types = new Post_Types_Register;