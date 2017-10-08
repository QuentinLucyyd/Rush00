<?php
	date_default_timezone_set("Africa/Windhoek");
	$user = "root";
	$pwd = "root";
	$host = "localhost";
	$database = "rush00";

	$con = mysqli_connect($host, $user, $pwd, $database);

	if (!$con)
		echo "Failed to Connect to Database";
?>