<?php
	// This script will connect us to our database
	$user = "root";
	//$pass = ""; //Windows
	$pass = "root"; //Mac
	$url = "localhost";
	$db = "db_";

	// Ticket to access our db
//$link = mysqli_connect($url, $user, $pass, $db); //Windows
	$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac

	//Check our connection if it fails
	if(mysqli_connect_errno()){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
