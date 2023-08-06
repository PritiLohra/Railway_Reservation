<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Railway Commodity Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>
	<div class="body_container">
	<div class="wrap">
		<!-- Header -->
		<div class="header">
		
			<div style="float:left;width:107px;">
				<img style="height: 8rem;" src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px; color:#ffff;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
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
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/png2.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/png1" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/8.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/9.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/10.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/11.png"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>
Indian Railways plans 'Make in India' wheels for trains.</b></p>
				</br>
				<p><b>The Indian Railways has been ensuring uninterrupted supply of essential commodities across the country in view of the heavy restrictions on road transport due to the lockdown to control the spread of Covid-19.</b></p></br>
				<p><b>One rake (goods train) consists of 40 wagons and each wagon is filled up with different types of goods according to its capacity, said officials.</b></p></br>
				<p><b>Gur Market near Kolhapur – 2 rakes of rice, 2 rakes of cement and 3 rakes of fertilisers</b></p></br>
				</br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
<footer >
		<div style="width:100%;">
		<div style="float:left;">
			<p class="text-right text-info">  &copy; 2023 Copyright Priti Lohra.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Designed By : Priti Lohra</p>
			</div>
		</div>
		</footer>	</div>
			 </div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>