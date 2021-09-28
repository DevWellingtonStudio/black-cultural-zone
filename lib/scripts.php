<?php
/**
 * Scripts
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {
	wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/custom.css', array(), '1.0.0', 'all');
	
 if(function_exists('load_wst_customizer_css')) {
	wp_add_inline_style('custom-css', load_wst_customizer_css());
 }
	$version = wp_get_theme()->Version;
	if ( !is_admin() ) {
		// Disable the superfish script
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );

		// Deregister jQuery and use Bootstrap supplied version
		/*wp_deregister_script( 'jquery' );*/
		wp_register_script( 'jquery', BFG_THEME_JS . 'jquery.slim.min.js', array(), $version, true );
		wp_enqueue_script( 'jquery' );

		// Register Popper JS and enqueue it
		wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-popper-js' );

		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Register theme JS and enqueue it
		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );
		
		wp_register_script( 'custom-js', BFG_THEME_JS . 'custom.js', array(), $version, true );
		wp_enqueue_script('custom-js');
		
		wp_register_script( 'font-awesome', 'https://kit.fontawesome.com/76342ff491.js', array(), $version, true );
		wp_enqueue_script('font-awesome');
		
		wp_register_script( 'parallax-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '3.2.1', true );
		wp_register_script('parallax-min-js', BFG_THEME_JS . 'parallax.min.js', array(), '1.5.0', true );
		if(is_home() || is_front_page() ) {
			wp_enqueue_script('parallax-jquery');
			wp_enqueue_script('parallax-min-js');
		}
	}
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}
