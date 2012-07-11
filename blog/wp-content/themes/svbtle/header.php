<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
		<title><?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
?>

<?php add_action( 'wp_enqueue_scripts', 'main_css' );  ?>
<?php wp_head(); ?>
<?php $options = get_option ( 'svbtle_options' ); ?>
<?php echo $options['google_analytics'];?>
<?php 
if( isset( $options['color'] ) && '' != $options['color'] ) {
	$color = $options['color'];
} else {
	$color = '#a1a1a1';
} 
?>

<style type="text/css" media="screen">
	a:hover, article .entry-title a:hover, article .entry-title a:hover{color: <?php echo $color ?>}
	.links a:hover, article .entry-content blockquote {border-color: <?php echo $color ?>}
	.home .navigation a, a.back-to-blog{ color: <?php echo $color ?>; border-color: <?php echo $color ?>;}
	.home .navigation a:hover, a.back-to-blog:hover,  section#cover,figure#user_logo div.logo{background-color: <?php echo $color ?>;}
</style>


	<script src="<?= get_template_directory_uri() ?>/js/html5.js"></script>

	</head>
	<body <?php body_class(); ?>>
	
	<div id="wrap">
		
		<header role="banner">
			<div align="center" >
			
			
		 	<figure id="user_logo">
			    <a href="<?php echo site_url(); ?>">
			      <div class="logo">&nbsp;</div>
			    </a>
			  </figure>
		
			<br />
			<a href="http://foodtrucksnearme.com/blog" title="Food Trucks Near Me Blog" rel="home"><h2>Food Trucks Near Me</h2><h3>Blog</h3></a>

		
			
			<?php 
			ob_start(); 
			get_option('home');
			$site_url = ob_get_clean(); 
			?>
			
			<div class="links">
				
						<p><a href="/home">Cities</a> </p>
						<p><a href="/about">About</a> </p>
						
			
					<p><a target="_blank" href="http://twitter.com/nearfoodtrucks">@NearFoodTrucks</a> </p>
					<p><a href="https://www.facebook.com/pages/Food-Trucks-Near-Me/380948325292770">Facebook</a> </p>
					
			</div><!-- .links -->
			
			</div> <!-- center -->
		</header>
		
		<section id="content" role="main">
	

