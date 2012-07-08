<?php
session_start();

require_once('./inc/functions.inc');

$city= strtolower(sanitize($_GET['c']));

// First, we check if the city exists. If it does, then 
dbOpen();

$query="select * from city where short=\"".mysql_real_escape_string($city)."\"";
$cityResult=mysql_query($query);
mysql_close();

if (mysql_num_rows($cityResult)!=1) {
	// No city found
	// Redirect to 404
	session_destroy(); // delete session
	header("Location: /404");
	exit();
	
}


// Otherwise, pull the info from the city

$city = mysql_fetch_array($cityResult, MYSQL_ASSOC);
	$short=strtoupper($city['short']);
	$long=$city['full'];
	$twitter=$city['twitter'];
	$facebook=$city['facebook'];
	$alert=$city['alert'];
	$alertClass=$city['alertClass'];
	$alertMessage=$city['alertMessage'];
	
// Set the session to be the city
$_SESSION['city']=strtolower($short);
	
// Now we generage the city page

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Food Truck Dashboard - <?php echo $short;?></title>
    <meta name="description" content="The Dashboard of Food Trucks in <?php echo $long;?> ">
<meta name="viewport" content="user-scalable=no, width=device-width">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.google.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script language="javascript" src="/js/jquery.tweet.js" type="text/javascript"></script>
	<link href="/css/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/img/favicon.ico">
  </head>

  <body>
      <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img src="/img/header/<?php echo $short;?>.png"> Food Truck <?php echo $short;?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/home">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/contact">Contact</a></li>
			</ul>
			<ul class="nav pull-right">
				
			  <li> 	<a href="https://twitter.com/<?php echo $twitter;?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php echo $twitter; ?></a>
				</li>
            </ul>

			
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  

          
         

    <div class="container">
		

	<?php
	if ($alert) {
		// If the database is set to show an alert, show the alert.
		
		echo '<div class="row"><div class="span12"><div class="alert '.$alertClass.'"><div align="center">'.$alertMessage.'</div></div></div>';
	}


// Shows all of the truck widgets
showTrucks($short); 	
	


?>
    
           
<section id="about">
<div class="row"><div class="page-header"><h1>About Food Truck Dashboard <?php echo $short;?> </h1></div></div>
<div class="row"><div class="span8">
	<p>The Dashboard of Food Trucks in <?php echo $long;?>. It pulls the latest tweets from the twitter pages of local food trucks so you can know where they are, and it links to their websites and twitter pages. The <a href="http://twitter.com/<?php echo $twitter;?>">@<?php echo $twitter;?> twitter account</a> combines the tweets of all of the food trucks in <?php $long;?> to make keeping up with the latest culinary hotspots easy. <br /><br />
	If you own or operate a food truck and wish to be listed on this page, or if your listing is inaccurate, please <a href="/contact">contact us</a>. Listing on Food Truck Dashboard is free!<br /><br />
	Food Truck Dashboard and Sapientia Media are not associated with any food trucks. Provided menus and prices are provided for informational purposes and are not guaranteed to be correct. To report errors, please <a href="/contact">contact us</a>.
      </p>
</div>
<div class="span4">
	<?php echo $facebook;?>
	
	<div style="clear: both"></div>
	<a href="https://twitter.com/<?php echo $twitter;?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php echo $twitter;?></a>
	<div style="clear:both"></div>

</div>
</div>
	





      <footer><hr />
      <center>  <p><?php footerText();?></p></center>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
	<!-- Twitter follow button code -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </body>
</html>

<?php

	
























/**
* Creates a widget for each 
* city that shows their twitter account info and other stuff
*/
function widget($twitter,$name,$url,$menu,$description) {
		echo '<div class="span4">';
		
		// Title + twitter link
		echo "<h2><a href=\"http://twitter.com/$twitter\" target=\"_BLANK\"><img src=\"http://api.twitter.com/1/users/profile_image?screen_name=$twitter&size=normal\"> </a>$name</h2>"; 
		
		if (!empty($description)) { 
			// Show the description
			echo "<small><em>$description</em></small><br />";
		}
		
		if (!empty($menu)) { 
			
			// Show the menu
			
			// First the button
				echo '<a class="btn btn-info" data-toggle="modal" href="#'.$twitter.'Modal" >Menu</a> ';
			// Now the modal itself
				echo '<div class="modal hide" id="'.$twitter.'Modal">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal">×</button>
				    <h3>'.$name.' Menu</h3>
				  </div>
				  <div class="modal-body">
				    <p>'.$menu.'</p>
				  </div>
				  <div class="modal-footer">
				    <a href="#" class="btn" data-dismiss="modal">Close</a>
				  </div>
				</div>';
			}
			
		// Link to the site
		if (!empty($url)) {echo '<a class="btn" href="'.$url.'" target="_blank">Site</a>';}
		
		// Link to the twitter
		echo ' <a href="https://twitter.com/'.$twitter.'" class="twitter-follow-button" data-show-count="false">Follow @'.$twitter.'</a>';
	
		// Set up the well for the tweets
		echo '<div class="well">';

		twitterJquery($twitter); // Pull the tweets
		
		
		// Link to the twitter profile
		echo '<div class="pull-right"><a href="http://twitter.com/'.$twitter.'" target="_blank" >See all tweets . . .</a></div>';
		echo "</div>"; // end well
	
	
	
		echo '</div>'; // end span4
	
	
	
}

/**
* This primes the jquery pulling of tweets for a username
**/
function twitterJquery($twitter) {
	
	// This primes teh jquery pulling of tweets for a particular twitter user. 
	
	// It is used in conjunction with the jquery.tweet.js
	
	$numberOfTweets=3;
	echo '<script type=\'text/javascript\'>
    jQuery(function($){
	        $("#'.$twitter.'").tweet({
	         
	          username: "'.$twitter.'",
	          count: '.$numberOfTweets.',
	          loading_text: "<img src=\"/img/loading.gif\">"
	        });
	      });
    </script>
    <div id=\''.$twitter.'\' class="query"></div>';
}

/**
* This function takes a short code for a city, 
* then pulls all of the trucks from the database 
* from that city. It creates the rows and calls
* the widget function. 
**/
function showTrucks($short) {
	// First build the query
	$query= "select * from truck where city = \"$short\" order by premium desc, name asc";// We need to update this to correctly sort
	
	// Next pull the info
	dbOpen();
	$result=mysql_query($query);
	mysql_close();
	
	// Let's see how many trucks we have
	$num=mysql_num_rows($result);
	
	// Before we loop through each truck, we set a counter 
	// so that we know how many trucks there are in a row.
	$i=0;
	
	// We start the first row
	echo '<div class="row">';
	// Now we loop through and create each truck
	while ($truck = mysql_fetch_assoc($result)) {
		
		if ($i%3==0 && $i!=0) {
			// 3 trucks per row, so if the truck is a multiple
			// of three (%3 is modulus / leftover), then 
			// we create a new row. 
			echo '</div><div class="row">';
		}
		++$i;
		
		
		// Increase i by one for the next loop
		
		// Now we display a truck widget
		widget($truck['twitter'],$truck['name'],$truck['url'],$truck['menu'],$truck['description']);
		
		// Then that's it!
			
		
	}
	
	// Now we need to know if we need some "padding" in the last
	// row - i.e. if there is one truck in the last row, we
	// need to add two blank "widgets" that are just blank
	// span tags
	
	// Note that each widget is "span4" wide and 
	// twitter bootstrap uses 12 spans for a row
	
	$lastRow=$num%3; // Take the modulus - gives the number of trucks in last row
	if ($lastRow==0) {
		// No action needed - we ended nicely
	} 
	elseif ($lastRow==1) {
		// We need two trucks worth 
		echo '<div class="span8"></div>';
	}
	elseif ($lastRow==2) {
		// We need one trucks worth 
		echo '<div class="span4"></div>';
	}
	else {
		// fuck, we shouldn't have this
		exit();
	}
	
	
	// And now we finish the last row with a final  closing div 
	// tag that ends the row
	echo '</div>';
	
	// And that's it folks!
	
}



?>


