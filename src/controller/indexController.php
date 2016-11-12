<?php 
	function showCategory($dbhandle) {
		$query = "SELECT * FROM `categories`";
		return mysqli_query($dbhandle, $query);
	}
	// function getProductsTable($dbhandle) {
	// 	$query = "SELECT * FROM `products`";
	// 	return mysqli_query($dbhandle, $query);
	// }
?>