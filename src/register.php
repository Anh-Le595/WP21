<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Login-Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> 	
  <script type="text/javascript" src="bootstrap/jQuery/jquery-3.1.0.min.js"></script>  
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div id="account-box">
		<div id="logo">
			<a href="index.php"><img src="image/logo.png" alt=""></a>
		</div>

		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#login">Đăng nhập</a></li>
		    <li><a data-toggle="tab" href="#register">Đăng kí</a></li>
		</ul>

		<div class="tab-content">
			<div id="register" class="tab-pane fade in">
				<form action="javascript:void(0);" method="post">
					<div class="form-group">
						<label>Username<span>*</span>: </label>
						<input name="firstname" type="text" maxlength="30" placeholder="Enter your username">
						<!-- <div class="col-sm-6 error">
							<?php
								echo $firstnameErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label>Email<span>*</span>: </label>
						<input name="email" type="email" placeholder="Enter your email">
						<!-- <div class="col-sm-6 error">
							<?php
								echo $emailErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label class="control-label">Password<span>*</span>: </label>
						<input name="password" type="password" maxlength="30" size="45" placeholder="Enter password">
					</div>
					<div class="form-group">
						<input name="submit1" value="ĐĂNG KÍ" type="submit" class="">
					</div>
				</form>
			</div>

			<div id="login" class="tab-pane fade in active">
				<form action="javascript:void(0);" method="post">
					<div class="form-group">
						<label>Username<span>*</span>: </label>
						<input name="firstname" type="text" maxlength="30" placeholder="Enter your username">
						<!-- <div class="col-sm-6 error">
							<?php
								echo $firstnameErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label class="control-label">Password<span>*</span>: </label>
						<input name="password" type="password" maxlength="30" size="45" placeholder="Enter password">
					</div>
					<div class="form-group">
						<input name="submit2" value="ĐĂNG NHẬP" type="submit" class="">
					</div>
				</form>
			</div>
		</div>

		<script>
			$(document).ready(function(){
			    $(".nav-tabs a").click(function(){
			        $(this).tab('show');
			    });
			});
		</script>
	</div>
</body>
</html>