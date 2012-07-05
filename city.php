<?php
echo $_GET['c'];

































function widget($twitter,$name,$url,$menu,$description) {
		echo '<div class="span4">';
		
		// Title + twitter link
		echo "<h2><a href=\"http://twitter.com/$twitter\" target=\"_BLANK\"><img src=\"http://api.twitter.com/1/users/profile_image?screen_name=$twitter&size=normal\"> </a>$name</h2>"; 
		
		if (!empty($description)){ 
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
	
	
	
		echo '</div>'; // end span3
	
	}
	
}

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




?>


