<?php 
	function showCategory($dbhandle) {
		$query = "SELECT * FROM `categories`";
		return mysqli_query($dbhandle, $query);
	}
	function getWindow($dbhandle){
		$query = "SELECT * FROM `products` WHERE `OS` = 'Window'  ";
		return mysqli_query($dbhandle, $query);
	}
	function getMacOS($dbhandle){
		$query = "SELECT * FROM `products` WHERE `OS` = 'Mac OS'  ";
		return mysqli_query($dbhandle, $query);
	}
	function getiOS($dbhandle){
		$query = "SELECT * FROM `products` WHERE `OS` = 'iOS'  ";
		return mysqli_query($dbhandle, $query);
	}
	function getAndroid($dbhandle){
		$query = "SELECT * FROM `products` WHERE `OS` = 'Android'  ";
		return mysqli_query($dbhandle, $query);
	}
	function getDataById($id,$dbhandle){
		$query = "SELECT * FROM `products` WHERE `ID` = $id  ";
		return mysqli_query($dbhandle, $query);
	}
	
	
?>