<?php
session_start();
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
                                                <li><a href="login.php#login">Login</a></li>
					</ul>
				</div>
				<div class="h_search">
		    		<form>
		    			<input type="text" value="" placeholder="search something...">
		    			<input type="submit" value="">
		    		</form>
				</div>
				<div class="clear"> </div>
			</div>
	</div>
</div>
			<!---start-banner---->
			<div class="banner" id="move-top">
				<!----start-image-slider---->
					<div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
						<div class="wrap">
							<div class="slider">
								<ul id="jquery-demo">
								  <li>
								    <a href="#slide1">
								    </a>
								    <div data-scroll-reveal="enter bottom but wait 0.7s" class="slider-detils">
								    	<h3>Fashion Shop for Men</h3>
								    	<span>consectetur adipisc ing elit</span>
								    </div>
								  </li>
								  <li>
								    <a href="#slide2">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
								    	<h3>Fashion Shop for Women</h3>
								    	<span>Aliquam viverra consectetur nibh a blan dit.</span>
								    	</div>
								  </li>
								  <li>
								    <a href="#slide3">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1.5s" class="slider-detils">
								      	<h3>Fashion Shop for Kids</h3>
								    	<span>Proin at amet consectetur adipisc lacinia.</span>
								    </div>
								  </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
						<!---slider---->
				<link rel="stylesheet" href="css/slippry.css">
				<script src="js/jquery-ui.js" type="text/javascript"></script>
				<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
				<script>
					  jQuery('#jquery-demo').slippry({
					  // general elements & wrapper
					  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
					  // options
					  adaptiveHeight: false, // height of the sliders adapts to current slide
					  useCSS: false, // true, false -> fallback to js if no browser support
					  autoHover: false,
					  transition: 'fade'
					});
				</script>
				<!---scrooling-script--->
					<!----//End-image-slider---->
                                        <a name="reg"></a>
					<div class="simple-text">
                                                <div class="wrap">                                                                                          <!--h4>LOGIN</h4-->
<?php
if(!isset($_POST['submit'])) {
?>
<form name="f" action="register.php" method="post" onsubmit="return check_regn()">
    <table class="center_tab">
	<thead>
	    <tr>
                <th colspan="2"><h4>REGISTRATION</h4></th>
	    </tr>
	</thead>
	<tbody>
	    <tr>
		<th>Name</th>
		<td><input type="text" name="uname" required autofocus></td>
	    </tr>
            <tr>
		<th>Gender</th>
		<td><input type="radio" name="g" value="Male" checked>Male &nbsp;<input type="radio" name="g" value="Female">Female</td>
	    </tr>
            <tr>
		<th class="vcenter">Address</th>
		<td><textarea name="addr" rows="3" cols="25" required></textarea></td>
	    </tr>
            <tr>
		<th>Mobile</th>
                <td><input type="text" name="mobile" maxlength="10" required></td>
	    </tr>
            <tr>
		<th>E-Mail (Userid)</th>
		<td><input type="text" name="userid" required></td>
	    </tr>
	    <tr>
		<th>Password</th>
		<td><input type="password" name="pwd" required></td>
	    </tr>
	    <tr>
		<th>Confirm Pwd</th>
		<td><input type="password" name="cpwd" required></td>
	    </tr>
	</tbody>
	<tfoot>
	    <tr>
		<td colspan="2" class="center">
		    <input type="submit" name="submit" value="Register">
		</td>
	    </tr>
	</tfoot>
    </table>
</form>
<?php
} else {
    extract($_POST);
    include './db.php';
    mysqli_query($link, "insert into userregn(name,gender,addr,mobile,userid,pwd) values('$uname','$g','$addr','$mobile','$userid','$pwd')") or die(mysqli_error($link));
    echo "<div class='center'>UserId Generated Successfully...!<br><a href='login.php'>Login</a></div>";
}
?>
</div>
    </div>
	<div class="copy">
	<p>Fashion Shop © 2017 CSS by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
	</div>
</body>
<script>
function check_regn() {
    var mobile = f.mobile.value
    var userid = f.userid.value
    var pwd = f.pwd.value
    var cpwd = f.cpwd.value
    
    if(!check_mobile(mobile)) {
        alert("Invalid Mobile Number")
        f.mobile.focus()
        return false
    }
    
    if(!check_email(userid)) {
        alert("Invalid Email/Userid")
        f.userid.focus()
        return false
    }
    
    if(pwd!=cpwd) {
        alert("Confirm Password not Match")
        f.cpwd.focus()
        return false
    }
    return true
}
    function check_email(e) {
	var ep = /^\w+\.{0,1}\w+\@[a-z]+\.([a-z]{3}|[a-z]{2}\.[a-z]{2}){1}$/
	return e.match(ep)
    }
    function check_mobile(m) {
	var mp = /^[987]\d{9}$/
	return m.match(mp)
    }
</script>
</html>