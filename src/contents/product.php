<?php $pass = $_GET['pass'];

switch($pass){
	case 'Window':
		$result = getCountOS($dbhandle,$pass);
		break;
	case 'Mac OS':
		$result = getCountOS($dbhandle,$pass);
		break;
	case 'Android':
		$result = getCountOS($dbhandle,$pass);
		break;
	case 'iOS':
		$result = getCountOS($dbhandle,$pass);
		break;
	case 'Diệt Virus':
		$result = getCountCate($dbhandle,'virus');
		break;
	case 'Văn Phòng':
		$result = getCountCate($dbhandle,'office');
		break;
	case 'Học Tập':
		$result = getCountCate($dbhandle,'study');
		break;
	case 'Trình Duyệt':
		$result = getCountCate($dbhandle,'browser');
		break;
	case 'Nghe Nhạc':
		$result = getCountCate($dbhandle,'music');
		break;
	case 'Xem Phim':
		$result = getCountCate($dbhandle,'movie');
		break;
	case 'Khác':
		$result = getCountCate($dbhandle,'others');
		break;
	default:
		break;
}

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

switch($pass){
	case 'Window':
		$productDatas=getDataByOSLimit($dbhandle,$pass,$start,$limit);
		$pathImage = "image/window.svg";
		break;
	case 'Mac OS':
		$productDatas=getDataByOSLimit($dbhandle,$pass,$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Android':
		$productDatas=getDataByOSLimit($dbhandle,$pass,$start,$limit);
		$pathImage = "image/android.svg";
		break;
	case 'iOS':
		$productDatas=getDataByOSLimit($dbhandle,$pass,$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Diệt Virus':
		$productDatas=getDataByTagLimit($dbhandle,'virus',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Văn Phòng':
		$productDatas=getDataByTagLimit($dbhandle,'office',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Học Tập':
		$productDatas=getDataByTagLimit($dbhandle,'study',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Trình Duyệt':
		$productDatas=getDataByTagLimit($dbhandle,'browser',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Nghe Nhạc':
		$productDatas=getDataByTagLimit($dbhandle,'music',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Xem Phim':
		$productDatas=getDataByTagLimit($dbhandle,'movie',$start,$limit);
		$pathImage = "image/apple.svg";
		break;
	case 'Khác':
		$productDatas=getDataByTagLimit($dbhandle,'others',$start,$limit);
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
								<h2 class="product-title"><?php echo  $pass ?></h2>
							</div>
						</div>

						<!-- =====================================================================
						==========================   PRODUCT  ====================================
						======================================================================== -->
	<?php 
	while ($product = mysqli_fetch_assoc($productDatas)){
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
                 <?php
				 	if ($current_page > 1 && $total_page > 1){
						echo'<li><a href="?contents=product&&pass='.$pass.'&&page='.($current_page - 1).'" class="btn btn-default">&larr;</a</li>';
					}
					
					for ($i = 1; $i <= $total_page;$i++){
						if($i == $current_page){
							echo '<li><button class="btn btn-default active">'.$i.'</button></li>';
						}else{
							echo '<li><a a href="?contents=product&&pass='.$pass.'&&page='.$i.'" class="btn btn-default">'.$i.'</a></li>';
						}
					}
					if($current_page < $total_page && $total_page > 1){
						 echo '<li><a href="?contents=product&&pass='.$pass.'&&page='.($current_page+1).'" class="btn btn-default" >&rarr;</a></li> ';
					}
				  ?>
				</ul>           
			
			

	</div>