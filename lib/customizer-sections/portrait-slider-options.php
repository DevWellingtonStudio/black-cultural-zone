<?php
// Add Front Page Section
$wp_customize->add_section( 'portrait-slider', array(
	'title' => __( 'Portrait Slider', 'bootstrap-for-genesis' ),
	'priority' => 10
));

// Portrait Slider #1 Background Color
$wp_customize->add_setting ( 'slider1_bg', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #1 Background Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider1_bg', array(
			'label'			=> __('Slider #1 Background Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider1_bg'
		)
	)
);
// Portrait Slider #1 Title Color
$wp_customize->add_setting ( 'slider1_title_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #1 Title Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider1_title_color', array(
			'label'			=> __('Slider #1 Title Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider1_title_color'
		)
	)
);
// Portrait Slider #1 Text Color
$wp_customize->add_setting ( 'slider1_text_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #1 Text Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider1_text_color', array(
			'label'			=> __('Slider #1 Text Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider1_text_color'
		)
	)
);
// Portrait Slider #1 Button Text Color
$wp_customize->add_setting ( 'slider1_btn_text_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #1 Button Text Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider1_btn_text_color', array(
			'label'			=> __('Slider #1 Button Text Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider1_btn_text_color'
		)
	)
);
// Portrait Slider #1 Button Color
$wp_customize->add_setting ( 'slider1_btn_color', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #1 Button Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider1_btn_color', array(
			'label'			=> __('Slider #1 Button Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider1_btn_color'
		)
	)
);
// Portrait Slider #1 Title
$wp_customize->add_setting( 'p-slider-title1', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'p-slider-title1', array(
	'label'	=>	__('Portrait Slider #1 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'portrait-slider',
	'settings'	=>	'p-slider-title1',
	'type'	=> 'text'
));
// Portrait Slider #1 Text Area
$wp_customize->add_setting( 'p-slider-text1', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'p-slider-text1', array(
	'label'	=>	__('Portrait Slider #1 Text Area ', 'bootstrap-for-genesis' ),
	'section'	=>	'portrait-slider',
	'settings'	=>	'p-slider-text1',
	'type'	=> 'textarea'
));
// Portrait #1 Button Link
$wp_customize->add_setting ( 'port1_btn_url', array(
	'default'	=> '',
	'type'		=> 'theme_mod',
	'sanitize_callback' => 'esc_url',
));
$wp_customize->add_control ( 'port1_btn_url' , array(
	'type'	=>	'url',
	'section'	=>	'portrait-slider',
	'label'	=>	__( 'Portrait #1 Button Link', 'bootstrap-for-genesis' ),
	'settings'	=> 'port1_btn_url',
	'description'	=>	__('Add Button Link'),
));
// Portrait Slider #1 Image
$wp_customize -> add_setting ( 'port_slider1', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'port_slider1',
		array (
			'label'             => __('Portrait #1 Slider Image'),
			'section'           => 'portrait-slider',
			'settings'          => 'port_slider1',
		 //'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Portrait Slider #2 Background Color
$wp_customize->add_setting ( 'slider2_bg', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #2 Background Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider2_bg', array(
			'label'			=> __('Slider #2 Background Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider2_bg'
		)
	)
);

// Portrait Slider #2 Title Color
$wp_customize->add_setting ( 'slider2_title_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #2 Title Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider2_title_color', array(
			'label'			=> __('Slider #2 Title Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider2_title_color'
		)
	)
);
// Portrait Slider #2 Text Color
$wp_customize->add_setting ( 'slider2_text_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #2 Text Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider2_text_color', array(
			'label'			=> __('Slider #2 Text Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider2_text_color'
		)
	)
);
// Portrait Slider #2 Button Text Color
$wp_customize->add_setting ( 'slider2_btn_text_color', array(
	'default'						=> '#fff',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #2 Button Text Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider2_btn_text_color', array(
			'label'			=> __('Slider #2 Button Text Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider2_btn_text_color'
		)
	)
);
// Portrait Slider #2 Button Color
$wp_customize->add_setting ( 'slider2_btn_color', array(
	'default'						=> '#000',
	'type'								=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',

));
// Portrait Slider #2 Button Color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider2_btn_color', array(
			'label'			=> __('Slider #2 Button Color', 'bootstrap-for-genesis' ),
			'priority'		=>  10,
			'section'		=> 'portrait-slider',
			'settings'	=> 'slider2_btn_color'
		)
	)
);
// Portrait Slider #2 Title
$wp_customize->add_setting( 'p-slider-title2', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'p-slider-title2', array(
	'label'	=>	__('Portrait Slider #2 Title', 'bootstrap-for-genesis' ),
	'section'	=>	'portrait-slider',
	'settings'	=>	'p-slider-title2',
	'type'	=> 'text'
));
// Portrait Slider #2 Text Area
$wp_customize->add_setting( 'p-slider-text2', array(
	'default'	=>	'',
	'type'	=> 'theme_mod',
	'sanitize_callback'	=>	'sanitize_text_field'
));
$wp_customize->add_control( 'p-slider-text2', array(
	'label'	=>	__('Portrait Slider #2 Text Area ', 'bootstrap-for-genesis' ),
	'section'	=>	'portrait-slider',
	'settings'	=>	'p-slider-text2',
	'type'	=> 'textarea'
));
// Portrait #2 Button Link
$wp_customize->add_setting ( 'port2_btn_url', array(
	'default'	=> '',
	'type'		=> 'theme_mod',
	'sanitize_callback' => 'esc_url',
));
$wp_customize->add_control ( 'port2_btn_url' , array(
	'type'	=>	'url',
	'section'	=>	'portrait-slider',
	'label'	=>	__( 'Portrait #2 Button Link', 'bootstrap-for-genesis' ),
	'settings'	=> 'port2_btn_url',
	'description'	=>	__('Add Button Link'),
));
// Portrait Slider #2 Image
$wp_customize -> add_setting ( 'port_slider2', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'port_slider2',
		array (
			'label'             => __('Portrait #2 Slider Image'),
			'section'           => 'portrait-slider',
			'settings'          => 'port_slider2',
		 //'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
// Portrait Slider #3 Background Color
$wp_customize->add_setting( 'slider3_bg', array(
	'default'           => '#000',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',

) );
// Portrait Slider #3 Background Color
$wp_customize->add_control(
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider3_bg', array(
			'label'    => __( 'Slider #3 Background Color', 'bootstrap-for-genesis' ),
			'priority' => 10,
			'section'  => 'portrait-slider',
			'settings' => 'slider3_bg'
		)
	)
);
// Portrait Slider #3 Title Color
$wp_customize->add_setting( 'slider3_title_color', array(
	'default'           => '#fff',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',

) );
// Portrait Slider #3 Title Color
$wp_customize->add_control(
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider3_title_color', array(
			'label'    => __( 'Slider #3 Title Color', 'bootstrap-for-genesis' ),
			'priority' => 10,
			'section'  => 'portrait-slider',
			'settings' => 'slider3_title_color'
		)
	)
);
// Portrait Slider #3 Text Color
$wp_customize->add_setting( 'slider3_text_color', array(
	'default'           => '#fff',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',

) );
// Portrait Slider #3 Text Color
$wp_customize->add_control(
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider3_text_color', array(
			'label'    => __( 'Slider #3 Text Color', 'bootstrap-for-genesis' ),
			'priority' => 10,
			'section'  => 'portrait-slider',
			'settings' => 'slider3_text_color'
		)
	)
);
// Portrait Slider #3 Button Text Color
$wp_customize->add_setting( 'slider3_btn_text_color', array(
	'default'           => '#fff',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',

) );
// Portrait Slider #3 Button Text Color
$wp_customize->add_control(
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider3_btn_text_color', array(
			'label'    => __( 'Slider #3 Button Text Color', 'bootstrap-for-genesis' ),
			'priority' => 10,
			'section'  => 'portrait-slider',
			'settings' => 'slider3_btn_text_color'
		)
	)
);
// Portrait Slider #3 Button Color
$wp_customize->add_setting( 'slider3_btn_color', array(
	'default'           => '#000',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_hex_color',

) );
// Portrait Slider #3 Button Color
$wp_customize->add_control(
	new WP_Customize_Color_Control (
		$wp_customize,
		'slider3_btn_color', array(
			'label'    => __( 'Slider #3 Button Color', 'bootstrap-for-genesis' ),
			'priority' => 10,
			'section'  => 'portrait-slider',
			'settings' => 'slider3_btn_color'
		)
	)
);
// Portrait Slider #3 Title
$wp_customize->add_setting( 'p-slider-title3', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'p-slider-title3', array(
	'label'    => __( 'Portrait Slider #3 Title', 'bootstrap-for-genesis' ),
	'section'  => 'portrait-slider',
	'settings' => 'p-slider-title3',
	'type'     => 'text'
) );
// Portrait Slider #3 Text Area
$wp_customize->add_setting( 'p-slider-text3', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'p-slider-text3', array(
	'label'    => __( 'Portrait Slider #3 Text Area ', 'bootstrap-for-genesis' ),
	'section'  => 'portrait-slider',
	'settings' => 'p-slider-text3',
	'type'     => 'textarea'
) );
// Portrait #3 Button Link
$wp_customize->add_setting( 'port3_btn_url', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url',
) );
$wp_customize->add_control( 'port3_btn_url', array(
	'type'        => 'url',
	'section'     => 'portrait-slider',
	'label'       => __( 'Portrait #3 Button Link', 'bootstrap-for-genesis' ),
	'settings'    => 'port3_btn_url',
	'description' => __( 'Add Button Link' ),
) );
// Portrait Slider #3 Image
$wp_customize->add_setting( 'port_slider3', array(
	'default'   => '',
	'type'      => 'theme_mod',
	'transport' => 'postMessage'
) );
$wp_customize->add_control(
	new WP_Customize_Image_Control (
		$wp_customize,
		'port_slider3',
		array(
			'label'             => __( 'Portrait #3 Slider Image' ),
			'section'           => 'portrait-slider',
			'settings'          => 'port_slider3',
		 //'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);
