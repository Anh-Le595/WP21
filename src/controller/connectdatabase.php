<?php
	$db_name = "db_soft_share";
	$username = "admin";
	$password = "123";
	$hostname = "localhost";

	$dbhandle = mysqli_connect($hostname, $username, $password)
		  	or die("Unable to connect to MySQL");
	$selected = mysqli_select_db($dbhandle, $db_name)
	  	or die("Could not select db_soft_share");

	mysqli_set_charset($dbhandle, 'UTF8');
?>