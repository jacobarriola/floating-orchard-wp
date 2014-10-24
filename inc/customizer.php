<?php
/**
 * Floating Orchard Theme Customizer
 *
 * @package Floating Orchard
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function floatingorchard_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//Home Page
	$wp_customize->add_setting( 'homepage_setting' , array(

	) );

	$wp_customize->add_section( 'homepage_section' , array(
	    'title'      => __( 'Home Page', 'floatingorchard' ),
	    'priority'   => 120,
	) );

	$wp_customize->add_control( 'homepage_control', array(
		'label'    => __( 'Core Commitments', 'floatingorchard' ),
		'section'  => 'homepage_section',
		'settings' => 'homepage_setting'
	) );	


	//Footer
	$wp_customize->add_setting( 'footersetting' , array(

	) );

	$wp_customize->add_section( 'footersection' , array(
	    'title'      => __( 'Footer Section', 'floatingorchard' ),
	    'priority'   => 130,
	) );

	$wp_customize->add_control( 'footercontrol', array(
		'label'    => __( 'Footer Label', 'floatingorchard' ),
		'section'  => 'footersection',
		'settings' => 'footersetting'
	) );


}
add_action( 'customize_register', 'floatingorchard_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function floatingorchard_customize_preview_js() {
	wp_enqueue_script( 'floatingorchard_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'floatingorchard_customize_preview_js' );
