<?php
/**
 * Bball Connection Theme Customizer
 *
 * @package Bball_Connection
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bballcon_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bballcon_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bballcon_customize_partial_blogdescription',
			)
		);
	}

	//*! Adding custom settings for the customizer
	//* Adding a section for social media

	$wp_customize->add_section( 'bballcon_social_media', array(
		'title' => esc_html('Social Media', 'bballcon')
	) );

	//* Creating a setting for Facebook
	$wp_customize->add_setting( 'bballcon_facebook_url', array() );

	//* Creating the control for Facebook
	$wp_customize->add_control( 'bballcon_facebook_url', array(
		'label'   	  => 'Facebook',
		'description' => 'URL for Facebook including the https://',
		'type'        => 'url',
		'section' 	  => 'bballcon_social_media'
	) );

	//* Creating a setting for Instagram
	$wp_customize->add_setting( 'bballcon_instagram_url', array() );

	//* Creating the control
	$wp_customize->add_control( 'bballcon_instagram_url', array(
		'label'   	  => 'Instagram',
		'description' => 'URL for Instagram including the https://',
		'type'        => 'url',
		'section' 	  => 'bballcon_social_media'
	) );

	//* Creating a setting for Twitter
	$wp_customize->add_setting( 'bballcon_twitter_url', array() );

	//* Creating the control
	$wp_customize->add_control( 'bballcon_twitter_url', array(
		'label'   	  => 'Twitter',
		'description' => 'URL for Twitter including the https://',
		'type'        => 'url',
		'section' 	  => 'bballcon_social_media'
	) );
	
}
add_action( 'customize_register', 'bballcon_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bballcon_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bballcon_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bballcon_customize_preview_js() {
	wp_enqueue_script( 'bballcon-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), bballcon_VERSION, true );
}
add_action( 'customize_preview_init', 'bballcon_customize_preview_js' );
