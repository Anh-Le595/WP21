<?php $pass = $_GET['pass'];

switch($pass){
	case 'Window':
		$productDatas=getWindow($dbhandle);
		$pathImage = "image/window.svg";
		break;
	case 'Mac OS':
		$productDatas=getMacOS($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Android':
		$productDatas=getAndroid($dbhandle);
		$pathImage = "image/android.svg";
		break;
	case 'iOS':
		$productDatas=getWindow($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Diệt Virus':
		$productDatas=getVirus($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Văn Phòng':
		$productDatas=getOffice($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Học Tập':
		$productDatas=getStudy($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Trình Duyệt':
		$productDatas=getBrowser($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Nghe Nhạc':
		$productDatas=getMusic($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Xem Phim':
		$productDatas=getMovie($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	case 'Khác':
		$productDatas=getOthers($dbhandle);
		$pathImage = "image/apple.svg";
		break;
	default:
		break;
}



?>

						<!-- Center Body -->
						<div class="row" id="title">
							<img class="product-icon" src="<?php echo $pathImage ?>" alt="">
							<div class="title-content">
								<!-- <ul class="product-link">
									<li><a href="#">Trang chủ</a></li>
									<li><a href="#">Window</a></li>
								</ul>
								<br> -->
								<h2 class="product-title"><?php echo $pass ?></h2>
							</div>
						</div>

						<!-- =====================================================================
						==========================   PRODUCT  ====================================
						======================================================================== -->
	<?php 
	for($i = 1;$i<10;$i++) {$product = mysqli_fetch_array($productDatas)
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
											<li><a href="?contents=product&&pass=Diệt Virus">Diệt virus</a></li>
											<li><a href="?contents=product&&pass=Window">Window</a></li>
											<li><a href="?contents=product&&pass=Mac OS">Mac OS</a></li>
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
<?php } ?>
						

				<!-- separate pages -->
				<ul class="paging">
					<li><button>&larr;</button></li>
					
					<li><button>1</button></li>
                    <li><button>2</button></li>
                    <li><button>3</button></li>
					
					<li><button>&rarr;</button></li>
				</ul>
			
			

	</div>