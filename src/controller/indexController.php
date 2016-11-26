<?php 
	function showCategory($dbhandle) {
		$query = "SELECT * FROM `categories`";
		return mysqli_query($dbhandle, $query);
	}
	function getDataByOS($dbhandle, $OS){
		$query = "SELECT * FROM `products` WHERE `OS` = '$OS'   ";
		return mysqli_query($dbhandle, $query);
	}
	function getDataByTag($dbhandle, $Tag){
		$query = "SELECT * FROM `products` WHERE `Tag` = '$Tag' ";
		return mysqli_query($dbhandle, $query);
	}
	
	function getDataByOSLimit($dbhandle, $OS, $start, $limit){
		$query = "SELECT * FROM `products` WHERE `OS` = '$OS' LIMIT $start, $limit  ";
		return mysqli_query($dbhandle, $query);
	}
	
	function getDataByTagLimit($dbhandle, $Tag, $start, $limit){
		$query = "SELECT * FROM `products` WHERE `Tag` = '$Tag'  LIMIT $start, $limit ";
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
	function getCountOS($dbhandle,$val){
		$query = "SELECT COUNT(ID) AS Total FROM `products` WHERE `OS`='$val' ";
		return mysqli_query($dbhandle, $query);
	}
	function getCountCate($dbhandle,$val){
		$query = "SELECT COUNT(ID) AS Total FROM `products` WHERE `Tag`='$val' ";
		return mysqli_query($dbhandle, $query);
	}
?>