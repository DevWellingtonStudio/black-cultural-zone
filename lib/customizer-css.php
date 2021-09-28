<?php

function load_wst_customizer_css() {
	$css_wst = '';
	
	$nav_link_color             = get_theme_mod('nav_link_color');
	$nav_link_hover_color       = get_theme_mod('nav_link_hover_color');
	
	$subnav_bgcolor 			= get_theme_mod( 'subnav_bgcolor');
	$subnav_fcolor				= get_theme_mod('subnav_fcolor');
	$subnav_hover				= get_theme_mod('subnav_hover');
	
	$slider1_bg					= get_theme_mod('slider1_bg');
	$slider1_title_color		= get_theme_mod('slider1_title_color');
	$slider1_text_color			= get_theme_mod('slider1_text_color');
	$slider1_btn_text_color	    = get_theme_mod('slider1_btn_text_color');
	$slider1_btn_color			= get_theme_mod('slider1_btn_color');
	
	$slider2_bg					= get_theme_mod('slider2_bg');
	$slider2_title_color		= get_theme_mod('slider2_title_color');
	$slider2_text_color			= get_theme_mod('slider2_text_color');
	$slider2_btn_text_color	    = get_theme_mod('slider2_btn_text_color');
	$slider2_btn_color			= get_theme_mod('slider2_btn_color');
	
	$slider3_bg					= get_theme_mod('slider3_bg');
	$slider3_title_color		= get_theme_mod('slider3_title_color');
	$slider3_text_color			= get_theme_mod('slider3_text_color');
	$slider3_btn_text_color	    = get_theme_mod('slider3_btn_text_color');
	$slider3_btn_color			= get_theme_mod('slider3_btn_color');
	
	$bg_img_one                 = get_theme_mod('bg_img_one');
	$bg_img_two                 = get_theme_mod('bg_img_two');
	$bg_img_three               = get_theme_mod('bg_img_three');
	
	$css_wst .= '
	
		#background-one {
            background-image: url(' . $bg_img_one . ');
        }
        .home .site-container .site-inner .content-sidebar-wrap.row {
            background-image: url(' . $bg_img_two . ');
        }
        .background-graphic {
            background-image: url(' . $bg_img_three  . ');
        }
		.menu-item a {
			color: '. $nav_link_color .';
		}
		.menu-item a:hover {
			color: '. $nav_link_hover_color .';
		}
		.btn-1 h5 {
			color: '. $slider1_btn_text_color .';
		}
		.btn-2 h5 {
			color: '. $slider2_btn_text_color .';
		}
		.btn-3 h5 {
			color: '. $slider3_btn_text_color .';
		}
		.btn-1 {
			background-color: '. $slider1_btn_color .';
		}
		.btn-2 {
			background-color: '. $slider2_btn_color .';
		}
		.btn-3 {
			background-color: '. $slider3_btn_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider1_title_color .';
		}
		#portrait-item-two .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider2_title_color .';
		}
		#portrait-item-three .card .row .card-body-wrapper .card-body h1 {
			color: '. $slider3_title_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper .card-body p {
			color: '. $slider1_text_color .';
		}
		#portrait-item-two .card .row .card-body-wrapper .card-body p {
			color: '. $slider2_text_color .';
		}
		#portrait-item-three .card .row .card-body-wrapper .card-body p {
			color: '. $slider3_text_color .';
		}
		#portrait-item-one .card .row .card-body-wrapper {
			background-color: '. $slider1_bg .';
		}
		#portrait-item-two .card .row .card-body-wrapper {
			background-color: '. $slider2_bg .';
		}
		#portrait-item-three .card .row .card-body-wrapper {
			background-color: '. $slider3_bg .';
		}
		#sub-nav-fp,
		#wstPortraitSlider .carousel-indicators li {
			background-color: ' . $subnav_bgcolor . ';
		}
		.navbar-light .navbar-nav.subnav .nav-link {
			color: '. $subnav_fcolor .';
		}
		.navbar-light .navbar-nav.subnav .nav-link:hover {
			color: '. $subnav_hover .';
		}
	';
	return $css_wst;
}
