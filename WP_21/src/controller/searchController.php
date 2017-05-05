<?php
	
	function getProductTags($tag) {
		$delimiter = array(" ",",",".","'","\"","|","\\","/",";",":");
		$replace = str_replace($delimiter, $delimiter[0], $tag);
		$explode = explode($delimiter[0], $replace);
		return $explode;
	}
	
	function searchByProductName($dbhandle,$searchText, $start, $limit) {
		$query = "SELECT * FROM `products` WHERE `Name` LIKE '%".$searchText."%' LIMIT $start, $limit ";
		return mysqli_query($dbhandle, $query);
	}
	function getCountSearch($dbhandle,$searchText){
		$query = "SELECT COUNT(ID) AS Total FROM `products` WHERE `Name` LIKE '%".$searchText."%'";
		return mysqli_query($dbhandle, $query);
	}

?>