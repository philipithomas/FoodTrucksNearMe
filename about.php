<?php
session_start();
require_once('./inc/functions.inc');

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

<?php
	// this is where we drop in the Systematic Revenue code
	echo "<script>(function (){var url = window.location; var oImg = document.createElement(\"img\");oImg.setAttribute('src','http://app.systematicrevenue.com/TrackWebPage?ACID=41&URL=' + url);})(); </script>";
?>
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
          <a class="brand" href="#"><img src="/img/header/HOME.png"> Food Truck Dashboard</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="/home">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="/contact">Contact</a></li>
			</ul>
			<ul class="nav pull-right">
				
			  <li> 	<a href="https://twitter.com/foodtruckdash" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @FoodTruckDash</a>
				</li>
            </ul>

			
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  

          
         

    <div class="container">
		

	



    
           
<section id="about">
<div class="row"><div class="page-header"><h1>About Food Truck Dashboard </h1></div></div>
<div class="row"><div class="span8">
	<p>Food Truck Dashboard shows the latest updates from all of your cities food trucks. It pulls their latest tweets so you can know where they are, and it links to their websites and twitter pages. <br /> /><br />
		The website was founded as a product of <a href="http://sapientiamedia.com">Sapientia Media</a> by <a href="http://philipithomas.com">Philip I. Thomas</a> in 2012 as "Food Truck STL." The site has since expanded to multiple cities and continues to grow.<br /><br />
	If you own or operate a food truck and wish to be listed on this page, or if your listing is inaccurate, please <a href="/contact">contact us</a>. Listing on Food Truck Dashboard is free! <a href="/about#priority">Priority listings are available in each city</a><br /><br />
	Food Truck Dashboard and Sapientia Media are not associated with any food trucks. Provided menus and prices are provided for informational purposes and are not guaranteed to be correct. To report errors, please <a href="/contact">contact us</a>.
      </p>
</div>
<div class="span4">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FFood-Truck-Dashboard%2F423857744324807&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=128443697296661" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
	
	<div style="clear: both"></div>
	<a href="https://twitter.com/foodtruckdash" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @FoodTruckDash</a>
	<div style="clear:both"></div>

</div>
</div>
</section>
<section id="priority">
	<div class="row"><div class="page-header"><h1>Priority Listings </h1></div></div>
	<div class="row"><div class="span6">
		<p>Increase visitors to your truck, gain twitter followers, and contact more customers. For $100 / month, you can secure a priority listing on city page for Food Truck Dashboard. You will be on the first row of your city's dashboard, and you will gain a <span class="badge badge-important">Priority</span> badge next to your name. <br /><br />
			To learn more about priority listings, please use the contact form to the right.
	      </p>
	</div>
	<div class="span6">
		<iframe height="100%" allowtransparency="true" src="http://app.systematicrevenue.com/OnlineForm/form/21895311598/launch" frameborder="0" style="width:100%; border:none;" scrolling="no">
		</iframe>

	</div>
	</div>
	</section>
	
</section>
	

	





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