<?php
	session_start();
	
	$username1 ="";
	$email = "";
	$pass = "";
	
	$username1 = $_POST["username"];
	$email = $_POST["email"];
	$pass = $_POST["pass_signup"];
	
	if(isset($_POST['username']) === true && empty($_POST['username'])== false){
		require "connectdatabase.php";
		$query = "INSERT INTO users (Name, Email, Password) VALUES ('$username1', '$email', '$pass')";
		if(mysqli_query($dbhandle,$query)){
			$_SESSION['use'] = $username1;
			$_SESSION['check_log'] = true;
			echo "Sign up is successful";
		}
		else
			echo "Error: " . $query . "<br>" . mysqli_error($dbhandle);
	}
?>
