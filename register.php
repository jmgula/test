<?php

	require "init.php";

	$name = $_POST["user"];
	$username = $_POST["username"];
	$pass = $_POST["password"];

	$query = "insert into users values('$name',  '$username', '$pass');";

	if (mysqli_query($conn, $query)) {
		//echo "<br>Data Inserted";
	} else {
		//echo "<br>Data Rejected" . mysqli_error($conn);
	}

?>