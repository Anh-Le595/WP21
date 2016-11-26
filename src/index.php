<?php
	session_start();
	/*Include controler*/
	
	require "controller/connectdatabase.php";
	require "controller/indexController.php";
	require "controller/searchController.php";
	
	
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
  	<script type="text/javascript" src="js/slideshow2.js"></script>
  	<script type="text/javascript" src="js/search.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link rel="stylesheet" type="text/css" href="css/download.css">
	<link rel="stylesheet" type="text/css" href="css/view.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
</head>
<body>

	<div class="header">
		<span>
			<button class="btn btn-default" id="menu-toggle"></button>
		</span>
		<span id="page-logo">
			<a href="?content=index"><img src="image/logo.png" alt=""></a>
		</span>
		<span>
			<input id="search" type="text" name="search" placeholder="Tìm kiếm phần mềm...">
			<a id="page-infor" href="#"></a>
			

			<?php
				if(isset($_SESSION['check_log'])){
					if($_SESSION['check_log'] == true){
			?>
						<span id="popup-infor">This is our awesome Web Programming assignment project!</span>
						<a  href="" class="account">
							
						</a>
						<img src="image/account.svg" class="account">
						<span id="popup-account">
							<h5>
							<!-- bang.le -->
							<?php
								if(isset($_SESSION['use']))
									echo $_SESSION['use'];
							?>
							</h5>
							<a href="#">Đổi mật khẩu</a>
							<a href="#">Quản lí</a>
							<a href="logout.php">Logout</a>
						</span>
				<?php		
					}
				}	else{
				?>
						<a  href="register.php">
							<img src="image/login.svg" class="account">
						</a>

					<?php
						}	
					?>
			
			<!-- <a class="account" href=""></a> -->
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
						case 'product':
							require "contents/product.php";
							break;
						default:
							require "contents/center_body.php";
							break;
					}
						
				?>

			</div>
			

						<!-- Right Body -->
			<div class="col-md-3">
				
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
					<td><a href="?content=index">TRANG CHỦ</a></td>
					<td><a href="#">HỆ ĐIỀU HÀNH</a></td>
					<td><a href="#">LOẠI PHẦN MỀM</a></td>
					<td><a href="#">VỀ WEBSITE</a></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<ul>
							<li><a href="?contents=product&&pass=Window">Window</a></li>
							<li><a href="?contents=product&&pass=Mac OS">Mac OS</a></li>
                            <li><a href="?contents=product&&pass=Android">Android</a></li>
							<li><a href="?contents=product&&pass=iOS">iOS</a></li>
                            
						</ul>
					</td>
					<td>
						<ul>
							<li><a href="?contents=product&&pass=Diệt Virus">Diệt virus</a></li>
							<li><a href="?contents=product&&pass=Trình duyệt">Trình duyệt</a></li>
							<li><a href="?contents=product&&pass=Văn phòng">Văn phòng</a></li>
							<li><a href="?contents=product&&pass=Học tập">Học tập</a></li>
							<li><a href="?contents=product&&pass=Nghe nhạc">Nghe nhạc</a></li>
							<li><a href="?contents=product&&pass=Xem phim">Xem phim</a></li>
							<li><a href="?contents=product&&pass=Khác">Khác</a></li>
						</ul>
					</td>
					<td></td>
				</tr>
			</table>
		</div>
	</footer>
	
</body>
</html>