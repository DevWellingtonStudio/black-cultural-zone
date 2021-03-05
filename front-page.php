<?php

/**
 * This file adds the Front Page Template to Wellington Studio Theme
 */


add_filter( 'body_class', 'io_front_page_body_class' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function io_front_page_body_class( $classes ) {
  $classes[] = 'front-page';
  return $classes;
}

// Front Page Hero Section
add_action( 'genesis_before_content_sidebar_wrap', 'add_slider_front_page', 10 );
function add_slider_front_page() {
  $default 			= '';
  $videoUrl			= get_theme_mod('hero_video_url', $default );
  $hero_h1 			= get_theme_mod('hero_h1', $default );
  $hero_desc		= get_theme_mod('hero_desc', $default );
  $wst_slider1		= get_theme_mod('wst_slider1', $default );
  $port_slider1     = get_theme_mod('port_slider1');
  ?>

	<?php if($videoUrl !== $default ) : ?>
	<div id="hero-section">
	  <div id="header-video" >
		<div class="overlay"></div>
		<video class="embed-responsive" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">';
		  <source src="<?php echo $videoUrl; ?>" type="video/mp4">
		</video>
		<div class="container h-100">
		  <div class="d-flex h-100 text-center align-items-center">
			<div class="w-100 text-white">
			  <h1 class="display-3"><?php if($hero_h1 !== $default){echo $hero_h1;} ?></h1>
			  <p class="lead mb-0"><?php if($hero_desc !== $default){echo $hero_desc;} ?></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<?php elseif($wst_slider1 !== $default) :
	    include (get_stylesheet_directory() . '/inc/fp-hero-slider.php');
	elseif($videoUrl == $default && $wst_slider1 == $default && $port_slider1 !== $default ) :
          include( get_stylesheet_directory() . '/inc/portrait-slider.php' );
	
   	endif;
 }

add_action( 'genesis_before_content', 'mid_page_slider', 15 );
function mid_page_slider() {
  $firstImage = get_theme_mod('wst_mid_slider1');
  if($firstImage !== '') {
	 include 'inc/fp-mid-slider.php';
	}
}

// Adds Sub Naviagtion Menu Function => /lib/nav.php
add_action('genesis_before_content_sidebar_wrap', 'sub_nav_menu', 15 );

add_action('genesis_before_content', 'add_background_one', 5);
function add_background_one() {
echo '<div id="background-one" class="container-fluid">' .
     '<object data=""></object>' .
     '</div>';
}


add_action( 'genesis_before_loop', 'io_front_page_latest_posts' );
function io_front_page_latest_posts() {
  
  global $post;
 

  // The Query
  //$the_query = new WP_Query( array(
  $the_query = tribe_get_events( array (
      'posts_per_page'  => 12,
      'start_date'     => 'today',
      'eventDisplay'=>'list',
      'tax_query' =>  array(
        array(
          'taxonomy' => 'tribe_events_cat',
          'field' => 'slug',
          'terms' => 'feature-on-front-page'
        ),
      ),
  //) );
));

  // The Loop
  //if ( $the_query->have_posts() ) {
	echo '<div class="news-feed-title mt_med text-center"><h2 class="news-feed">FEATURED EVENTS</h2></div>';
	echo '<div class="container-2">';
	echo '<div id="fp-news" class="news-fp mt row justify-content-center">';

	//while ( $the_query->have_posts() ) {
	  //$the_query->the_post();
    foreach ( $the_query as $post ) {
      setup_postdata( $post );
   

	  echo '<div class="news-excerpt col-md-4">';

	  if ( $image = genesis_get_image( 'format=url&size=featured-image' ) ) {
		printf( '<div class="featured-image"><a href="%s" rel="bookmark"><img src="%s" alt="%s" /></a></div>', get_permalink(), $image, the_title_attribute( 'echo=0' ) );
	  }
        
        echo '<a href="'. get_the_permalink() .'"><button class="btn-square btn-red news-readmore">Read More</button></a>';

	  echo '</div>';
	}

	echo '</div>
        </div>';

	/* Restore original Post Data */
	//  wp_reset_postdata();
  //   } else {
	// no posts found
  // }
  }

remove_action( 'genesis_loop', 'genesis_do_loop' );
//add_action( 'genesis_loop', 'child_grid_loop_helper' );
/** Add support for Genesis Grid Loop **/
function child_grid_loop_helper() {

  if ( function_exists( 'genesis_grid_loop' ) ) {
	remove_action( 'genesis_before_post_content', 'generate_post_image', 5 );
	genesis_grid_loop( array(
		'features'              => 2,
		'feature_image_size'    => 'large',
		'feature_image_class'   => 'aligncenter post-image',
		'feature_content_limit' => 0,
		'grid_image_size'       => 'grid',
		'grid_image_class'      => 'alignleft post-image',
		'grid_content_limit'    => 0,
		'more'                  => __( 'Continue reading...', 'genesis' ),
		'posts_per_page'        => 3,
	) );
  } else {
	genesis_standard_loop();
  }

}

genesis();
