<?php
/* This is the landing page for the website. If users have already gone to a city, they are directed to that city. Otherwise, they are directed to the home page where they can select a new city.
*/
if (isset($_SESSION['city'])) {
	
	// If they already have a city. 
	// Mod rewrite redirects to city.php
	header("Location: /city/".strtolower($_SESSION['city']));
	exit;
}
else {
	// If no city, go to home page to select a city
	header("Location: /home");
	exit;
	
}
?>