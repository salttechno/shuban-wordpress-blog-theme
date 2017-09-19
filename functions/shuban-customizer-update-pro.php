<?php

/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shuban_update_pro' , array(
	'title' => esc_html__( 'Upgrade to Shuban Pro', 'shuban' ),
	'description' => wp_kses_post(__( '
        <h1>Shuban Pro</h1>
        <p><a class="button" href="https://themes.salttechno.com/wordpress-theme/shuban-pro-premium-blog-theme/" target="_blank">Upgrade to Shuban Pro</a></p>
        <p>Upgrade to pro for more awesome features and quick support. View the <a href="http://shubanpro.themesease.com/" target="_blank">Shuban Pro Demo</a> to see additional features and functionality available in your upgrade.</p>
        <p><b>Shuban Pro Features:</b>
        <ul>
            <li>&raquo; Full Width Slider</li>
            <li>&raquo; Four New Post Formats</li>
            <li>&raquo; Multiple Navigation Bars</li>
            <li>&raquo; Custom widgets</li>
            <li>&raquo; Edit Footer Right Text</li>
            <li>&raquo; Premium Support</li>
            <li>&raquo; Subscribe Form Style</li>
			<li>&raquo; Future Updates</li>
        </ul>
        </p>
        <hr />
        <h1>Current Theme: Shuban</h1>
        <h3>Demo Site</h3>
        <p>Head on over to the <a  href="http://shuban.themesease.com/" target="_blank">Shuban demo</a> to see what you can accomplish with this theme!</p>
        <h3>Documentation</h3>
        <p>Read how to customize the theme, set up widgets, and learn of all the possible options available to you.</p>
        <p><a class="button" href="https://themes.salttechno.com/docs/shuban-wordpress-blog-theme/" target="_blank">Shuban Documentation</a></p>
        <h3>Feedback and Support</h3>
        <p>For feedback and support, please contact us and we would be happy to assist!</p>
        <p><a class="button" href="https://themes.salttechno.com/submit-ticket/" target="_blank">Shuban Support</a></p>
        ', 'shuban' ) ),
	'priority' => 0,
) );



/**
* For Hidden Field for Pro Themes.
*/
$wp_customize->add_setting(
	'shuban_update_button',
	array(
		'default'     => esc_html__( '', 'shuban' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'shuban_update_button',
		array(
			'label'      => esc_html__( '', 'shuban' ),
			'section'    => 'shuban_update_pro',
			'settings'   => 'shuban_update_button',
			'type'		 => 'text',
			'input_attrs' => array(
		    'class' => 'shuban-hidden',
		    'style' => 'display: none',
            ),
		)
	)
);
