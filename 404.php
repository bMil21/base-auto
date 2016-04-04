<?php
// 404 Page

// page vars
$page_meta = array(
	"title" => "404",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_404",
	"site_section" => "sct_404",
	"layout" => ""
);
// Hero / Hero Slider
// $hero_image = 'street';
// $hero_title = 'Home';
// $hero_slider_images = array("ph1", "ph2");
?>
<?php include("includes/header.php"); ?>
	<!-- Hero -->
	<?php include("includes/hero.php"); ?>
	<!-- Main -->
	<main class="content-block clearfix" role="main">
		<div class="wrap-sm clearfix">
			<div class="entry-content">
				<p>File not found. Please check the URL or use the navigation above to find the page you are seeking.</p>
			</div>
			<br><br>
		</div>
	</main>
<?php 
include("includes/footer.php");
?>