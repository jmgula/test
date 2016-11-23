<?php
	
	require "init.php";

	$username = "jm";
	$pass = "asd";

	$query = "select name from users where username like '$username' and password like '$pass';";

	$result = mysqli_query($conn , $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$name = $row["name"];

		echo "<br>Welcome " . $name;
	} else {
		echo "No results";
	}

?>