<?php
add_theme_support( 'align-wide' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'custom-line-height' );
add_theme_support( 'custom-units' );
add_theme_support( 'custom-units', 'rem', 'em' );
add_theme_support( 'editor-styles' );
add_theme_support( 'dark-editor-style' );
add_editor_style( 'assets/style-editor.css' );
add_theme_support( 'responsive-embeds' );
add_theme_support('experimental-custom-spacing');
add_theme_support('experimental-link-color');


function mytheme_setup_theme_supported_features() {
 add_theme_support( 'editor-color-palette', array(
	 array(
		 'name' => __( 'strong magenta', 'themeLangDomain' ),
		 'slug' => 'strong-magenta',
		 'color' => '#a156b4',
	 ),
	 array(
		 'name' => __( 'light grayish magenta', 'themeLangDomain' ),
		 'slug' => 'light-grayish-magenta',
		 'color' => '#d0a5db',
	 ),
	 array(
		 'name' => __( 'very light gray', 'themeLangDomain' ),
		 'slug' => 'very-light-gray',
		 'color' => '#eee',
	 ),
	 array(
		 'name' => __( 'very dark gray', 'themeLangDomain' ),
		 'slug' => 'very-dark-gray',
		 'color' => '#444',
	 ),
 ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

add_theme_support( 'editor-color-palette', array(
	array(
		'name' => __( 'strong magenta', 'themeLangDomain' ),
		'slug' => 'strong-magenta',
		'color' => '#a156b4',
	),
	array(
		'name' => __( 'light grayish magenta', 'themeLangDomain' ),
		'slug' => 'light-grayish-magenta',
		'color' => '#d0a5db',
	),
	array(
		'name' => __( 'very light gray', 'themeLangDomain' ),
		'slug' => 'very-light-gray',
		'color' => '#eee',
	),
	array(
		'name' => __( 'very dark gray', 'themeLangDomain' ),
		'slug' => 'very-dark-gray',
		'color' => '#444',
	),
) );

add_theme_support(
	'editor-gradient-presets',
	array(
		array(
			'name'     => __( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ),
			'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
			'slug'     => 'vivid-cyan-blue-to-vivid-purple'
		),
		array(
			'name'     => __( 'Vivid green cyan to vivid cyan blue', 'themeLangDomain' ),
			'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
			'slug'     =>  'vivid-green-cyan-to-vivid-cyan-blue',
		),
		array(
			'name'     => __( 'Light green cyan to vivid green cyan', 'themeLangDomain' ),
			'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
			'slug'     => 'light-green-cyan-to-vivid-green-cyan',
		),
		array(
			'name'     => __( 'Luminous vivid amber to luminous vivid orange', 'themeLangDomain' ),
			'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
			'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
		),
		array(
			'name'     => __( 'Luminous vivid orange to vivid red', 'themeLangDomain' ),
			'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
			'slug'     => 'luminous-vivid-orange-to-vivid-red',
		),
	)
);

add_theme_support( 'editor-font-sizes', array(
	array(
		'name' => __( 'Small', 'themeLangDomain' ),
		'size' => 12,
		'slug' => 'small'
	),
	array(
		'name' => __( 'Regular', 'themeLangDomain' ),
		'size' => 16,
		'slug' => 'regular'
	),
	array(
		'name' => __( 'Large', 'themeLangDomain' ),
		'size' => 36,
		'slug' => 'large'
	),
	array(
		'name' => __( 'Huge', 'themeLangDomain' ),
		'size' => 50,
		'slug' => 'huge'
	)
) );

