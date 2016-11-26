<?php
	session_start();
	unset($_SESSION['check_log']);
	header("location:index.php");
?>