<?php

	require "controller/connectdatabase.php";
	require "controller/indexController.php";
	
	if(isset($_GET["contents"])) {
		$contents = $_GET["contents"];
	}
	else $contents = "";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Home</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 	
  	<script type="text/javascript" src="bootstrap/jQuery/jquery-3.1.0.min.js"></script>  
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link rel="stylesheet" type="text/css" href="css/download.css">
	<link rel="stylesheet" type="text/css" href="css/view.css">
</head>
<body>

	<div class="header">
		<span>
			<button class="btn btn-default" id="menu-toggle"></button>
		</span>
		<span id="page-logo">
			<img src="image/logo.png" alt="">
		</span>
		<span>
			<input id="search" type="text" name="search" placeholder="Tìm kiếm phần mềm...">
			<a id="page-infor" href="#"></a>
			<a id="account" href="register.php"></a>
		</span>
	</div>

	<script>
		var button = document.getElementById('menu-toggle');
		button.onclick = function() {
		    var hide = document.getElementById('sidebar');
			    if (hide.style.display !== 'none') {
			        hide.style.display = 'none';
			        button.style.backgroundImage = 'url("image/menu.svg")';
			    }
			    else {
			        hide.style.display = 'block';
			        button.style.backgroundImage = 'url("image/close.svg")';
			    }
		};
    </script>



	<div class="container">
				<!-- Body -->
		<div class="row">
						<!-- Left Body -->
			<div class="col-md-2">
				<?php require "contents/left_body.php"; ?>
			</div>
			
						<!-- Center Body -->
			<div class="col-md-7 product center">
				<!-- <?php //require "contents/center_body.php"; ?> -->
				<!-- <?php //require "contents/search.php"; ?> -->
				<!-- <?php //require "contents/download.php"; ?> -->
				<!-- <?php //require "contents/view.php"; ?> -->

				<?php
					switch ($contents) {
						case 'download':
							require "contents/download.php";
							break;
						case 'view':
							require "contents/view.php";
							break;
						case 'search':
							require "contents/search.php";
							break;
						default:
							require "contents/center_body.php";
							break;
					}

					
				?>

			</div>
			

						<!-- Right Body -->
			<div class="col-md-3">
				<!-- <?php //require "contents/right_body.php"; ?>	 -->
				<!-- <?php //require "contents/related.php"; ?> -->
				<?php
					if ($contents == 'view' || $contents == 'download')
						require "contents/related.php";
					else 
						require "contents/right_body.php";
				?>

			</div>	
		</div>
	</div>
	<footer>
		<div>
			<table>
				<tr>
					<td><a href="#">TRANG CHỦ</a></td>
					<td><a href="#">HỆ ĐIỀU HÀNH</a></td>
					<td><a href="#">LOẠI PHẦN MỀM</a></td>
					<td><a href="#">VỀ WEBSITE</a></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<ul>
							<li><a href="#">Window</a></li>
							<li><a href="#">MacOS</a></li>
							<li><a href="#">Android</a></li>
							<li><a href="#">iOS</a></li>
						</ul>
					</td>
					<td>
						<ul>
							<li><a href="#">Diệt virus</a></li>
							<li><a href="#">Trình duyệt</a></li>
							<li><a href="#">Văn phòng</a></li>
							<li><a href="#">Học tập</a></li>
							<li><a href="#">Nghe nhạc</a></li>
							<li><a href="#">Xem phim</a></li>
							<li><a href="#">Khác</a></li>
						</ul>
					</td>
					<td></td>
				</tr>
			</table>
		</div>
	</footer>
	
</body>
</html>