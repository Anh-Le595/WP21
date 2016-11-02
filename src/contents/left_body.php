

<div id="sidebar">
	<div class="menu"><h5>HỆ ĐIỀU HÀNH</h5></div>
	<div class="item"><a href="#">Window</a></div>
	<div class="item"><a href="#">Mac OS</a></div>
	<div class="item"><a href="#">Android</a></div>
	<div class="item"><a href="#">IOS</a></div>

	<div class="menu"><h5>CHỨC NĂNG</h5></div>
	<?php 
	$categories = showCategory($dbhandle);
	while ($category = mysqli_fetch_array($categories)) {
	?>


	<div class="item"><a href="#"><?php echo $category['Name'] ?></a></div>
	

	<?php
	}
	?> 
	<!-- <div class="item"><a href="#">Diệt Virus</a></div>
	<div class="item"><a href="#">Trình Duyệt</a></div>
	<div class="item"><a href="#">Văn Phòng</a></div>
	<div class="item"><a href="#">Học Tập</a></div>
	<div class="item"><a href="#">Nghe Nhạc</a></div>
	<div class="item"><a href="#">Xem Phim</a></div>
	<div class="item"><a href="#">Khác</a></div> -->
</div>
