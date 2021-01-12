<?php

/* Parallax Image */

// Add Parallax Image
$wp_customize->add_section( 'parallax-image-section', array(
	'title' => __( 'Parallax Image', 'bootstrap-for-genesis' ),
	'priority' => 10
));

// Parallax Image
$wp_customize -> add_setting ( 'parallax_image', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'transport'         => 'postMessage'
));
$wp_customize -> add_control (
	new WP_Customize_Image_Control (
		$wp_customize,
		'prallax_image',
		array (
			'label'             => __('Add Parallax Image'),
			'section'           => 'parallax-image-section',
			'settings'          => 'parallax_image',
			//'priority'          => 10,
			'sanitize_callback' => 'esc_url_raw',
		)
	)
);

/// ====== End Images ====== ///


