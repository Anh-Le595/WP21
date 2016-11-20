<?php
	
	function getProductTags($tag) {
		$delimiter = array(" ",",",".","'","\"","|","\\","/",";",":");
		$replace = str_replace($delimiter, $delimiter[0], $tag);
		$explode = explode($delimiter[0], $replace);
		return $explode;
	}
	
	function searchByProductName($dbhandle,$searchText) {
		$query = "SELECT * FROM `products` WHERE `Name` LIKE '%".$searchText."%'";
		return mysqli_query($dbhandle, $query);
	}

?>