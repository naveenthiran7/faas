<?php
session_start();
if(!isset($_SESSION['adminuserid'])) {
    header("Location:index.php");
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Clothing for Men & Women</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
	<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});
			});
		</script>
		<!-- //Owl Carousel Assets -->
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<!--script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script-->
		<!-----//768px-menu----->
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php">
				<img src="images/lg.png" alt=""/>
				<h1>FASHION SHOP</h1>
				<div class="clear"> </div>
			 </a>
		</div>
		<div class="text">
		  <p>Latest Trends in Fashion</p>
		</div>
		<div class="clear"> </div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
	<div class="wrap">
		<!------start-768px-menu---->
			<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					<nav id="menu-left">
						
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="active"><a href="adminhome.php">Home</a></li>
                                                <li><a href="viewall.php">View All</a></li>
                                                <li><a href="customers.php">Customers</a></li>
                                                <li><a href="delivery.php">Delivery</a></li>
                                                <li><a href="dreport.php">Report</a></li>
                                                <li><a href="signout.php">Signout</a></li>
					</ul>
				</div>
				<div class="h_search">
		    		<form>
		    			<!--input type="text" value="" placeholder="search something...">
		    			<input type="submit" value=""-->
		    		</form>
				</div>
				<div class="clear"> </div>
			</div>
	</div>
</div>
<div class="simple-text">
    <div class="wrap" style="min-height: 500px;">                                                                                          <!--h4>LOGIN</h4-->
	<?php
	include './db.php';
	?>