<?php
/**
 * Functions which enhance the theme by utilizing the block editor with WooCommerce.
 *
 * @package Bball_Connection
 */function bballcon_enqueue_woocommerce_assets() {
    wp_enqueue_script(
        'woocommerce-editor-script',
        get_template_directory_uri() . '/assets/js/woocommerce-editor.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory() . '/assets/js/woocommerce-editor.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'bballcon_enqueue_woocommerce_assets' );

function bballcon_enqueue_woocommerce_style_assets() {
    wp_enqueue_style( 
        'woocommerce-editor-style', 
        get_template_directory_uri() . '/assets/css/woocommerce-editor.css',
    );
}
add_action( 'enqueue_block_assets', 'bballcon_enqueue_woocommerce_style_assets' );




function bballcon_use_block_editor_for_post_type( $use_block_editor, $post_type ) {
    if ( 'product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'bballcon_use_block_editor_for_post_type', 10, 2 );


/**
 * Remove description heading
 */
add_filter( 'woocommerce_product_description_heading', '__return_false' );
