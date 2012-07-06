<?php 
// Adapted from mloberg Launch Page on Github

header('Content-type: text/css; charset: UTF-8');

$logo = '/img/home/selectLogo.png';
$background_img = '/img/home/background.jpg';
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
@import url(/css/reset.css);

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
	font-size: 100%;
}
<?php endif;?>
body {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 18px;
  color: #333333;
  background-color: #ffffff;
}
a {
  color: #0088cc;
  text-decoration: none;
}
a:hover {
  color: #005580;
  text-decoration: underline;
}
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
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  font-size: 13px;
	  line-height: 18px;
	  color: #333333;
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
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  font-size: 13px;
	  line-height: 18px;
	  color: #333333;
}


label,
input,
button,
select,
textarea {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: normal;
  line-height: 18px;
}
.btn {
  display: inline-block;
  padding: 4px 10px 4px;
  font-size: 13px;
  line-height: 18px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  background-color: #fafafa;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-repeat: no-repeat;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  border: 1px solid #ccc;
  border-bottom-color: #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  cursor: pointer;
  *margin-left: .3em;
}
.btn:first-child {
  *margin-left: 0;
}
.btn:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -ms-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}
.btn:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn.active, .btn:active {
  background-image: none;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  background-color: #e6e6e6;
  background-color: #d9d9d9 \9;
  color: rgba(0, 0, 0, 0.5);
  outline: 0;
}
.btn.disabled, .btn[disabled] {
  cursor: default;
  background-image: none;
  background-color: #e6e6e6;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.btn-large {
  padding: 9px 14px;
  font-size: 15px;
  line-height: normal;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.btn-large .icon {
  margin-top: 1px;
}
.btn-small {
  padding: 5px 9px;
  font-size: 11px;
  line-height: 16px;
}
.btn-small .icon {
  margin-top: -1px;
}
.btn-primary,
.btn-primary:hover,
.btn-warning,
.btn-warning:hover,
.btn-danger,
.btn-danger:hover,
.btn-success,
.btn-success:hover,
.btn-info,
.btn-info:hover {
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  color: #ffffff;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active {
  color: rgba(255, 255, 255, 0.75);
}
.btn-primary {
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(top, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  background-color: #0044cc;
}
.btn-primary:active, .btn-primary.active {
  background-color: #003399 \9;
}
.btn-warning {
  background-color: #faa732;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -ms-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(top, #fbb450, #f89406);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89406', GradientType=0);
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
  background-color: #f89406;
}
.btn-warning:active, .btn-warning.active {
  background-color: #c67605 \9;
}
.btn-danger {
  background-color: #da4f49;
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -ms-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(top, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#bd362f', GradientType=0);
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
  background-color: #bd362f;
}
.btn-danger:active, .btn-danger.active {
  background-color: #942a25 \9;
}
.btn-success {
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -ms-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(top, #62c462, #51a351);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462', endColorstr='#51a351', GradientType=0);
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
  background-color: #51a351;
}
.btn-success:active, .btn-success.active {
  background-color: #408140 \9;
}
.btn-info {
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -ms-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(top, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#2f96b4', GradientType=0);
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
  background-color: #2f96b4;
}
.btn-info:active, .btn-info.active {
  background-color: #24748c \9;
}
button.btn, input[type="submit"].btn {
  *padding-top: 2px;
  *padding-bottom: 2px;
}
button.btn::-moz-focus-inner, input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button.btn.large, input[type="submit"].btn.large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}
button.btn.small, input[type="submit"].btn.small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}
.btn-group {
  position: relative;
  *zoom: 1;
  *margin-left: .3em;
}
.btn-group:before, .btn-group:after {
  display: table;
  content: "";
}
.btn-group:after {
  clear: both;
}
.btn-group:first-child {
  *margin-left: 0;
}
.btn-group + .btn-group {
  margin-left: 5px;
}
.btn-toolbar {
  margin-top: 9px;
  margin-bottom: 9px;
}
.btn-toolbar .btn-group {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}
.btn-group .btn {
  position: relative;
  float: left;
  margin-left: -1px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.btn-group .btn:first-child {
  margin-left: 0;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.btn-group .btn:last-child, .btn-group .dropdown-toggle {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
}
.btn-group .btn.large:first-child {
  margin-left: 0;
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-left-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  border-bottom-left-radius: 6px;
}
.btn-group .btn.large:last-child, .btn-group .large.dropdown-toggle {
  -webkit-border-top-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-bottomright: 6px;
  border-bottom-right-radius: 6px;
}
.btn-group .btn:hover,
.btn-group .btn:focus,
.btn-group .btn:active,
.btn-group .btn.active {
  z-index: 2;
}
.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
  -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  *padding-top: 5px;
  *padding-bottom: 5px;
}
.btn-group.open {
  *z-index: 1000;
}
.btn-group.open .dropdown-menu {
  display: block;
  margin-top: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.btn-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn .caret {
  margin-top: 7px;
  margin-left: 0;
}
.btn:hover .caret, .open.btn-group .caret {
  opacity: 1;
  filter: alpha(opacity=100);
}
.btn-primary .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret {
  border-top-color: #ffffff;
  opacity: 0.75;
  filter: alpha(opacity=75);
}
.btn-small .caret {
  margin-top: 4px;
}