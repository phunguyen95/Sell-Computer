<?php session_start();
if(isset($_REQUEST["logout"]))
 {
	 //xóa thông tin trên session
	 session_destroy();
	 //refetch
	 echo"<script>window.location='index.php';</script>";
 }
$role = $_SESSION["role"]; 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Giỏ Hàng</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<style type="text/css">
<!--
.style2 {
	color: #000099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style3 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
	font-weight: bold;
	color: #009933;
}
.style15 {font-size: smaller}
a:link {
	color: #006633;
}
a:visited {
	color: #006633;
}
a:hover {
	color: #009900;
}
a:active {
	color: #009900;
}
-->
</style>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/style.css" />
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript"  src="js/contact.js"></script>
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
    <script src="jquery.js"></script>
    <script type="text/javascript">		
		$(document).ready(function() { //Start up our Featured Project Carosuel
			 $('#login-trigger').click(function(){
   				 $(this).next('#login-content').slideToggle();
   				 $(this).toggleClass('active');          
    
   				 if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
     			 else $(this).find('span').html('&#x25BC;')
    });
		});
	</script> 
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
    <a href="trang_giao_hang.php"><img alt="" src="images/shopping cart icon.gif" title="Cart" /></a></span>
</nav> 
		
		<!-- Navigation Menu -->
		<ul id="navigation" class="grid_8">
			 <?php
		if($role==1){
				echo"<li><a href='capnhap.php'><span class='meta'></span><br />Update<br>&Remove</a></li>";
				echo"<li><a href='addproduct.php'><span class='meta'>New</span><br />Add<br> Product</a></li>";
				echo"<li><a href='addband.php'><span class='meta'>Product</span><br />Add & Remove<br> Band</a></li>";
			}
			?>
			<li><a href="product.php"><br />Product</a></li>
				
			<li><a href="timkiem-ajax.php"><span class="meta"></span><br />Search</a></li>
			<li><a href="index.php" class="current"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Column 1 / Content -->
		<div class="grid_8">
			<!-- Contact Form -->
          
         <?php include_once("th_giohang.php")?></td>
        
      <p>&nbsp;</p>
      <p align="center" class="style3">&nbsp;</p>
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
