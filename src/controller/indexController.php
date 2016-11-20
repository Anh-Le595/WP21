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
	function getRank_down($dbhandle){
		$query = "SELECT * FROM `products` ORDER BY `NumberDownload` DESC ";
		return mysqli_query($dbhandle, $query);
	}
	function getRank_rate($dbhandle){
		$query = "SELECT * FROM `products` ORDER BY `Rate` DESC ";
		return mysqli_query($dbhandle, $query);
	}
	function getOffice($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'office' ";
		return mysqli_query($dbhandle, $query);
	}
	function getVirus($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'virus' ";
		return mysqli_query($dbhandle, $query);
	}
	function getStudy($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'study' ";
		return mysqli_query($dbhandle, $query);
	}
	function getMusic($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'music' ";
		return mysqli_query($dbhandle, $query);
	}
	function getMovie($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'movie' ";
		return mysqli_query($dbhandle, $query);
	}
	function getBrowser($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'browser' ";
		return mysqli_query($dbhandle, $query);
	}
	function getOthers($dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = 'others' ";
		return mysqli_query($dbhandle, $query);
	}
	function getDataByTag($tag,$dbhandle){
		$query = "SELECT * FROM `products` WHERE `Tag` = '$tag' ";
		return mysqli_query($dbhandle, $query);
	}
?>