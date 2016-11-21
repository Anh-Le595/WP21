<script type="text/javascript">
	function demo() {
		window.location = "?contents=download";
	}
</script>

<div id="slideshow" class="row">
	<div class="row" id="slideshow">
		<!-- <img id="toleft" class="arrow" src="image/arrow.svg" alt="" onclick="leftarrow()">
		<img id="toright" class="arrow" src="image/arrow.svg" alt="" onclick="rightarrow()"> -->

		<div id="hidden-item"></div>
		
		<div class="slideshow-item slow-transition" id="left-left-item">
			<div>
				<div class="row">
					<h2 class="header-slideitem">AVAST ANTIVIRUS</h2>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="image/logo_avast.jpg" alt="" class="product-logo-big image-slideitem">
					</div>
					<div class="col-sm-6" style="text-align:center;">
						<div class="star-group">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
						</div>
						<p class="free">FREE</p>
						<button class="btn-download" style="display:block;margin:20px auto;">DOWNLOAD</button>
					</div>
				</div>
				<div class="card-infor" class="row" style="margin-left:20px;">
					<div class="col-sm-6 col-xs-12" style="font-family:'sanfrancisco';text-align:left;">
						Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty 1<br>
						Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.0.0<br>
						Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100MB<br>
						Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25/09/2016<br>
					</div>
					<div class="col-sm-6 col-sx-12" style="font-family:'sanfrancisco';text-align:left;">
						Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 lượt<br>
						Lượt đánh giá:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 lượt
					</div>
				</div>
			</div>
		</div>
		
		<div class="slideshow-item slow-transition" id="left-item">
			<div>
				222222222222222
			</div>
		</div>
		<div class="slideshow-item slow-transition" id="center-item">
			<div>
				33333333333333
			</div>
		</div>
		<div class="slideshow-item slow-transition" id="right-item">
			<div>
				444444444444444444
			</div>
		</div>
		<div class="slideshow-item slow-transition" id="right-right-item">
			<div>
				555555555555555
			</div>
		</div>
	</div>
</div>

<div class="row">
	<ul id="circle">
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
		<li><div class="circle-slideitem"></div></li>
	</ul>
</div>



<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="image/window.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">Window</h2>
		</div>
	</div>


<?php 
$products_windows = getDataByOS($dbhandle,'Window');	 
?>
	<div class="row">
    <?php 
	for($i = 1; $i<=3;$i++) {$product_window = mysqli_fetch_array($products_windows);
	?>
		<a href="?contents=view&&id=<?php echo $product_window['ID'] ?> "><div class="col-xs-6 software-item">
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
		<a href="?contents=view&&id=<?php echo $product_window['ID'] ?> "><div class="col-xs-6 software-item">
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
			<a href="?contents=product&&pass=<?php echo $product_window['OS'] ?>&&page=1" class="more">Xem thêm</a>
		</div>
	</div>
</div>


<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="image/apple.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">MacOS</h2>
		</div>
	</div>
<?php $product_macs = getDataByOS($dbhandle,'Mac OS') ?>
	<div class="row">
    <?php 
	for($i = 1; $i<=3;$i++) {$product_mac = mysqli_fetch_array($product_macs);
	?>
		<a href="?contents=view&&id=<?php echo $product_mac['ID'] ?> "><div class="col-xs-6 software-item">
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
     
		<a href="?contents=view&&id=<?php echo $product_mac['ID'] ?> ">
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
			<a href="?contents=product&&pass=<?php echo $product_mac['OS'] ?>" class="more">Xem thêm</a>
		</div>
	</div>
</div>



<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="image/android.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">Android</h2>
		</div>
	</div>
<?php $product_Androids = getDataByOS($dbhandle,'Android') ?>
	<div class="row">
     <?php 
	for($i = 1; $i<=3;$i++) {$product_android = mysqli_fetch_array($product_Androids);
	?>
		<a href="?contents=view&&id=<?php echo $product_android['ID'] ?> "><div class="col-xs-6 software-item">
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
     <a href="?contents=view&&id=<?php echo $product_android['ID'] ?> ">
		<div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_android['Logo']?>" alt=""></div>
			<div class="col-sm-8 col-xs-12">
				<h5><?php echo $product_android['Name']?></h5>
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
			<a href="?contents=product&&pass=<?php echo $product_android['OS'] ?>" class="more">Xem thêm</a>
		</div>
	</div>
</div>

<div class="home-item">
	<div class="row title">
		<img class="product-icon" src="image/apple.svg" alt="">
		<div class="title-content">
			<h2 class="product-title">iOS</h2>
		</div>
	</div>
<?php $product_iOS = getDataByOS($dbhandle,'iOS') ?>
	<div class="row">
     <?php 
	for($i = 1; $i<=3;$i++) {$product_ios = mysqli_fetch_array($product_iOS);
	?>
		<a href="?contents=view&&id=<?php echo $product_ios['ID'] ?> ">
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
		<a href="?contents=view&&id=<?php echo $product_ios['ID'] ?> ">
        <div class="col-xs-6 software-item">
			<div class="col-sm-4 col-xs-12"><img class="product-logo" src="<?php echo $product_ios['Logo']?>" alt=""></div>
			<div class="col-sm-8  col-xs-12">
				<h5><?php echo $product_ios['Name']?></h5>
				<p style="display:inline;"><?php echo $product_ios['Rate']?></p>
				<img src="image/star.svg" alt="" class="star">
			</div>
		</div>
        </a>
        <?php } ?>
	</div>

	<div class="row">
		<div class="col-xs-6 software-item"></div>
		<div class="col-xs-6 software-item">
			<a href="?contents=product&&pass=<?php echo $product_ios['OS'] ?>" class="more">Xem thêm</a>
		</div>
	</div>
</div>