<?php 
// Header
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= isset($page_meta["title"]) ? $page_meta["title"] : "SITE NAME" ?></title>
	<meta name="keywords" content="<?= isset($page_meta["keywords"]) ? $page_meta["keywords"] : "" ?>">
	<meta name="description" content="<?= isset($page_meta["description"]) ? $page_meta["description"] : "" ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="http://www.aycmedia.com" />
	
	<link rel="icon" href="favicon.ico" />
	<link rel="stylesheet" href="style.css">
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body class="<?php print implode(" ", $body_class); ?>">
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<header>
		<div class="wrap clearfix">
			<nav id="nav-main">
				<ul>
					<li <?php if ($body_class['site_section'] == 'page1') print 'class="current"';?>><a href="page1.php" title="Page1">Page1</a></li>
					<li <?php if ($body_class['site_section'] == 'page2') print 'class="current"';?>><a href="page2.php" title="Page2">Page2</a></li>
					<li <?php if ($body_class['site_section'] == 'page3') print 'class="current"';?>><a href="page3.php" title="Page3">Page3</a></li>
				</ul>
			</nav>
		</div>
	</header>
<?php 

?>