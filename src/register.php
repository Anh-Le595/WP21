<?php

	require "controller/connectdatabase.php";
	// include "controller/userController.php";

?>

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
 
 	<!-- plugin jquery for check validation of input -->
  <!-- <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->


	<style>
		.error {color: #FF0000;}
	</style>
	<script>

  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register_form").validate({
    
        // Specify the validation rules
        rules: {
            register_firstname: {required: true,
                minlength: 5},
            register_email: {
                required: true,
                email: true,
                minlength: 5
            },
            register_password: {
                required: true,
                minlength: 5
            },
           // agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            register_firstname:
            {
            	required: "Please enter your name",
                minlength: "Your password must be at least 5 characters long"
            },
            register_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            register_email: "Please enter a valid email address",
           // agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
	
		// Sign up
		$(document).ready(function(){
			$("#btn").click(function(){
				var val1 = $("#register_firstname").val();
				var val2 = $("#register_email").val();
				var val3 = $("#register_password").val();
				
				$.ajax({
					url: "controller/userController.php",
					type: "post",
					dataType: 'text',
					data:{
						username:val1,
						email:val2,
						pass_signup:val3
					},
					success: function(response){
						if(response=="Sign up is successful"){
								alert(response);
								window.location.href = "index.php";}
							else
								// alert("Failed.");
								alert(response);
					}
				});	

			})
		});


		// Login
		$(document).ready(function(){
			$("#btn_login").click(function(){
				var val1 = $("#login_firstname").val();
				var val2 = $("#login_password").val();

				$.ajax({
					url: "controller/userLogin.php",
					type: "post",
					dataType: 'text',
					data:{
						user:val1,
						pass_login:val2
					},
					success: function(response){
							if(response=="Successfully"){
								alert(response);
								window.location.href = "index.php";
							}
							else	
								alert("Your Login Name or Password is invalid.")
					}
				});

			})
		});
	</script>
</head>
<body>
	<div id="account-box">
		<div id="logo">
			<a href="index.php"><img src="image/logo.png" alt=""></a>
		</div>

		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#login">Đăng nhập</a></li>
		    <li ><a data-toggle="tab" href="#register">Đăng kí</a></li>
		</ul>

		<div class="tab-content">
			<div id="register" class="tab-pane fade in">



				<form id="register_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
					<div class="form-group">
						<label>Username<span>*</span>: </label>
						<input name="register_firstname" id="register_firstname" type="text" maxlength="30" placeholder="Enter your username">
						
						
						<!-- <div class="col-sm-6 error">
							<?php
								//echo $firstnameErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label>Email<span>*</span>: </label>
						<input name="register_email" id="register_email" type="email" placeholder="Enter your email">
						
						<!-- <div class="col-sm-6 error">
							<?php
								//echo $emailErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label class="control-label">Password<span>*</span>: </label>
						<input name="register_password" id="register_password" type="password" maxlength="30" size="45" placeholder="Enter password">
						
					</div>
					<div class="form-group">
						<input name="submit1" value="ĐĂNG KÍ" type="button" class="" id="btn">
						<!-- <button id="btn">ĐĂNG KÍ</button> -->
					</div>
				</form>
				<!-- <button id="btn">ĐĂNG KÍ</button> -->
			</div>

			<div id="login" class="tab-pane fade in active">
				<form action="" method="post">
					<div class="form-group">
						<label>Username<span>*</span>: </label>
						<input name="login_firstname" id="login_firstname" type="text" maxlength="30" placeholder="Enter your username">
						<!-- <div class="col-sm-6 error">
							<?php
								//echo $firstnameErr;
							?>
						</div> -->
					</div>
					<div class="form-group">
						<label class="control-label">Password<span>*</span>: </label>
						<input name="login_password" id="login_password" type="password" maxlength="30" size="45" placeholder="Enter password">
					</div>
					<div class="form-group">
						<input name="submit2" value="ĐĂNG NHẬP" type="button" class="" id="btn_login">
					</div>
				</form>
				<!-- <button id="btn_login">ĐĂNG NHẬP</button> -->
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