<?php
/**
 * Positiva Theme Customizer
 *
 * @package Positiva
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function positiva_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'positiva_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'positiva_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'positiva_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function positiva_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function positiva_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function positiva_customize_preview_js() {
	wp_enqueue_script( 'positiva-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'positiva_customize_preview_js' );

// In Customizer.php
function oleez_customize_register($wp_customize) {

    // Create a section id
    $top_logos_id = 'top_three_logos';
    
    // Add a section 
    $wp_customize->add_section(
	$top_logos_id,
	[
	    'title' => esc_html__( text:'Logos Section', domain: 'positiva'),
	    'description' => esc_html__( text:'Upload Logos', domain:'positiva'),
	]
    );

    // Add setting and controls
    $logo_names = [
	// 'Label' => 'Id for that label'
	'Logo One (Positiva)' => 'Logo_one',
	'Logo Two (MINHAC..)' => 'Logo_two',
	'Logo Three (TODOS..)' => 'Logo_three',
	
    ];

    foreach ( $logo_names as $logo_label => $logo_name ) {
	$setting_id = sprintf( 'top_%s', $logo_name); // makes top_Logo_one, top_logo_two ......
	// Setting of logos are added reference No 1 for html by myself
	$wp_customize->add_setting( $setting_id);

	$wp_customize->add_control(
	    new \WP_Customize_Image_Control(
	    $wp_customize,
	    $setting_id,
	    [
		'label' => esc_html__($logo_label, domain: 'positiva'),
		'section' => $top_logos_id,
		'settings' => $setting_id,
		]

		)
	);

    }
}

add_action('customize_register', 'oleez_customize_register');