<?php
require_once ("../shoppingCart/php/adminOperation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Cart : Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="adminLogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="adminLogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="adminLogin/css/main.css">
<!--===============================================================================================-->
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('adminLogin/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="php/adminOperation.php" method="post">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
                        <i class="fas fa-shopping-basket"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						ADMIN Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login" >
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="adminLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/vendor/bootstrap/js/popper.js"></script>
	<script src="adminLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="adminLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="adminLogin/js/adminmain.js"></script>

</body>
</html>