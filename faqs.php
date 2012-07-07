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

  <body  data-spy="scroll" >
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