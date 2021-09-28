<?php
$wst_slider1	= get_theme_mod('wst_slider1', $default );
$slider1title	= get_theme_mod('slider1title', $default );
$sldr1text		= get_theme_mod('sldr1text', $default );
$wst_slider2	= get_theme_mod('wst_slider2', $default );
$slider2title	= get_theme_mod('slider2title', $default );
$sldr2text		= get_theme_mod('sldr2text', $default );
$wst_slider3	= get_theme_mod('wst_slider3', $default );
$slider3title	= get_theme_mod('slider3title', $default );
$sldr3text		= get_theme_mod('sldr3text', $default );

$default = '';

if($wst_slider1 !== $default) :
?>
<div id="hero-section">
  <div id="wstTopSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#wstTopSlider" data-slide-to="0" class="active"></li>
      <?php if($wst_slider2 !== $default) : ?>
      <li data-target="#wstTopSlider" data-slide-to="1"></li>
      <?php endif;
      if($wst_slider3 !== $default) : ?>
      <li data-target="#wstTopSlider" data-slide-to="2"></li>
      <?php endif; ?>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php if($wst_slider1 !== $default){echo $wst_slider1;} ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5><?php if($slider1title !== $default){echo $slider1title;} ?></h5>
          <p><?php if($sldr1text !== $default){echo $sldr1text;} ?></p>
        </div>
      </div>
		 <?php if($wst_slider2 !== $default) : ?>
       <div class="carousel-item">
         <img src="<?php if($wst_slider2 !== $default){echo $wst_slider2;} ?>" class="d-block w-100" alt="...">
         <div class="carousel-caption d-md-block">
           <h5><?php if($slider2title !== $default){echo $slider2title;} ?></h5>
           <p><?php if($sldr2text !== $default){echo $sldr2text;} ?></p>
         </div>
       </div>
		 <?php endif;
		 if($wst_slider3 !== $default) : ?>
       <div class="carousel-item">
         <img src="<?php if($wst_slider3 !== $default){echo $wst_slider3;} ?>" class="d-block w-100" alt="...">
         <div class="carousel-caption d-md-block">
           <h5><?php if($slider3title !== $default){echo $slider2title;} ?></h5>
           <p><?php if($sldr3text !== $default){echo $sldr3text;} ?></p>
         </div>
       </div>
		 <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#wstTopSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#wstTopSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<?php endif; ?>
