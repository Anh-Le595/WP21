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
		
		<?php
			$product_macs = getDataByOS($dbhandle,'Mac OS');
			for ($i=1;$i<=5;$i++){
				$product_mac = mysqli_fetch_array($product_macs);
				switch ($i) {
					case 1:
						echo '<div class="slideshow-item slow-transition" id="left-left-item">';
						break;

					case 2:
						echo '<div class="slideshow-item slow-transition" id="left-item">';
						break;

					case 3:
						echo '<div class="slideshow-item slow-transition" id="center-item">';
						break;

					case 4:
						echo '<div class="slideshow-item slow-transition" id="right-item">';
						break;

					case 5:
						echo '<div class="slideshow-item slow-transition" id="right-right-item">';
						break;
					
					default:
						break;
				}

				echo '<div>';
				echo '<div class="row">';
				echo '<h2 class="header-slideitem">'.$product_mac['Name'].'</h2>';
				echo '</div>';
				echo '<div class="row">';
				echo '<div class="col-sm-6">';
				echo '<img src='.$product_mac['Logo'].' alt="" class="product-logo-big image-slideitem">';
				echo '</div>';
				echo '<div class="col-sm-6">';
				echo '<div class="star-group">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
							<img class="star" src="image/star.svg" alt="">
					</div>';
				echo '<p class="free">FREE</p>';
				echo '<button class="btn-download" style="display:block;margin:20px auto;">DOWNLOAD</button>';
				echo '</div>
						</div>
						<div class="slideshow-infor" class="row" style="margin-left:20px;text-align:left">
							<div class="col-sm-6 col-xs-12" style="font-family:'.'"sanfrancisco"'.';text-align:left;">';
				echo 'Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty 1<br>
								Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product_mac['Version'].'<br>
								Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product_mac['size'].'<br>
							</div>';
				echo '<div class="col-sm-6 col-sx-12" style="font-family:'.'"sanfrancisco"'.';text-align:left;">
								Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product_mac['UpdateTime'].'<br>
								Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$product_mac['NumberDownload'].'<br>
								Lượt đánh giá:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'10'.'
							</div>
						</div>
					</div>
				</div>';
			}
		?>
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
<script type="text/javascript" src="js/slideshow2.js"></script>


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