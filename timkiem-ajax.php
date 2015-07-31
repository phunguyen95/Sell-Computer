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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tìm Kiếm</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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
    <script>
		$(document).ready(function(){
 	 		$("#idten").keyup(function(){
    			var tensp=$(this).val();
    			$.get("get.php?ten="+tensp,function(data,status){
     				$("#iddiv").html(data);  
    });//end get 
  });//end key up 
  $('#login-trigger').click(function(){
   				 $(this).next('#login-content').slideToggle();
   				 $(this).toggleClass('active');          
    
   				 if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
     			 else $(this).find('span').html('&#x25BC;')
    });
});//end ready 
	</script>
</head>

<body>
<!-- Text Logo -->
	<div id="wrapper" class="container_12 clearfix">
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
		<form name="form1" method="post" action="timkiem.php">
         <table width="100%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFF00">
        <tr>
          <td width="36%" bordercolor="#FFFFFF" bgcolor="#FFFF00"><blockquote class="style10">
            Product's Name:<input type="text" id="idten"></input></td>
        </tr>
      </table>
    </form></td>
  </tr>
      <td colspan="3" valign="top">
      <div class="catagory_1 clearfix">
     	 <div id="iddiv" class="grid_13">
         
	</td>
			</div>
            </div>