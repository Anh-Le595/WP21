<?php
	$searchText = "";
	if (isset($_GET["searchText"]))
		$searchText = $_GET["searchText"];

?>
<div class="row search">
	<input type="text" id="searchbox" placeholder="Tìm kiếm phần mềm..." value="<?php echo $searchText; ?>">
	<button type="submit" id="btn-search">TÌM</button><br>
	<div class="sort">
		<button id="new">Cập nhật mới nhất</button>
		<button id="az">Thứ tự A-Z</button>
		<button id="evaluate">Đánh giá cao nhất</button>
	</div>
</div>

<!-- =====================================================================
==========================   PRODUCT  ====================================
======================================================================== -->
<?php
if ($searchText != '') {
	$productNames = searchByProductName($dbhandle,$searchText);
	$count = 1;
	$product = mysqli_fetch_array($productNames);
	while (true) {
		

?>
<div class="row product-item">
	<div class="col-md-12">
		<div class="col-sm-8 product-content">
			<img class="product-logo" src="<?php echo $product['Logo'] ?>" alt="">
			<div class="product-information">
				<h5><?php echo $product['Name'] ?></h5>
				<div class="rating">
					<span><?php echo $product['Rate'] ?></span>

					<img class="star" src="image/star.svg" alt="">
				</div>
				<p style="display:inline;">
					Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['Company'] ?><br>
					Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['Version'] ?><br>
					Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['size'] ?><br>
					Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['UpdateTime'] ?><br>
					Xem thêm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<ul class="inf" style="display:inline">
					<?php 
					$tags = getProductTags($product['Tag']);
					for ($i=0; $i < count($tags); $i++) { 
					 	if (trim($tags[$i]) == '') continue;
					?>
						<li><a href="?contents=search&searchText=<?php echo trim($tags[$i]) ?>"><?php echo $tags[$i] ?></a></li>
					<?php 
					}
					?>
				</ul>
				<div>
					<img src="image/window.svg" alt="" class="product-icon">
					<img src="image/apple.svg" alt="" class="product-icon">
				</div>
			</div>
		</div>
		<div class="col-sm-4 product-download">
			<button class="btn-download">DOWNLOAD</button>
		</div>
		</div>
</div>
<?php
		$count++;
		if ($count > 6) {
			break;
		}
		$product = mysqli_fetch_array($productNames);
		if (!$product)
			break;
	}
}
?>

<!-- separate pages -->
<ul class="paging">
	<li><button id="btnPrev">&larr;</button></li>
	<li><button>1</button></li>
	<li><button>2</button></li>
	<li><button>3</button></li>
	<li><button id="btnNext">&rarr;</button></li>
</ul>