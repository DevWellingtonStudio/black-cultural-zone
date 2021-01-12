<?php
$default = '';
$wst_mid_slider1	= get_theme_mod('wst_mid_slider1', $default );
$midslider1title	= get_theme_mod('midslider1title', $default);
$midsldr1text		= get_theme_mod('midsldr1text', $default);
$wst_mid_slider2	= get_theme_mod('wst_mid_slider2', $default);
$midslider2title	= get_theme_mod('midslider2title', $default);
$midsldr2text		= get_theme_mod('midsldr2text', $default);
$wst_mid_slider3	= get_theme_mod('wst_mid_slider3', $default);
$midslider3title	= get_theme_mod('midslider3title', $default);
$midsldr3text		= get_theme_mod('midsldr3text', $default);


?>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div id="mid-slider-fp-1" class="carousel-item active align-items-center">
	      <img src="<?php if($wst_mid_slider1 !== $default){echo $wst_mid_slider1;} ?>" class="d-block w-100" alt="...">
	      <div class="carousel-caption">
	        <h3><?php if($midslider1title !== $default){echo $midslider1title;} ?></h3>
	        <p><?php if($midsldr1text !== $default){echo $midsldr1text;} ?></p>
	      </div>
	    </div>
	    <div id="mid-slider-fp-2" class="carousel-item align-items-center">
	      <img src="<?php if($wst_mid_slider2 !== $default){echo $wst_mid_slider2;} ?>" class="d-block w-100" alt="...">
	      <div class="carousel-caption">
	        <h3><?php if($midslider2title !== $default){echo $midslider2title;} ?></h3>
	        <p><?php if($midsldr2text !== $default){echo $midsldr2text;} ?></p>
	      </div>
	    </div>
	    <div id="mid-slider-fp-3" class="carousel-item align-items-center">
	      <img src="<?php if($wst_mid_slider3 !== $default){echo $wst_mid_slider3;} ?>" class="d-block w-100" alt="...">
	      <div class="carousel-caption">
	        <h3><?php if($midslider3title !== $default){echo $midslider3title;} ?></h3>
	        <p><?php if($midsldr3text !== $default){echo $midsldr3text;} ?></p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
