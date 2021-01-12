<?php

/* Hero Slider Customizer options */

// Add Hero Slider Section
$wp_customize->add_section( 'hero-slider', array(
	'title' => __( 'Hero Slider', 'bootstrap-for-genesis' ),
	'priority' => 10
));
// Hero Slider Image #1
$wp_customize -> add_setting ( 'wst_slider1', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_slider1',
		array (
			'label'             => __('Slider Image, One'),
			'section'           => 'hero-slider',
			'settings'          => 'wst_slider1',
//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #1 Title
$wp_customize->add_setting( 'slider1title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'slider1title', array(
	'label'	=>	__('Slider 1 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'slider1title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'sldr1text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'sldr1text', array(
	'label'	=>	__('Slider 1 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'sldr1text',
	'type'	=> 'textarea'
));

// Hero Slider Image #2
$wp_customize -> add_setting ( 'wst_slider2', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_slider2',
		array (
			'label'             => __('Slider Image, Two'),
			'section'           => 'hero-slider',
			'settings'          => 'wst_slider2',
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #2 Title
$wp_customize->add_setting( 'slider2title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'slider2title', array(
	'label'	=>	__('Slider 2 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'slider2title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'sldr2text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'sldr2text', array(
	'label'	=>	__('Slider 2 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'sldr2text',
	'type'	=> 'textarea'
));
// Hero Slider Image #3
$wp_customize -> add_setting ( 'wst_slider3', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_slider3',
		array (
			'label'             => __('Slider Image, Three'),
			'section'           => 'hero-slider',
			'settings'          => 'wst_slider3',
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #3 Title
$wp_customize->add_setting( 'slider3title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'slider3title', array(
	'label'	=>	__('Slider 3 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'slider3title',
	'type'	=> 'text'
));
// Slider #3 Text Area
$wp_customize->add_setting( 'sldr3text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'wp_kses_post'
));
$wp_customize->add_control( 'sldr3text', array(
	'label'	=>	__('Slider 3 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'hero-slider',
	'settings'	=>	'sldr3text',
	'type'	=> 'textarea'
));

/// ====== End Slider ====== ///
