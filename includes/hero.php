<?php if (isset($hero_slider_images)) { ?>
<section id="hero-slider" class="reslider-wrap">
	<ul class="reslider">
		<?php foreach ($hero_slider_images as $num => $img) { ?>
			<?php $num = $num + 1; // start at "1" now ?>
		<li class="slide slide<?php echo $num; ?>"></li>
		<?php } ?>
	</ul>
</section>
<?php } ?>
<?php if (isset($hero_image)) { ?>
<section id="hero">
	<div class="wrap clearfix">
		<h1><?php if (isset($hero_title)) echo $hero_title; ?></h1>
	</div>
</section>
<?php } ?>