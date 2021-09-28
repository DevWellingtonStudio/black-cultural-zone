<?php

/* Background images/svg's for front page */

// Add Front Page Background Images/SVG's Section
$wp_customize->add_section( 'fp-background-svg', array(
	'title' => __( 'Front Page Background SVG/Img', 'bootstrap-for-genesis' ),
	'priority' => 10
));

// Front Page Background #1
$wp_customize -> add_setting ( 'bg_img_one', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'bg_img_one',
		array (
			'label'             => __('Background Image/SVG, One'),
			'section'           => 'fp-background-svg',
			'settings'          => 'bg_img_one',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Front Page Background Image/SVG #2
$wp_customize -> add_setting ( 'bg_img_two', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'bg_img_two',
		array (
			'label'             => __('Background Image/SVG, Two'),
			'section'           => 'fp-background-svg',
			'settings'          => 'bg_img_two',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

// Front Page Background Image/SVG #3
$wp_customize -> add_setting ( 'bg_img_three', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'bg_img_three',
		array (
			'label'             => __('Background Image/SVG, Three'),
			'section'           => 'fp-background-svg',
			'settings'          => 'bg_img_three',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

/// ====== End Images ====== ///


