<?php
    session_start();

	// Unset all of the session variables
	$_SESSION = array();
	
	session_destroy();
	/*
	 * Change this pathing when the login client is pushed
	 */
	header("location: ../login.php");
?>