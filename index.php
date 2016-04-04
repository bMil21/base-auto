<?php
// HOME Page

// page vars
$page_meta = array(
	"title" => "pageName",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_home",
	"site_section" => "sct_home",
	"layout" => ""
);
// Hero / Hero Slider
$hero_image = 'street';
$hero_title = 'Home';
$hero_slider_images = array("ph1", "ph2");
?>
<?php include("includes/header.php"); ?>
	<!-- Hero -->
	<?php include("includes/hero.php"); ?>
	<!-- Main -->
	<main id="content-main" class="clearfix" role="main">
		<div class="wrap clearfix">
		</div>
	</main>
<?php 
include("includes/footer.php");
?>