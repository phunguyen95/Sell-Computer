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
<script>
$(document).ready(function(){
  $("#idsp").change(function(){
    var idsp=$("#idsp").val();  
    $.post("remove-band.php",
    {
      id:idsp,  
    },
    function(data,status){
      if(status=="success")
      {
        $("#iddiv").html(data); 
	  }
	})
  });
});
</script>
<?php 
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
if(isset($_POST["ten_sp"]))
 {
	 $tensp=$_POST["ten_sp"];
	 if($tensp!=NULL || $tensp!=""){
	 $caulenh="insert into products(id,product_name)values(NULL,'".$tensp."')";
	 mysql_query($caulenh);
	 //upload file
	echo"<script>alert('SUCCESSFULLY ADDED');</script>";
	 }
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Thêm Hãng</title>
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
    <script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$("#idsp").change(function(){
		var idsp=$("#idsp").val();
		 $.post("remove-band.php",
    	{
     	 id:idsp,  
   		 },
		 function(data,status){
      		if(status=="success")
      		{
       		 $("#iddiv").html(data); 
			}
		 })
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
		<div class="grid_8">
			<!-- Contact Form -->
			<form action="addband.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="70%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
          <tr bgcolor="#99CCFF">
            <td colspan="2"><div align="center" class="style4"><b> ADD BAND </b></div></td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td width="50%"><p class="style10">&nbsp;Band's Name: </p></td>
            <td width="74%"><label>
              <input name="ten_sp" type="text" id="ten_sp" size="35">
            </label></td>
          </tr>
          
          <tr>
            <td height="35" colspan="2"><p align="center">
              <label>
              <input type="submit" name="Submit" value="Submit">
              </label>
            </p></td>
          </tr>
          <tr bgcolor="#99CCFF">
            <td colspan="2"><div align="center" class="style4"><b> Remove Band </b></div></td>
            </tr>
            <tr>
            
            <?php
				include_once("XLCSDL.php");
				Tao_Ket_Noi("qlmaytinh");
				$str="select * from products";
        	$rs=mysql_query($str);
        	echo "<td>Band:</td>";
			echo "<td>";
       		 echo "<select id='idsp'>"; 
       		 echo "<option>----------------------</option>";
        	while($row=  mysql_fetch_row($rs))
        	{
            echo "<option value='$row[0]'>".$row[1]."</option>";
       		 }
      		  echo "</select>";
   			echo "</td>";
			 ?>
             </tr>
            <tr>
            <td colspan="2"><div id="iddiv"></div></td>
            </tr>
             
             
        </table>
      </form>
		</div>
		
		<!-- Column 2 / Sidebar -->
		<div class="grid_4 contact">
		
			<!-- Adress and Phone Details -->
			<h4>About us</h4> 
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
			<h4>Social Profiles</h4> 
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul> 
				<li class="float"><a href="#"><img alt="" src="images/twitter.png" title="Twitter" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/facebook.png" title="Facebook" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/stumbleupon.png" title="StumbleUpon" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/flickr.png" title="Flickr" /></a></li> 
				<li class="float"><a href="#"><img alt="" src="images/delicious.png" title="Delicious" /></a></li> 
			</ul> 
			
		</div>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>