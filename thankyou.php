<?
// THANK YOU Page

// page vars
$page_meta = array(
	"title" => "Thank You",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_thankyou",
	"site_section" => "sct_thankyou",
	"layout" => ""
);
// Hero / Hero Slider
// $hero_image = 'street';
// $hero_title = 'Home';
// $hero_slider_images = array("ph1", "ph2");
?>
<? include("includes/header.php"); ?>
	<!-- Hero -->
	<? include("includes/hero.php"); ?>
	<!-- Main -->
	<main class="content-block clearfix" role="main">
		<div class="wrap center clearfix">
			<div class="vert-pad-lg">
				<h1 class="hdr2">Thank You</h1>
				<hr>
				<p>We have received your request and will contact you shortly.</p>
				<br><br><br><br>
				<br><br><br><br>
			</div>
		</div>
	</main>
<? 
include("includes/footer.php");
?>