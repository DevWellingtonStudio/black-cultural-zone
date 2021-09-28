<?php
/*
 * Adds custom short codes for theme features
 *
 * */

/* Parallax Scroll */

add_action('genesis_before_footer', 'add_parallax_effect', 5);
function add_parallax_effect() {
	if(is_home() || is_front_page() ) {
		$parallax_image = get_theme_mod( 'parallax_image' );
		if ( ! empty( $parallax_image ) ) {
			echo '<div class="parallax-window" data-parallax="scroll" data-image-src="' . $parallax_image . '"></div>';
		}
	}
}



