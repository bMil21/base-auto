<?php 
// Footer
?>
	<footer class="footer">
		<div class="wrap clearfix">
			<nav id="nav-footer">
				<ul>
					<li class="<?php if ($body_class['site_section'] == 'page1') print ' current';?>"><a href="page1.php" title="Page1">Page1</a></li>
					<li class="<?php if ($body_class['site_section'] == 'page2') print ' current';?>"><a href="page2.php" title="Page2">Page2</a></li>
					<li class="<?php if ($body_class['site_section'] == 'page3') print ' current';?>"><a href="page3.php" title="Page3">Page3</a></li>
				</ul>
			</nav>
		</div>
	</footer>
	<!-- Load Scripts -->
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