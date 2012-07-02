<?php
/*
	This file includes the functions that deal with users - logging them in, retrieving their data, etc
	
	*/
function login($email,$password) {
	// TODO: Logs in a user. Returns true if correct combination and logs the user in.
	return false;
	
	setSession();
	
	}
	
function validate($email,$password) {
	// Checks if email and password are correct. If so, returns user id. 
	dbOpen();
	
	$email=mysql_real_escape_string(sanitizeCaps($email));
	$password = mysql_real_escape_string(	pw(sanitize($password)) );  // Don't forget to hash it accordingly!
	
	$query="select id from user where ( email = \"".$email ."\" && password= \"".$password."\" )";

	$result=mysql_query($query);
	mysql_close();
	if (mysql_num_rows($result)!=1) { return false;}
	else {
	 		return mysql_result($result, 0);
	}
}

function existUser($email) {
		// This function checks to see if there is already a user account associated with an email address
		dbOpen();
		$email=mysql_real_escape_string($email);

		$query="select id from user where email=\"".$email."\"";

		$result=mysql_query($query);
		mysql_close();
		if (mysql_num_rows($result) ==1) {
			return true;
				}
		else
			{
				return false;
			}


	}
function loggedIn() {
	// Checks to see if a user is logged in based on their 'id' session variable.
	if (isset($_SESSION['id'])) {
	return true;
	}
	return false;
}
function setSession($id) {
	// Sets up a user session

	dbOpen();
	
	$id=mysql_real_escape_string($id);
	
	$query="select email, name, type from user where id = \"".$id."\"";
	$groupQuery="select name, id from groups where ownerID=\"".$id."\"";
	
	$result=mysql_query($query);
	$groupResult=mysql_query($groupQuery);
	mysql_close();
	if (mysql_num_rows($result) !=1) { return false;}
	
	/* IMPORTANT:
	If adding support for MULTIPLE GROUPS per user, below down must be modified!
	*/
	if (mysql_num_rows($groupResult) !=1) { echo "Group Number Error; Contact an administrator"; return false;}
	
	
	// Turn it into associative arrays
	$user = mysql_fetch_array($result, MYSQL_ASSOC);
	$group = mysql_fetch_array($groupResult, MYSQL_ASSOC);
	
	// and set the session
	$_SESSION['id']=$id;
	$_SESSION['email']=$user['email'];
	$_SESSION['name']=$user['name'];
	$_SESSION['type']=$user['type']; // TODO: Query payment gatway for current status
	$_SESSION['group']=$group['name'];
	$_SESSION['groupId']=$group['id'];
	return true;
}

function logout() {
	// logs out a user
	session_unset();
	return true;
	
}
?>