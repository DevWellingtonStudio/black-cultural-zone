<?php
/* Sub Nav Customizer */
// Add Front Page Section
$wp_customize->add_section( 'subNav', array(
	'title' => __( 'Sub Navigation', 'bootstrap-for-genesis' ),
	'priority' => 10
));
// Sub-Nav Font Color
$wp_customize->add_setting ( 'subnav_fcolor', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Sub-Nav Font Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'subnav_fgcolor', array(
			'label'			=> __('Sub Nav Font Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'subNav',
			'settings'	=> 'subnav_fcolor'
		)
	)
);
// Sub-Nav Font Hover Color
$wp_customize->add_setting ( 'subnav_hover', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Sub-Nav Background Font Picker
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'subnav_hover', array(
			'label'			=> __('Sub Nav Font Hover Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'subNav',
			'settings'	=> 'subnav_hover'
		)
	)
);













// Sub-Nav Background Color Picker
$wp_customize->add_setting ( 'subnav_bgcolor', array(
	'default'						=> '#ccc',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Sub-Nav Background Color Picker
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'subnav_bgcolor', array(
			'label'			=> __('Sub-Nav Background Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'subNav',
			'settings'	=> 'subnav_bgcolor'
		)
	)
);
