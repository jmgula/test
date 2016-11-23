<?php

	$db = "sql6145823";
	$user = "sql6145823";
	$pass = "4kx7btvx5V";
	$server = "sql6.freemysqlhosting.net";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn) {
		//echo "Cannot Connect to Database " . mysqli_connect_error();
	}else {
		//echo "Connected to Database";
	}

?>
