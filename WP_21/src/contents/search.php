<?php
	$searchText = "";
	if (isset($_GET["searchText"]))
		$searchText = $_GET["searchText"];
		
$result = getCountSearch($dbhandle,$searchText);		
$row = mysqli_fetch_assoc($result);
$total_records = $row['Total'];
$current_page = isset($_GET['page']) ? $_GET['page']:1;
$limit = 5;
$total_page = ceil($total_records/$limit);

if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
$start = ($current_page - 1) * $limit;

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
	$productNames = searchByProductName($dbhandle,$searchText,$start,$limit);
	while ($product = mysqli_fetch_assoc($productNames)) {
		

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
	} 
} ?>

<!-- separate pages -->
<ul class="paging">
	 <?php
				 	if ($current_page > 1 && $total_page > 1){
						echo'<li><a href="?contents=search&&searchText='.$searchText.'&&page='.($current_page - 1).'" class="btn btn-default">&larr;</a</li>';
					}
					
					for ($i = 1; $i <= $total_page;$i++){
						if($i == $current_page){
							echo '<li><button class="btn btn-default active">'.$i.'</button></li>';
						}else{
							echo '<li><a a href="?contents=search&&searchText='.$searchText.'&&page='.$i.'" class="btn btn-default">'.$i.'</a></li>';
						}
					}
					if($current_page < $total_page && $total_page > 1){
						 echo '<li><a href="?contents=search&&searchText='.$searchText.'&&page='.($current_page+1).'" class="btn btn-default" >&rarr;</a></li> ';
					}
				  ?>
</ul>