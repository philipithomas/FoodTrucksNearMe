<?php
session_start();
require_once('./inc/functions.inc');


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
	<img src="/img/home/selectLogo.png" alt="Select your City:" <?php echo $attr;?> />
	<div id="content">
	<!--	<p><h2>Select your City:</h2></p> -->
	
	</div>
	
	<div id="resp">
		<?php
		// Now we select the cities from the database
		// to create the buttons
		$query= "select short, full FROM city ORDER BY full DESC"; // we may need to tweak this query
		dbOpen();
		$result=mysql_query($query);
		mysql_close();
		
		// Now we loop through and create each city
		while ($city = mysql_fetch_assoc($result)) {
			// Create a button for each city
			echo '<a href="/city/'.strtolower($city['short']).'" class="btn btn-primary btn-large">'.$city['full'].'</a><br /><br />';
		}
		// And now we should have all the cities
		?>
	
		
	</div>
	<hr />
	<div id="social">
		<a href="http://twitter.com/foodtruckdash" target="_BLANK"><img src="/img/home/twitter.png" alt="Twitter" width="32" height="32" /></a>
		<a href="http://www.facebook.com/pages/Food-Truck-Dashboard/423857744324807" target="_BLANK"><img src="/img/home/facebook.png" alt="Facebook" width="32" height="32" /></a>
		<a href="/blog"><img src="/img/home/blogger.png" alt="Blog" width="32" height="32" /></a>
		<a href="/about"><img src="img/home/website.png" alt="Website" width="32" height="32" /></a>
	</div>
</div>
<footer> 
 <?php footerText();?> 	<a href="http://www.flickr.com/photos/mastermaq/5875801264/">Background credit</a>.gi
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
</body>
</html>