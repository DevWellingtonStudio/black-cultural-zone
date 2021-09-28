<?php

/*
 * Add featured image to header of page and post
 *
 */
add_action('genesis_before_content_sidebar_wrap', 'add_featured_image', 10);
function add_featured_image() {
 $featured_img_url = get_the_post_thumbnail_url( $post->ID, 'full' );
 
 $thumbnail_id = get_post_thumbnail_id( $post->ID );
 $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
 
 if ( is_page() || is_single() && $featured_img_url !== '' ) {
	echo '
			 <div id="featured-image-header">
			 	<div class="container-fluid p-0">
			 		<img class="img-responsive" src="'. $featured_img_url .'" alt="'. $alt .'">
				</div>
			 </div>
 			';
 }
}
