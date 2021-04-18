<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login & Signup Form</title>
	<link href="/css/login-styles.css" rel="stylesheet">
</head>
<body>

<body>
<!--HEADERI -->
<?php include('./includes/header.php') ?>


<style>
<?php require("css/login-style.css");?></style>



	<div class="center">
	<div class="btns">
	<a class="a1" href="#">Sign up</a>
	<a class="a2" href="#">Log in</a>			
	</div>
	<div class="signup-form">
	<div class="header">Signup For Free</div>
	<div class="signup_error"></div>
	<form action="index.php" name="signupForm" method="post" onsubmit="return signupValid()">
	<input type="text" name="firstname" placeholder="Firstname" autocomplete="off">
	<input class="lstname" name="lastname" type="text" placeholder="Lastname" autocomplete="off">	
	<input class="email" name="email" type="text" placeholder="Email or Phone" autocomplete="off">	
	<input class="email" name="password" type="password" placeholder="Password" autocomplete="off">
	<input type="submit" value="Signup">
	</form>
    </div>
    <div class="login-form">
	<div class="header header1">Login For Free</div>
	<form action="">
	<input class="email" type="text" placeholder="Email or Phone">	
	<input class="email" type="password" placeholder="Password">
	<input type="submit" value="Login">
	</form>
    </div>
	</div>
	<script src="script.js"></script>
	<script src="valid.js"></script>

	
<!--FOOTER -->
<?php include('./includes/footer.php') ?>


</body>
</html>