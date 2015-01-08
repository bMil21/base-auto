<?php 
// Header
?>
<!DOCTYPE html>
<!--[if IE 6 ]><html class="no-js ie ie6 lt-ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lt-ie10"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
	<script src="js/libs/modernizr.js"></script>
	<!--[if lte IE 8]><script src="js/respond.js"></script><![endif]-->
</head>
<body class="<?php print implode(" ", $body_class); ?>">
	<!--[if lte IE 7]>
		<p class="chromeframe center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
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