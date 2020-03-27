<?php
	$servername = "localhost";
	$username = "redacted";
	$password = "redacted";
	$dbname = "redacted";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (mysqli_query($conn, $sql)) {
		header("Location: index.php");
	} else {
		echo "Error: " . mysqli_errno($conn) . "<br/>" . mysqli_error($conn) . "<br/>" . "<br/>";
		echo $sql;
	}

?>
