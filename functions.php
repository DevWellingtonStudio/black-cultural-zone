<?php
/**
 * Functions
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/wellington-studio-theme
 * @author       Chris Parsons <chris@steelbridge.io>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

add_filter( 'widget_text', 'do_shortcode' );

add_action( 'genesis_setup', 'wst_childtheme_setup', 15 );

function wst_childtheme_setup() {
 // Start the engine
 include_once( get_template_directory() . '/lib/init.php' );

 // Child theme (do not remove)
 define( 'BFG_THEME_NAME', 'Wellington Studio Theme' );
 define( 'BFG_THEME_URL', 'https://github.com/DevWellingtonStudio/wellington-studio-theme/' );
 define( 'BFG_THEME_LIB', CHILD_DIR . '/lib/' );
 define( 'BFG_THEME_LIB_URL', CHILD_URL . '/lib/' );
 define( 'BFG_THEME_IMAGES', CHILD_URL . '/images/' );
 define( 'BFG_THEME_JS', CHILD_URL . '/assets/js/' );
 define( 'BFG_THEME_CSS', CHILD_URL . '/assets/css/' );
 define( 'BFG_THEME_MODULES', CHILD_DIR . '/lib/modules/' );

 // Cleanup WP Head
 remove_action( 'wp_head', 'rsd_link' );
 remove_action( 'wp_head', 'wlwmanifest_link' );
 remove_action( 'wp_head', 'wp_generator' );
 remove_action( 'wp_head', 'start_post_rel_link' );
 remove_action( 'wp_head', 'index_rel_link' );
 remove_action( 'wp_head', 'adjacent_posts_rel_link' );
 remove_action( 'wp_head', 'wp_shortlink_wp_head' );

 // Add HTML5 markup structure
 add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

 //* Register nav menus
 add_theme_support( 'genesis-menus', array(
 	'primary' 	=> __( 'Primary Navigation Menu', 'bootstrap-for-genesis' ),
	'subnav'	=> __( 'Sub Navigation Menu', 'bootstrap-for-wordpress' ),
	'footer'	=> __( 'Footer Navigaton', 'bootstrap-for-wordpress')
	 ) );

 // Add viewport meta tag for mobile browsers
 add_theme_support( 'genesis-responsive-viewport' );

 // Add support for 3-column footer widgets
 add_theme_support( 'genesis-footer-widgets', 3 );

 // Custom Logo
 add_theme_support( 'custom-logo', array(
	 'flex-width' => true,
	 'flex-height' => true
 ) );

 // Structural Wraps
 add_theme_support( 'genesis-structural-wraps', array(
	 'site-inner',
	 'footer-widgets',
	 'footer',
	 'home-featured',
	 'nav'
 ) );

 // WooCommerce Support
 add_theme_support( 'genesis-connect-woocommerce' );

 // Remove unneeded widget areas
 // unregister_sidebar( 'header-right' );

 // Move Sidebar Secondary After Content
 remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
 add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );

 // Remove Gallery CSS
 add_filter( 'use_default_gallery_style', '__return_false' );

 // Add Shortcode Functionality to Text Widgets
 add_filter( 'widget_text', 'shortcode_unautop' );
 add_filter( 'widget_text', 'do_shortcode' );

 // Move Featured Image
 remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
 add_action( 'genesis_entry_header',  'genesis_do_post_image', 0 );

 // Custom Image Size
 add_image_size( 'bootstrap-featured', 730, 0, true );

 // Add Accessibility support
 add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

 // Customizer Selective Refresh
 add_theme_support( 'customize-selective-refresh-widgets' );

 // Include php files from lib folder
 // @link https://gist.github.com/theandystratton/5924570
 foreach ( glob( dirname( __FILE__ ) . '/lib/*.php' ) as $file ) {
	include $file;
 }

 // Load Child theme text domain
 load_child_theme_textdomain( 'bootstrap-for-genesis', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', function() {
 require_once( CHILD_DIR . '/lib/modules/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php' );
} );
