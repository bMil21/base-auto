<?php 
// Header
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<title><?php echo empty($page_meta["title"]) ? "INSERT_TITLE" : $page_meta["title"] . " | INSERT_TITLE" ?></title>
	<meta name="keywords" content="<?php echo isset($page_meta["keywords"]) ? $page_meta["keywords"] : "" ?>">
	<meta name="description" content="<?php echo isset($page_meta["description"]) ? $page_meta["description"] : "" ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="http://www.aycmedia.com" />
	
	<link rel="icon" href="images/favicon.png" />
	<link href="images/apple-touch-icon-152x152.png" rel="apple-touch-icon-precomposed" size="152x152" />
	<link href="images/apple-touch-icon-120x120.png" rel="apple-touch-icon-precomposed" size="120x120" />
	<link href="images/apple-touch-icon-76x76.png" rel="apple-touch-icon-precomposed" size="76x76" />
	<link href="images/apple-touch-icon-60x60.png" rel="apple-touch-icon-precomposed" size="60x60" />
	
	<link rel="stylesheet" href="style.css">
	<script src="js/head.js" async></script>
	<!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
</head>
<!--[if IE 6 ]><body class="ie ie6 lt-ie7 lt-ie8 lt-ie9 lt-ie10 <?php print implode(" ", $body_class); ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie ie7 lt-ie8 lt-ie9 lt-ie10 <?php print implode(" ", $body_class); ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie ie8 lt-ie9 lt-ie10 <?php print implode(" ", $body_class); ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie ie9 lt-ie10 <?php print implode(" ", $body_class); ?>"><![endif]-->
<!--[if gt IE 9]><!--> <body class="<?php print implode(" ", $body_class); ?>"> <!--<![endif]-->
	<!--[if lte IE 7]>
		<p class="chromeframe center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Header -->
	<header class="header">
		<div class="wrap clearfix">
			<nav id="nav-main">
				<ul>
					<li class="<?php if ($body_class['site_section'] == 'page1') print ' current';?>"><a href="page1.php" title="Page1">Page1</a></li>
					<li class="<?php if ($body_class['site_section'] == 'page2') print ' current';?>"><a href="page2.php" title="Page2">Page2</a></li>
					<li class="<?php if ($body_class['site_section'] == 'page3') print ' current';?>"><a href="page3.php" title="Page3">Page3</a></li>
				</ul>
			</nav>
		</div>
	</header>
<?php 

?>