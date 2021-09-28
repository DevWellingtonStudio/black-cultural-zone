<?php
// Adds the portrait slider
?>

<div id="portrait-section">
 <div id="wstPortraitSlider" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
	 <li data-target="#wstPortraitSlider" data-slide-to="0" class="active"></li>
	 <li data-target="#wstPortraitSlider" data-slide-to="1"></li>
	 <li data-target="#wstPortraitSlider" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	 <div id="portrait-item-one" class="carousel-item active">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
				<?php $p_slider_title1 = get_theme_mod('p-slider-title1'); ?>
				<h1 class="card-title"><?php if($p_slider_title1 !== ''){echo $p_slider_title1;} ?></h1>
				<?php $p_slider_text1 = get_theme_mod('p-slider-text1'); ?>
				<p class="card-text"><?php if($p_slider_text1 !== ''){echo $p_slider_text1;} ?></p>
				<?php $port1_btn_url = get_theme_mod('port1_btn_url'); ?>
				<?php if($port1_btn_url !== ''){echo '<a href="' . $port1_btn_url . '" title="Read More"><button type="button" class="zindex-btn btn btn-1"><h5>Find Out More...</h5></button></a>';} ?>
			 </div>
			</div>
			<div class="col-md-6 portrait-image">
			 <?php $port_slider1 = get_theme_mod('port_slider1'); ?>
			 <img src="<?php if($port_slider1 !== ''){echo $port_slider1;} ?>" class="card-img" alt="...">
			</div>
		 </div>
		</div>
	 </div>
	 <div id="portrait-item-two" class="carousel-item">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 portrait-image">
			  <?php $port_slider2 = get_theme_mod('port_slider2'); ?>
			 <img src="<?php if($port_slider2 !== ''){echo $port_slider2;} ?>" class="card-img" alt="...">
			</div>
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
			   <?php $p_slider_title2 = get_theme_mod('p-slider-title2'); ?>
				<h1 class="card-title"><?php if($p_slider_title2 !== ''){echo $p_slider_title2;} ?></h1>
			   <?php $p_slider_text2 = get_theme_mod('p-slider-text2'); ?>
				<p class="card-text"><?php if($p_slider_text2 !== ""){echo $p_slider_text2;} ?></p>
				<?php $port2_btn_url = get_theme_mod('port2_btn_url'); ?>
				<?php if($port2_btn_url !== ''){echo '<a href="' . $port2_btn_url . '" title="Read More"><button type="button" class="zindex-btn btn btn-2"><h5>Read More Here...</h5></button></a>';} ?>
			 </div>
			</div>
		 </div>
		</div>
	 </div>
	 <div id="portrait-item-three" class="carousel-item">
		<div id="portrait-hero" class="card">
		 <div class="row no-gutters">
			<div class="col-md-6 card-body-wrapper">
			 <div class="card-body">
			   <?php $p_slider_title3 = get_theme_mod('p-slider-title3'); ?>
				<h1 class="card-title"><?php if($p_slider_title3 !== ''){echo $p_slider_title3;} ?></h1>
			   <?php $p_slider_text3 = get_theme_mod('p-slider-text3'); ?>
				<p class="card-text"><?php if($p_slider_text3 !== ''){echo $p_slider_text3;} ?></p>
				<?php $port3_btn_url = get_theme_mod('port3_btn_url'); ?>
				<?php if($port3_btn_url !== ''){ echo '<a href="' . $port3_btn_url . '" title="Read More"><button type="button" class="zindex-btn btn btn-3"><h5>Read More...</h5></button></a>';} ?>
			 </div>
			</div>
			<div class="col-md-6 portrait-image">
			  <?php $port_slider3 = get_theme_mod('port_slider3'); ?>
			 <img src="<?php if($port_slider3 !== ''){echo $port_slider3;} ?>" class="card-img" alt="...">
			</div>
		 </div>
		</div>
	 </div>
	</div>
 </div>
 <!-- <a class="carousel-control-prev" href="#wstPortraitSlider" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#wstPortraitSlider" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
 </a> -->
</div>
