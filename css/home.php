<?php 
// Adapted from mloberg Launch Page on Github

header('Content-type: text/css; charset: UTF-8');

$logo = '/img/home/selectLogo.png';
$background_img = '/img/home/background.jpeg';
$background_pattern = false; // set to true if it is a pattern

$footer_color = '#fff';

$box_color = '#ffffff'; // must be 6 digit hex value
$box_opacity = '.8';
$round = '10';
$text_color = '#000';

// form
$button_color = '#bdbe1f';
$button_color_active = '#6a6406';
$button_text_color = '#000';
$error_color = '#f00';
$success_color = '#000';

// DO NOT EDIT 

list($width, $height, $type, $attr) = getimagesize($logo);
$hex = preg_replace('/^#/', '', $box_color);
$rgb = '';
$rgb = hexdec(substr($hex, 0, 2));
$rgb .= ', ' . hexdec(substr($hex, 2, 2));
$rgb .= ', ' . hexdec(substr($hex, 4, 2));





?>
@import url(reset.css);
@import url(http://fonts.googleapis.com/css?family=Josefin+Slab);
@import url(http://fonts.googleapis.com/css?family=Raleway:100);
@font-face{
	font-family: 'Museo';
	src: url('../fonts/museo300-regular-webfont.eot');
	src: url('../fonts/museo300-regular-webfont.eot?iefix') format('eot'),
		 url('../fonts/museo300-regular-webfont.woff') format('woff'),
		 url('../fonts/museo300-regular-webfont.ttf') format('truetype'),
		 url('../fonts/museo300-regular-webfont.svg#webfontzR9Kk5PT') format('svg');
	font-weight: normal;
	font-style: normal;
}
<?php if($background_pattern):?>
html{
	background: url(<?php echo '../'.$background_img;?>);
	font-size: 62.5%;
}
<?php else:?>
html{
	background: url(<?php echo '../'.$background_img;?>) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	font-size: 62.5%;
}
<?php endif;?>
#box{
	width: 400px;
	background: rgb(<?php echo $rgb;?>);
	background: rgba(<?php echo $rgb.', '.$box_opacity;?>);
	margin: 100px auto 0;
	padding: 10px;
	-moz-border-radius: <?php echo $round;?>px;
	border-radius: <?php echo $round;?>px;
}
#box img{
	display: block;
	margin: 0 auto;
}
#content{
	color: <?php echo $text_color;?>;
	margin-top: 15px;
	padding: 0 5px;
	font-size: 1.6em;
	font-family: sans-serif;
	font-family: "Museo", sans-serif;
}
.signup{
	font-style: italic;
	margin: 20px 0 5px 10px;
	font-size: 80%;
}
form{
	text-align: center;
	margin-top: 5px;
}
input[type=text]{
	width: 70%;
	height: 40px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #000;
	padding-left: 5px;
	font-size: 1.4em;
}
input[type=submit]{
	width: 20%;
	margin-left: 10px;
	height: 40px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border: none;
	background-color: <?php echo $button_color;?>;
	color: <?php echo $button_text_color;?>;
	font-size: 1.4em;
	font-family: "Raleway", sans-serif;
}
input[type=submit]{
	cursor: pointer;
}
input[type=submit]:active{
	background-color: <?php echo $button_color_active;?>;
}
#resp{
	margin: 10px 0;
	font-size: 1.6em;
	min-height: 20px;
	text-align: center;
}
.error{
	color: <?php echo $error_color;?>;
}
.success{
	color: <?php echo $success_color;?>;
}
#social{
	text-align: center;
}
#social img{
	display: inline;
	padding: 5px;
}
footer{
	position: absolute;
	bottom: 10px;
	right: 10px;
}
footer, footer a{
	color: <?php echo $footer_color;?>;
	font-family: 'Museo', serif;
	font-size: 1.2em;
}