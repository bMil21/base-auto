<?php 
// Footer
?>
	<footer>
		<div class="wrap clearfix">
			<nav id="nav-footer">
				<ul>
					<li <?php if ($body_class['site_section'] == 'page1') print 'class="current"';?>><a href="page1.php" title="Page1">Page1</a></li>
					<li <?php if ($body_class['site_section'] == 'page2') print 'class="current"';?>><a href="page2.php" title="Page2">Page2</a></li>
					<li <?php if ($body_class['site_section'] == 'page3') print 'class="current"';?>><a href="page3.php" title="Page3">Page3</a></li>
				</ul>
			</nav>
		</div>
	</footer>
	<!-- Load Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js"><\/script>')</script>
	<script src="js/scripts.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>
<?php

?>