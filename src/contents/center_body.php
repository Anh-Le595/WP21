<script type="text/javascript">
	function demo() {
		window.location = "?contents=download";
	}
</script>

<div id="slideshow" class="row">
	<div id="left-card" class="col-xs-1">
		<div>
			<img id="toleft" class="arrow" src="../image/arrow.svg" alt="">
		</div>
	</div>
	<div id="center-card" class="col-xs-10">
		<div class="row">
			<h2 class="header-slideitem">AVAST FREE ANTIVIRUS</h2>
			<h2 class="header-slideitem">AVIRA ANTIVIRUS</h2>
			<h2 class="header-slideitem">AVG FREE ANTIVIRUS</h2>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<!-- ======================================================================= -->
				<img src="../image/logo_avast.jpg" alt="" class="product-logo-big image-slideitem">
				<img src="../image/logo_avira.png" alt="" class="product-logo-big image-slideitem">
				<img src="../image/logo_avg.jpg" alt="" class="product-logo-big image-slideitem">
			</div>
			<div class="col-sm-6" style="text-align:center;">
				<div class="star-group">
					<img class="star" src="../image/star.svg" alt="">
					<img class="star" src="../image/star.svg" alt="">
					<img class="star" src="../image/star.svg" alt="">
					<img class="star" src="../image/star.svg" alt="">
					<img class="star" src="../image/star.svg" alt="">
				</div>
				<p class="free">FREE</p>
				<button class="btn-download" name="btndownload" onclick="demo()" style="display:block;margin:20px auto;">DOWNLOAD</button>
			</div>
		</div>
		<div id="card-infor" class="row" style="margin-left:20px;">
			<div class="col-sm-6">
				<p style="display:inline;" class="infor1-slideitem">
					Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty 1<br>
					Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.0.0<br>
					Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100MB<br>
					Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25/09/2016<br>
				</p>
				<p style="display:inline;" class="infor1-slideitem">
					Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty 2<br>
					Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.0.0<br>
					Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200MB<br>
					Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12/10/2016<br>
				</p>
				<p style="display:inline;" class="infor1-slideitem">
					Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty 3<br>
					Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.0.0<br>
					Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300MB<br>
					Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12/10/2016<br>
				</p>
			</div>
			<div class="col-sm-6">
				<p style="display:inline;" class="infor2-slideitem">
					Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 lượt<br>
					Xem thêm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<p style="display:inline;" class="infor2-slideitem">
					Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 lượt<br>
					Xem thêm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<p style="display:inline;" class="infor2-slideitem">
					Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;300 lượt<br>
					Xem thêm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				<ul class="inf" style="display:inline">
					<li><a href="#">Window</a></li>
					<li><a href="#">Mac OS</a></li>
				</ul>
				<div>
					<img src="image/window.svg" alt="" class="product-icon">
					<img src="image/apple.svg" alt="" class="product-icon">
				</div>
			</div>
		</div>
	</div>
	<div id="right-card" class="col-xs-1">
		<div>
			<img id="toright" class="arrow" src="../image/arrow.svg" alt="">
		</div>
	</div>

	
</div>

<div class="row">
	<ul id="circle">
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
	</ul>
</div>

<script type="text/javascript" src="js/slideshow.js"></script>

<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="../image/window.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">Window</h2>
		</div>
	</div>


<?php 
$products_windows = getWindow($dbhandle);	 
?>
	<div class="row">
    <?php 
	for($i = 1; $i<=3;$i++) {$product_window = mysqli_fetch_array($products_windows);
	?>
		<a href="contents/view.php?id=<?php echo $product_window['ID'] ?> "><div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12">
            	<img class="product-logo" src=" <?php echo $product_window['Logo']?>" alt=""/>
            </div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_window['Name']?></h5>
				<p style="display:inline;"><?php echo $product_window['Rate'] ?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
     <?php } ?>
    <?php 
	for($i = 1; $i<=3;$i++) {$product_window = mysqli_fetch_array($products_windows);
	?>
		<a href="contents/view.php?id=<?php echo $product_window['ID'] ?> "><div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src=" <?php echo  $product_window['Logo']?>" alt=""></div>
			<div class="col-sm-8 col-xs-12">
				<h5><?php echo $product_window['Name']?></h5>
				<p style="display:inline;"><?php echo $product_window['Rate'] ?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
	</a>
       <?php } ?>
    </div>
    
	<div class="row">
		<div class="col-xs-6 software-item"></div>
		<div class="col-xs-6 software-item">
			<a href="contents/search.php" class="more">Xem thêm</a>
		</div>
	</div>
</div>


<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="../image/apple.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">MacOS</h2>
		</div>
	</div>
<?php $product_macs = getMacOS($dbhandle) ?>
	<div class="row">
    <?php 
	for($i = 1; $i<=3;$i++) {$product_mac = mysqli_fetch_array($product_macs);
	?>
		<a href="contents/view.php?id=<?php echo $product_mac['ID'] ?> "><div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_mac['Logo']?>" alt=""></div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_mac['Name']?></h5>
				<p style="display:inline;"><?php echo $product_mac['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
     <?php } ?> 
     
     <?php 
	for($i = 1; $i<=3;$i++) {$product_mac = mysqli_fetch_array($product_macs);
	?>
     
		<a href="contents/view.php?id=<?php echo $product_mac['ID'] ?> ">
        <div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_mac['Logo']?>" alt=""></div>
			<div class="col-sm-8 col-xs-12">
				<h5><?php echo $product_mac['Name']?></h5>
				<p style="display:inline;"><?php echo $product_mac['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
       <?php } ?> 
        
	</div>

	<div class="row">
		<div class="col-xs-6 software-item"></div>
		<div class="col-xs-6 software-item">
			<a href="#" class="more">Xem thêm</a>
		</div>
	</div>
</div>



<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="../image/android.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">Android</h2>
		</div>
	</div>
<?php $product_Androids = getAndroid($dbhandle) ?>
	<div class="row">
     <?php 
	for($i = 1; $i<=3;$i++) {$product_android = mysqli_fetch_array($product_Androids);
	?>
		<a href="contents/view.php?id=<?php echo $product_android['ID'] ?> "><div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_android['Logo']?>" alt=""></div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_android['Name']?></h5>
				<p style="display:inline;"><?php echo $product_android['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
        <?php } ?>
     <?php 
	for($i = 1; $i<=3;$i++) {$product_android = mysqli_fetch_array($product_Androids);
	?>
     <a href="contents/view.php?id=<?php echo $product_android['ID'] ?> ">
		<div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_android['Logo']?>" alt=""></div>
			<div class="col-sm-8 col-xs-12">
				<h5><?php echo $product_android['Name']?></h5>
				<p style="display:inline;"><?php echo $product_android['Rate']?></p>
				<img src="../image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
      <?php } ?>
	</div>

	<div class="row">
		<div class="col-xs-6 software-item"></div>
		<div class="col-xs-6 software-item">
			<a href="#" class="more">Xem thêm</a>
		</div>
	</div>
</div>

<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="../image/apple.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">iOS</h2>
		</div>
	</div>
<?php $product_iOS = getiOS($dbhandle) ?>
	<div class="row">
     <?php 
	for($i = 1; $i<=3;$i++) {$product_ios = mysqli_fetch_array($product_iOS);
	?>
		<a href="contents/view.php?id=<?php echo $product_ios['ID'] ?> ">
        <div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_ios['Logo']?>" alt=""></div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_ios['Name']?></h5>
				<p style="display:inline;"><?php echo $product_android['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
        <?php } ?>
        
        
		 <?php 
	for($i = 1; $i<=3;$i++) {$product_ios = mysqli_fetch_array($product_iOS);
	?>
		<a href="contents/view.php?id=<?php echo $product_ios['ID'] ?> ">
        <div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_ios['Logo']?>" alt=""></div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_ios['Name']?></h5>
				<p style="display:inline;"><?php echo $product_android['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
        <?php } ?>
	</div>

	<div class="row">
		<div class="col-xs-6 software-item"></div>
		<div class="col-xs-6 software-item">
			<a href="#" class="more">Xem thêm</a>
		</div>
	</div>
</div>