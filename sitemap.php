<?
// SITEMAP Page

// page vars
$page_meta = array(
	"title" => "Sitemap",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_sitemap",
	"site_section" => "sct_sitemap",
	"layout" => ""
);
?>
<? include("includes/header.php"); ?>
<? include("includes/hero.php"); ?>
	<!-- Main -->
	<main class="clearfix" role="main">
		<div class="wrap clearfix">
			<h1 class="hdr1">Sitemap</h1>
			<hr>
			<nav class="sitemap-nav">
				<ul>
					<li><a href="/" title="Home">Home</a></li>
					<li>
						<a href="/products.php" title="Products">Products</a>
						<ul>
							<li><a href="/product-details.php" title="Product Details">Product Details</a></li>
						</ul>
					</li>
					<li><a href="/about.php" title="About">About</a></li>
					<li><a href="/news.php" title="News">News</a></li>
					<li><a href="/contact.php" title="Contact">Contact</a></li>
					<li><a href="/sitemap.php" title="Sitemap">Sitemap</a></li>
				</ul>
			</nav>
		</div>
	</main>
<? 
include("includes/footer.php");
?>