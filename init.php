<?php

	$db = "androiddb";
	$user = "root";
	$pass = "";
	$server = "localhost";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn) {
		//echo "Cannot Connect to Database " . mysqli_connect_error();
	}else {
		//echo "Connected to Database";
	}

?>