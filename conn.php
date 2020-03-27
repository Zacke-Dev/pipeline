<?php
	$servername = "localhost";
	$username = "redacted";
	$password = "redacted";
	$dbname = "redacted";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){

		die("Error: Failed to connect to database!");

	}

?>
