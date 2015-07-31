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
$echo = 0;
if(isset($_REQUEST['masp'])){
$masp=$_REQUEST['masp'];
}
if(isset($_POST["name"])){
	$tensp=$_POST["name"];
	if($tensp!=NULL || $tensp!=""){
		$caulenh="UPDATE each_product SET tensp='$tensp' where masp='$masp'";
		mysql_query($caulenh);
		$echo = 1;
	}
if(isset($_POST["price"])){
	$price=$_POST["price"];
	if($price!=NULL || $price!=""){
		$caulenh="UPDATE each_product SET dongia='$price' where masp='$masp'";
		mysql_query($caulenh);
		$echo = 1;
	}
}
if(isset($_FILES["file"])){
	$hinh=$_FILES["file"]["name"];
	if($hinh!=NULL || $hinh!=""){
		$caulenh="UPDATE each_product SET hinh='$hinh' where masp='$masp'";
		mysql_query($caulenh);
		 move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);
		 $echo = 1;
	}
}
if(isset($_POST["detail"])){
	$mota=$_POST["detail"];
	if($mota!=NULL || $mota!=""){
		$caulenh="UPDATE each_product SET mota='$mota' where masp='$masp'";
		mysql_query($caulenh);
		$echo = 1;
	}
}
if($echo ==1) {
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='capnhap.php';
    </SCRIPT>");
}
}

?>
     
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("#idsp").change(function(){
    var idsp=$("#idsp").val();  
    $.post("capnhap1.php",
    {
      id:idsp,  
    },
    function(data,status){
      if(status=="success")
      {
        $("#iddiv").html(data);  
        $("#masp").change(function(){
            var masp=$("#masp").val();
            $.post("capnhap2.php",
            {
                masp:masp 
            },
            function(data,status){
				if(status=="success")
				{
                $("#iddiv1").html(data); 
				}
				
            })
        });
      }
    });
  });
});
</script>

   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Update</title>
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

		<!-- Column 1 / Content -->
		
			<!-- Contact Form --><div class="grid_8">
			<form action="addband.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="70%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
          <?php 
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
$str="select * from products";
        $rs=mysql_query($str);
        echo "Band:";
        echo "<select id='idsp'>"; 
        echo "<option>----------------------</option>";
        while($row=  mysql_fetch_row($rs))
        {
            echo "<option value='$row[0]'>".$row[1]."</option>";
        }
        echo "</select>";
   
?>
          </tr>
          <tr>
          
          </tr>
          
         <!-- <tr>
            <td height="35" colspan="2"><p align="center">
              <label>
              <input type="submit" name="Submit" value="Submit">
              </label>
            </p></td>
          </tr> -->
        </table>
      </form>
      </div>
	<br />
   <div id="iddiv"></div> <br />
   <div id="iddiv1"></div>
		
		
		<!-- Column 2 / Sidebar -->
		<!--<div class="grid_4 contact">
		
			<!-- Adress and Phone Details -->
			<!--<h4>About us</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li> 
					Nguyễn Vũ Thiên Phú - 1359015<br /> 
					Trẫn Vũ Minh Triết - 1359018<br /> 
					Nguyễn Phan Hoài Nam - 1359020<br />
                    Đặng Văn Long - 1359024<br /> 
				</li> 
			</ul> 
			
			<!-- Email Addresses -->
			
			
			<!-- Social Profile Links -->
			<!--<h4>Social Profiles</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li class="float"><a href="#"><img alt="" src="images/twitter.png" title="Twitter" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/facebook.png" title="Facebook" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/flickr.png" title="Flickr" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/delicious.png" title="Delicious" /></a></li> 
			</ul> 
			
		</div>-->
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>