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

	//** Adding custom settings for the customizer */
	//* Adding a panel for social media */

	$wp_customize->add_panel( 'bballcon_social_media', array(
		'title' => esc_html__( 'Social Media', 'bballcon' )
	) );

	//* Creating a section for Facebook */
	$wp_customize->add_section( 'bballcon_facebook_media', array(
		'title' => esc_html__( 'Facebook', 'bballcon' ),
		'panel' => 'bballcon_social_media'
	) );
	
	//* Adding a setting */
	$wp_customize->add_setting( 'bballcon_facebook_title' );

	//* Setting up the control */
	$wp_customize->add_control( 'bballcon_facebook_title', array(
		'label'		=> 'Title',
		'section'	=> 'bballcon_facebook_media'
	) );
	/* Adding a setting */
	$wp_customize->add_setting( 'bballcon_facebook_url' );

	/* Setting up the control */
	$wp_customize->add_control( 'bballcon_facebook_url', array(
		'label'		=> 'URL',
		'type'		=> 'url',
		'section'	=> 'bballcon_facebook_media'
	) );

	/* Creating a section for Instagram */
	$wp_customize->add_section( 'bballcon_instagram_media', array(
		'title' => esc_html__( 'Instagram', 'bballcon' ),
		'panel' => 'bballcon_social_media'
	) );
	/* Creating a setting */
	$wp_customize->add_setting( 'bballcon_instagram_title' );

	/* Creating up the control */
	$wp_customize->add_control( 'bballcon_instagram_title', array(
		'label'   	  => 'Title',
		'section' 	  => 'bballcon_instagram_media'
	) );
	/* Creating a setting */
	$wp_customize->add_setting( 'bballcon_instagram_url' );

	/* Creating up the control */
	$wp_customize->add_control( 'bballcon_instagram_url', array(
		'label'   	  => 'URL',
		'type'        => 'url',
		'section' 	  => 'bballcon_instagram_media'
	) );

	/* Creating a section for Twitter */
	$wp_customize->add_section( 'bballcon_twitter_media', array(
		'title' => esc_html__( 'Twitter', 'bballcon' ),
		'panel' => 'bballcon_social_media'
	) );

	/* Creating a setting */
	$wp_customize->add_setting( 'bballcon_twitter_title' );

	/* Creating the control */
	$wp_customize->add_control( 'bballcon_twitter_title', array(
		'label'   	  => 'Title',
		'section' 	  => 'bballcon_twitter_media'
	) );

	/* Creating a setting for Twitter */
	$wp_customize->add_setting( 'bballcon_twitter_url' );

	/* Creating the control */
	$wp_customize->add_control( 'bballcon_twitter_url', array(
		'label'   	  => 'URL',
		'type'        => 'url',
		'section' 	  => 'bballcon_twitter_media'
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
