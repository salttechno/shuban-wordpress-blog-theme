<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'shuban_create_options' );

/**
 * Initialize Titan & options here
 */
function shuban_create_options() {

	$titan = TitanFramework::getInstance( 'shuban' );


	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */

	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Theme Options', 'shuban' ),
	) );

	$section->createOption( array(
	    'name' => __( 'Background Color', 'shuban' ),
	    'id' => 'sample_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'shuban' ),
	    'default' => '#f0f0f0',
		'css' => 'body { background-color: value }',
	) );

	$section->createOption( array(
	    'name' => __( 'Headings Font', 'shuban' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings in the site', 'shuban' ),
		'show_color' => true,
		'show_font_size' => true,
	    'show_font_weight' => true,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Fauna One',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6 { value }',
	) );

	$section->createOption( array(
	    'name' => __( 'Body Font', 'shuban' ),
	    'id' => 'body_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for body in the site', 'shuban' ),
		'show_color' => true,
		'show_font_size' => true,
	    'show_font_weight' => true,
	    'show_font_style' => true,
	    'show_line_height' => true,
	    'show_letter_spacing' => true,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Poppins',
	    ),
		'css' => 'body { value }',
	) );



}
