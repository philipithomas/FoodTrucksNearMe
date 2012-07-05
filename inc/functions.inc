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

function footerText() {
	echo '&copy; <a href="http://sapientiamedia.com">Sapientia Media LLC</a> 2012. A project by <a href="http://philipithomas.com">Philip I. Thomas</a>.';
}
	?>
