<?php session_start(); 
if(isset($_REQUEST["logout"]))
 {
	 //xóa thông tin trên session
	 session_destroy();
	 //refetch
	 echo"<script>window.location='index.php';</script>";
 }
$role = $_SESSION["role"];
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
$masp = $_REQUEST["masp"];
$id = $_REQUEST["id"];
$tensp = mysql_query("select * from products where id=" .$id);
$ten = mysql_fetch_row($tensp);

$thong_tin_sp = mysql_query("select * from each_product where masp=" .$masp);
$thong_tin=mysql_fetch_row($thong_tin_sp);
?>
<?php
	 if(isset($_REQUEST["masanpham"]))
{
	echo"<script>alert('Đã thêm vào giỏ hàng');</script>";
	$mahoamua=$_REQUEST["masanpham"];
	 $giohang=$_SESSION["giohang"];
	if(isset($giohang[$mahoamua]))//hoa da mua
	  $giohang[$mahoamua]++;
	else
	 $giohang[$mahoamua]=1;
	$_SESSION["giohang"]=$giohang;
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='product_single.php?masp=$masp&&id=$id';
    </SCRIPT>");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Chi tiết sản phẩm</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/style.css" />
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-shapes-1.1.js"></script>
	<script type="text/javascript">			
		$(document).ready(function() { //Start up our Project Preview Carosuel
			$('ul#folio_scroller').roundabout({
				easing: 'easeOutInCirc',
				shape: 'waterWheel',
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
       <a href="trang_giao_hang.php"><img width="30" alt="" src="images/shopping cart icon.gif" title="Cart" /></a></span>
 	
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
		
		<!-- Column 1 / Project Information -->
		<div class="grid_4">
		<h4 class="title"><?php echo "$thong_tin[2]";?></h4>
		<div class="hr dotted clearfix" >&nbsp;</div>
			<?php 
				echo "$thong_tin[5]";
			?><br /><br />


            <p style="font-size:24px; color:#F00"><?php echo "".number_format($thong_tin[3])." VND"; ?></p>
		  <p class="clearfix">
				<a href="product.php" class="button float">&lt;&lt; Back to Product</a>
                <?php
				
				echo"<a href='product_single.php?masp=".$thong_tin[0]."&&masanpham=".$thong_tin[0]."&&id=".$thong_tin[1]."'class='button float right'>Buy</a>;";
				?>
			</p>
		</div>
		
		<!-- Column 2 / Image Carosuel -->
        
		<div id="folio_scroller_container" class="grid_8 cleafix">
        
			<ul id="folio_scroller"> 
            
					<li><?php  echo "<a href='#'><img alt='' src='images/$thong_tin[4]' /></a>" ?></li> 
					
			</ul> 
		</div>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Client pickup line -->
		<h2 class="grid_12 caption"> <a href="contact.html"><span>Get in touch...</span></a></h2>
		
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
