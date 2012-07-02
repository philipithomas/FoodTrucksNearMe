<?php
function dbOpen() {
  $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    mysql_pconnect(
            $server = $url["host"],
            $username = $url["user"],
            $password = $url["pass"]);
            $db=substr($url["path"],1);

    mysql_select_db($db);
}

function alertError($title,$message) {
	echo "<div class=\"alert alert-error\">
	  <h4 class=\"alert-heading\">".$title."</h4>
	  ".$message."
	</div>";
}

function truck($twitter) {
	// This function takes the twitter handle and returns the data from my database. 
	// Next step is querying the database to get this.
	
	$query="select * from trucks where twitter = \"".strtolower($twitter)."\"";
	
	dbOpen();
	$result=mysql_query($query);
	mysql_close();
	if (mysql_num_rows($result) == 0) {
		// No results found. Better throw an error. 
		echo '<div class="span3">';
		
		alertError("Database Error","The twitter account $twitter could not be located");
		
		echo '</div>';
	}
	else { 
		$result = mysql_fetch_array($result, MYSQL_ASSOC);
		$name=$result['name'];
		$url=$result['url'];
		$menu=$result['menu'];	
		$description=$result['description'];
		
		echo '<div class="span4">';
		echo "<h2><a href=\"http://twitter.com/$twitter\" target=\"_BLANK\"><img src=\"http://api.twitter.com/1/users/profile_image?screen_name=$twitter&size=normal\"> </a>$name</h2>";
		if (!empty($description)){ echo "<small><em>$description</em></small><br />";}
		
			if (!empty($menu)) { 
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
		if (!empty($url)) {echo '<a class="btn" href="'.$url.'" target="_blank">Site</a>';}
		echo ' <a href="https://twitter.com/'.$twitter.'" class="twitter-follow-button" data-show-count="false">Follow @'.$twitter.'</a>';
	
		echo '<div class="well">';

		twitterJquery($twitter);
		echo '<div class="pull-right"><a href="http://twitter.com/'.$twitter.'" target="_blank" >See all tweets . . .</a></div>';
		echo "</div>"; // end well
	
	
	
		echo '</div>'; // end span3
	
	}
}

function twitterJquery($twitter) {
	echo '<script type=\'text/javascript\'>
    jQuery(function($){
	        $("#'.$twitter.'").tweet({
	         
	          username: "'.$twitter.'",
	          count: 3,
	          loading_text: "<img src=\"/img/loading.gif\">"
	        });
	      });
    </script>
    <div id=\''.$twitter.'\' class="query"></div>';
}

	?>
