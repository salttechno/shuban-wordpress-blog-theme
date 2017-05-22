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
		'name' => 'Logo',
		'id' => 'shuban-main-logo',
		'type' => 'upload',
		'desc' => 'Upload your Logo Image'

	) );

    $section->createOption( array(
		'name' => 'Logo Width',
		'id' => 'shuban-logo-width',
		'type' => 'text',
		'placeholder' => '120',
		'desc' => 'Gives width to the logo image selected above. (in px)'

	) );

	$section->createOption( array(
		'name' => 'Site Footer',
		'id' => 'shuban-site-footer',
		'type' => 'textarea',
        'desc' => 'Enter Site Footer'

	) );

}
