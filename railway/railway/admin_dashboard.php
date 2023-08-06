<?php
session_start();
require('firstimport.php');


?>

<!DOCTYPE html>
<html>

<head>
	<title> Admin Dashboard </title>
	<link rel="shortcut icon" href="images/favicon.png">
	</link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/bootstrap.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script>
		$(document).ready(function () {
			var x = (($(window).width()) - 1024) / 2;
			$('.wrap').css("left", x + "px");
		});
	</script> -->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>


</head>

<body>
	<div class="body_container admin" style="left:0px;">
		<div class="wrap" style="left:0px; margin: 20px; width: -webkit-fill-available;">
			<!-- Header -->
			<div class="header">

				<div style="float:left;width:107px;">
					<img style="height: 8rem;" src="images/logo.jpg" />
				</div>
				<div>
					<div style="float:right; font-size:20px;margin-top:20px; color:#ffff;">
						<?php
						if (isset($_SESSION['email'])) {
							echo "Welcome Admin," . $_SESSION['email'] . "&nbsp;&nbsp;&nbsp;
							<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
						} else {
							?>
							<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="signup.php?value=0" class="btn btn-info">Signup</a>
						<?php } ?>


					</div>
					<div id="heading">
						<a href="index.php">Railway Commodity Reservation</a>
					</div>
				</div>
			</div>

			<!-- Navigation bar -->
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="add_train.php">ADD TRAIN</a>
						<a class="brand" href="admin_train_find.php">FIND TRAIN</a>

					</div>
				</div>
			</div>

			<!-- Copyright -->
			<footer>
				<div style="width:100%;">
					<div style="float:left;">
						<p class="text-right text-info"> &copy; 2023 Copyright Priti Lohra.</p>
					</div>
					<div style="float:right;">
						<p class="text-right text-info"> Designed By : Priti Lohra</p>
					</div>
				</div>
			</footer>
		</div>
	</div>

</body>

</html>

<?php

if (isset($_SESSION['error'])) {
	session_destroy();
}

?>