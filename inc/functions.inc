<?php
function dbOpen() {
	
	// Opens the ClearDB mysql connection. Pulls info from Heroku settings.
  $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    mysql_pconnect(
            $server = $url["host"],
            $username = $url["user"],
            $password = $url["pass"]);
            $db=substr($url["path"],1);

    mysql_select_db($db);
}

function footerText() {
	
	// Just the standardized footer text across the site
	
	echo '&copy; <a href="http://sapientiamedia.com">Sapientia Media LLC</a> 2012. A project by <a href="http://philipithomas.com">Philip I. Thomas</a>.';
}

function emailValidate($email) {
	//Validates an email address
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}
	return false;
}

function sanitize($string) {
	// Removes problematic characters
	return htmlspecialchars(trim(strip_tags($string)));
}



	?>
