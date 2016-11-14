
<?php include ("../controller/connectdatabase.php");?>
<?php include ("../controller/indexController.php");?>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/jQuery/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/view.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<script src="../js/card.js"></script>
<script src="../js/star.js"></script>
<script src="../js/writecomment.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../header.css">
<?php $id = $_GET['id'];
$productDatas=getDataById($id,$dbhandle);
$product = mysqli_fetch_array($productDatas)
?>

<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<img class="product-logo-big" src="<?php echo $product['Logo'] ?>" alt="">
			<h3><?php echo $product['Name'] ?></h3>
			<div class="star-group">
				<img class="star" src="contents/image/star.svg" alt="">
				<img class="star" src="contents/image/star.svg" alt="">
				<img class="star" src="contents/image/star.svg" alt="">
				<img class="star" src="contents/image/star.svg" alt="">
				<img class="star" src="contents/image/star.svg" alt="">
			</div>
			<p class="free">FREE</p>
			<script type="text/javascript" src="../js/card.js"></script>
		</div>
	</div>
	<div class="col-sm-5 product-information">
		<p style="display:inline;">
			Phát hành:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['Company'] ?><br>
			Phiên bản:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['Version'] ?><br>
			Dung lượng:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['size'] ?><br>
			Cập nhật:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['UpdateTime'] ?><br>
			Đánh giá:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['Rate'] ?><br>
			Lượt tải:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['NumberDownload'] ?><br>
			Xem thêm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</p>
		<ul class="inf" style="display:inline">
			<li><a href="#">Diệt virus</a></li>
			<li><a href="#">Window</a></li>
			<li><a href="#">Mac OS</a></li>
		</ul>
		<div>
			<img src="contents/image/window.svg" alt="" class="product-icon">
			<img src="contents/image/apple.svg" alt="" class="product-icon">
		</div>
		<button class="btn-download" style="display:block;margin:100px auto;">DOWNLOAD</button>
	</div>
</div>
<div class="row">
	<div id="description">
		<!-- Describe -->
		<h5>Mô tả phần mềm</h5>
		<p>
			<?php echo $product['Description']  ?>
		</p>		
	</div>
</div>
<div class="row">
	<div class="col-sm-12" id="comment">
		<h5 class="row">Đánh giá</h5>
		<div class="row">
			<div class="col-sm-2"><img src="contents/image/image.png" alt="" class="product-logo"></div>
			<div class="col-sm-8">
				<h6>Tên Người Dùng</h6>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"><img src="contents/image/image.png" alt="" class="product-logo"></div>
			<div class="col-sm-8">
				<h6>Tên Người Dùng</h6>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"><img src="contents/image/image.png" alt="" class="product-logo"></div>
			<div class="col-sm-8">
				<h6>Tên Người Dùng</h6>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
			</div>
		</div>
		<div class="row">
			<p id="write-comment">Viết đánh giá</p>
			<script type="text/javascript" src="contents/js/writecomment.js"></script>
			<div id="write-comment-popup">
				<p>Bạn đánh giá phần mềm này như thế nào?</p>
				<!-- <div class="star-group-empty">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div> -->
				<input class="write-comment-hidden" type="text" placeholder="Viết đánh giá về phần mềm...">
				<button class="write-comment-hidden" id="write">Đăng</button><br>
			</div>
		</div>
	</div>
</div>
