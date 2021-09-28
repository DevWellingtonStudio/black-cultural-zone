<?php

/* Front Page Mid Slider Customizer options */

// Add Front Page Mid Slider Section
$wp_customize->add_section( 'fp-mid-slider', array(
	'title' => __( 'Front Page Mid Slider', 'bootstrap-for-genesis' ),
	'priority' => 10
));

// Front Page Mid Slider Image #1
$wp_customize -> add_setting ( 'wst_mid_slider1', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_mid_slider1',
		array (
			'label'             => __('Slider Image, One'),
			'section'           => 'fp-mid-slider',
			'settings'          => 'wst_mid_slider1',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #1 Title
$wp_customize->add_setting( 'midslider1title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midslider1title', array(
	'label'	=>	__('Slider 1 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midslider1title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'midsldr1text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midsldr1text', array(
	'label'	=>	__('Slider 1 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midsldr1text',
	'type'	=> 'textarea'
));

// Front Page Mid Slider Image #2
$wp_customize -> add_setting ( 'wst_mid_slider2', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_mid_slider2',
		array (
			'label'             => __('Slider Image, Two'),
			'section'           => 'fp-mid-slider',
			'settings'          => 'wst_mid_slider2',
//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #2 Title
$wp_customize->add_setting( 'midslider2title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midslider2title', array(
	'label'	=>	__('Slider 2 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midslider2title',
	'type'	=> 'text'
));
// Slider #1 Text Area
$wp_customize->add_setting( 'midsldr2text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midsldr2text', array(
	'label'	=>	__('Slider 2 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midsldr2text',
	'type'	=> 'textarea'
));
// Front Page Mid Slider Image #3
$wp_customize -> add_setting ( 'wst_mid_slider3', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'wst_mid_slider3',
		array (
			'label'             => __('Slider Image, Three'),
			'section'           => 'fp-mid-slider',
			'settings'          => 'wst_mid_slider3',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Slider #3 Title
$wp_customize->add_setting( 'midslider3title', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midslider3title', array(
	'label'	=>	__('Slider 3 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midslider3title',
	'type'	=> 'text'
));
// Slider #3 Text Area
$wp_customize->add_setting( 'midsldr3text', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'midsldr3text', array(
	'label'	=>	__('Slider 3 Text Area', 'bootstrap-for-genesis' ),
	'section'	=>	'fp-mid-slider',
	'settings'	=>	'midsldr3text',
	'type'	=> 'textarea'
));

/// ====== End Slider ====== ///

