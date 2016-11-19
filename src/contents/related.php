<?php $id = $_GET['id'];
$productDatas=getDataById($id,$dbhandle);
$product = mysqli_fetch_array($productDatas);
$tag = $product['Tag'];
$items = getDataByTag($tag,$dbhandle);

?>
<div id="right">
	<div class="row" id="related"><h5>LIÊN QUAN</h5></div>
     
	<div class="row">
    <?php 
	for($i = 1; $i<=6;$i++) {$item = mysqli_fetch_array($items);
	?>
		<a href="?contents=view&&id=<?php echo $item['ID']?>">
        <div class="row col-md-12 col-sm-4 col-xs-6 related-item">
			<div class="col-lg-4 col-md-12"><img class="product-logo" src="<?php echo $item['Logo'] ?>" alt=""></div>
				<div class="col-lg-8 col-md-12 related-infor">
				<h5><?php echo $item['Name'] ?></h5>
				<p style="display:inline;"><?php echo $item['Rate'] ?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
    </a>
    <?php } ?>
</div>