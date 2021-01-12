<?php
/**
 * Miscellaneous
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Custom Image Function
function bfg_post_image() {
	global $post;
	$image = '';
	$image_id = get_post_thumbnail_id( $post->ID );
	$image = wp_get_attachment_image_src( $image_id, 'full' );
	$image = $image[0];
	if ( $image ) return $image;
	return bfg_get_first_image();
}

// Get the First Image Attachment Function
function bfg_get_first_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
	$first_img = "";
	if ( isset( $matches[1][0] ) )
		$first_img = $matches[1][0];
	return $first_img;
}

// Custom Meta
add_action( 'genesis_meta', 'bfg_do_meta' );
function bfg_do_meta() {
	// Jumbotron
	if ( is_front_page() && is_active_sidebar( 'home-featured' ) ) add_action( 'genesis_header', 'bfg_do_home_featured' );
	if ( is_front_page() && is_active_sidebar( 'frontpage-one' ) ) add_action( 'genesis_before_content', 'wst_do_frontpage_one' );
	if ( is_front_page() && is_active_sidebar( 'frontpage-two' ) ) add_action( 'genesis_after_content', 'wst_do_frontpage_two', 10 );
	if ( is_front_page() && is_active_sidebar( 'frontpage-three' ) ) add_action( 'genesis_after_content', 'wst_do_frontpage_three', 15 );
	if ( is_front_page() && is_active_sidebar( 'frontpage-four' ) ) add_action( 'genesis_after_content', 'wst_do_frontpage_four', 20 );
	//if ( is_front_Page() && is_active_sidebar( 'frontpage-five' ) ) add_action( 'genesis_after_content', 'wst_do_frontpage_five', 25 );

	// Body Class
	add_filter( 'body_class', 'bfg_body_class' );
}

// Jumbotron
function bfg_do_home_featured() {
	genesis_markup( array(
		'open' => '<div %s>',
		'context' => 'home-featured'
	) );

	genesis_structural_wrap( 'home-featured' );

	genesis_widget_area( 'home-featured', array(
		'before' => '',
		'after' => ''
	) );

	genesis_structural_wrap( 'home-featured', 'close' );

	genesis_markup( array(
		'close' => '</div>',
		'context' => 'home-featured'
	) );
}

// Front Page Widget One
function wst_do_frontpage_one() {
	genesis_markup( array(
		'open' => '<div %s>',
		'context' => 'frontpage-one'
	) );

	genesis_structural_wrap( 'frontpage-one' );

	genesis_widget_area( 'frontpage-one', array(
		'before' => '<div class="container">',
		'after' => '</div>'
	) );

	genesis_structural_wrap( 'frontpage-one', 'close' );

	genesis_markup( array(
		'close' => '</div>',
		'context' => 'frontpage-one'
	) );
}

// Front Page Widget Two
function wst_do_frontpage_two() {
	genesis_markup( array(
		'open' => '<div %s>',
		'context' => 'frontpage-two'
	) );

	genesis_structural_wrap( 'frontpage-two' );

	genesis_widget_area( 'frontpage-two', array(
		'before' => '<div class="container-2">',
		'after' => '</div>'
	) );

	genesis_structural_wrap( 'frontpage-two', 'close' );

	genesis_markup( array(
		'close' => '</div>',
		'context' => 'frontpage-two'
	) );
}

// Front Page Widget Three
function wst_do_frontpage_three() {
	genesis_markup( array(
		'open' => '<div %s><div class="background-graphic"></div>',
		'context' => 'frontpage-three'
	) );

	genesis_structural_wrap( 'frontpage-three' );

	genesis_widget_area( 'frontpage-three', array(
		'before' => '<div class="container-2">',
		'after' => '</div>'
	) );

	genesis_structural_wrap( 'frontpage-three', 'close' );

	genesis_markup( array(
		'close' => '</div>',
		'context' => 'frontpage-three'
	) );
}

// Front Page Widget Four
function wst_do_frontpage_four() {
	genesis_markup( array(
		'open' => '<div %s>',
		'context' => 'frontpage-four'
	) );

	genesis_structural_wrap( 'frontpage-four' );

	genesis_widget_area( 'frontpage-four', array(
		'before' => '<div class="container-1700"><div class="row">',
		'after' => '</div></div>'
	) );

	genesis_structural_wrap( 'frontpage-four', 'close' );

	genesis_markup( array(
		'close' => '</div>',
		'context' => 'frontpage-four'
	) );
}

// Front Page Widget Five
function wst_do_frontpage_five() {
	genesis_markup( array(
		'open' => '<div %s>',
		'context' => 'frontpage-five'
	) );
	
	genesis_structural_wrap( 'frontpage-five' );
	
	genesis_widget_area( 'frontpage-five', array(
		'before' => '<div class="container-fluid"><div class="row">',
		'after' => '</div></div>'
	) );
	
	genesis_structural_wrap( 'frontpage-five', 'close' );
	
	genesis_markup( array(
		'close' => '</div>',
		'context' => 'frontpage-five'
	) );
}

// Body Class
function bfg_body_class( $args ) {
	if ( is_page_template( 'page_blog.php' ) )
		$args[] = 'blog';

	return $args;
}
