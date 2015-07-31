<?php session_start(); ob_start();
if(isset($_REQUEST["logout"]))
 {
	 //xóa thông tin trên session
	 session_destroy();
	 //refetch
	 echo"<script>window.location='index.php';</script>";
	 }
$role = $_SESSION["role"];	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Trang Chủ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/style.css"/>
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() { //Start up our Featured Project Carosuel
			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 600
			});
			 $('#login-trigger').click(function(){
   				 $(this).next('#login-content').slideToggle();
   				 $(this).toggleClass('active');          
    
   				 if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
     			 else $(this).find('span').html('&#x25BC;')
    });
		});
	</script>  

	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="container_12 clearfix">

		<!-- Text Logo -->
		<h1 id="logo" class="grid_4">Phu's Store</h1>
		<span style="margin-left:400px; font-size:12px">  <?php
   if(isset($_SESSION["lname"]))
    include_once("logout.php");
	else 
	  include_once("login.php");  
   ?>
    <a href="trang_giao_hang.php"><img width="30"  alt="" src="images/shopping cart icon.gif" title="Cart" /></a></span>
</nav> 
		<!-- Navigation Menu -->
		<ul id="navigation" class="grid_8">
        <?php
			if($role==1){
				echo"<li><a href='capnhap.php'><span class='meta'></span><br />Update<br>&Remove</a></li>";
				echo"<li><a href='addproduct.php'><span class='meta'>New</span><br />Add<br> Product</a></li>";
				echo"<li><a href='addband.php'><span class='meta'>Product</span><br />Add & Remove<br>    Band</a></li>";
			}
			?>
			<li><a href="product.php"><br />Product</a></li>
				
			<li><a href="timkiem-ajax.php"><span class="meta"></span><br />Search</a></li>
			<li><a href="index.php" class="current"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
		
		<div class="hr grid_12">&nbsp;</div>
		<div class="clear"></div>
		
		<!-- Featured Image Slider -->
		<div id="featured" class="clearfix grid_12">
			<ul> 
				<li>
					<a href="product_single.php?masp=28&&id=2">
						<span style="color:#F00; font-weight:bold">41,500,000 VND</span>
						<img src="images/16554_laptop-dell-7737-mnwwf3-i7-4510u-bacc.jpg" alt="" />
					</a>
				</li>  
				<li>
					<a href="product_single.php?masp=36&&id=3">
						<span style="color:#F00; font-weight:bold">34,990,000 VND</span>
						<img src="images/25984_laptop-lenovo-y7070-80du0024vn-denn.jpg" alt="" />
					</a>
				</li>  
				<li>
					<a href="product_single.php?masp=38&&id=4">
						<span style="color:#F00; font-weight:bold">34,500,000 VND</span>
						<img src="images/23985_hp-envy-155.jpg" alt="" />
					</a>
				</li>  
			</ul> 
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Caption Line -->
		<h2 class="grid_12 caption clearfix">Welcome! This is <span>Phu's Store</span></h2>
		
		<div  class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
		<div align="center" id="quicknav" class="grid_12">
			<a class="quicknavgrid_3 quicknav alpha" href="product.php">
					<h4 align="center" class="title ">Product</h4>
					<p style="text-align:center;"><img alt="" src="images/Art_Artdesigner.lv.png" /></p>
				
			</a>
			<a class="quicknavgrid_3 quicknav" href="about.php">
					<h4 class="title ">Learn about us</h4>
					<p style="text-align:center;"><img height="125" alt="" src="images/info.png" /></p>
				
			</a>
            <?php
			if($role==1){
			echo" <a class='quicknavgrid_3 quicknav' href='capnhap.php'> ";
			echo"<h4 class='title'>UPDATE & REMOVE</h4>";
			echo"<p style='text-align:center;'><img width='200' height='125' alt='' src='images/tools-icon.jpg' /></p>";
			echo"</a>";
			}
			?>
		</div>
		<div class="hr grid_12 clearfix">&nbsp;</div>
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
            <a href="#"><img alt="" src="images/twitter.png" title="Twitter" /></a>
            <a href="#"><img alt="" src="images/facebook.png" title="Facebook" /></a>
            <a href="#"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a>
            <a href="#"><img alt="" src="images/flickr.png" title="Flickr" /></a>
            <a href="#"><img alt="" src="images/delicious.png" title="Delicious" />
		</p>
		
	</div><!--end wrapper-->
</body>
</html>
