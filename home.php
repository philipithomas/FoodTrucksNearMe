<?php
// redirected here from /home via .htaccess

// This file will use the landing page on github




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Food Truck Dashboard - Select a City</title>
	<link rel="stylesheet" href="css/home.php" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div id="box">
	<img src="/img/home/selectLogo.png" alt="logo" <?php echo $attr;?> />
	<div id="content">
		<p>Select your City</p>
		<p class="signup">This is signup text</p>
	</div>
	
	<div id="resp">
		<ul>
			<li>City 1</li>
			<li>City 2</li>
		</ul>
		
	</div>
	<div id="social">
		<a href="http://twitter.com/foodtruckdash" target="_BLANK"><img src="/img/home/twitter.png" alt="Twitter" width="32" height="32" /></a>
		<a href="http://www.facebook.com/pages/Food-Truck-Dashboard/423857744324807" target="_BLANK"><img src="/img/home/facebook.png" alt="Facebook" width="32" height="32" /></a>
		<a href="/blog"><img src="/img/home/blogger.png" alt="Blog" width="32" height="32" /></a>
		<a href="/about"><img src="img/website.png" alt="Website" width="32" height="32" /></a>
	</div>
</div>
<footer> 
	<a href="http://www.flickr.com/photos/mastermaq/5875801264/">Background image licensed under Creative Commons</a>.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
</body>
</html>