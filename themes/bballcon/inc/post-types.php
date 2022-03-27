<?php
/**
 * Custom post types for this theme
 *
 * @package Bball_Connection
 */


function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Tips', 'Post type general name', 'bballcon' ),
        'singular_name'         => _x( 'Tip', 'Post type singular name', 'bballcon' ),
        'menu_name'             => _x( 'Tips', 'Admin Menu text', 'bballcon' ),
        'name_admin_bar'        => _x( 'Tip', 'Add New on Toolbar', 'bballcon' ),
        'add_new'               => __( 'Add New', 'bballcon' ),
        'add_new_item'          => __( 'Add New tip', 'bballcon' ),
        'new_item'              => __( 'New tip', 'bballcon' ),
        'edit_item'             => __( 'Edit tip', 'bballcon' ),
        'view_item'             => __( 'View tip', 'bballcon' ),
        'all_items'             => __( 'All tips', 'bballcon' ),
        'search_items'          => __( 'Search tips', 'bballcon' ),
        'parent_item_colon'     => __( 'Parent tips:', 'bballcon' ),
        'not_found'             => __( 'No tips found.', 'bballcon' ),
        'not_found_in_trash'    => __( 'No tips found in Trash.', 'bballcon' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bballcon' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bballcon' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bballcon' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bballcon' ),
        'insert_into_item'      => _x( 'Insert into tip', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bballcon' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this tip', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bballcon' ),
        'filter_items_list'     => _x( 'Filter tips list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bballcon' ),
        'items_list_navigation' => _x( 'Tips list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bballcon' ),
        'items_list'            => _x( 'Tips list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bballcon' ),
        );     
        $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tips' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'bballcon_tips', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );