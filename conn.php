<?php
	$servername = "localhost";
	$username = "schosting_adminZack";
	$password = "Pap3rtra1lzgoal!";
	$dbname = "schosting_db_modal";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){

		die("Error: Failed to connect to database!");

	}

?>