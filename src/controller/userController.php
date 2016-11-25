<?php
	// $username1 = $email = $pass = "";
	$username1 ="";
	$email = "";
	$pass = "";
	//$user = $pass_login = "";

	$username1 = $_POST["username"];
	$email = $_POST["email"];
	$pass = $_POST["pass_signup"];
	// $user = $_POST['user'];
	// $pass_login = $_POST['pass_login'];

	if(isset($_POST['username']) === true && empty($_POST['username'])== false){
		require "connectdatabase.php";
		$query = "INSERT INTO users (Name, Email, Password) VALUES ('$username1', '$email', '$pass')";
		if(mysqli_query($dbhandle,$query))
			echo "Sign up is successful";
		else
			echo "Error: " . $query . "<br>" . mysqli_error($dbhandle);
	}
?>
