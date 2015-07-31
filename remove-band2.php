<?php
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
if(isset($_REQUEST["maid"])){
$loai = $_REQUEST["maid"];
$demsp = "select count(*) from each_product where id = $loai";
$dem = mysql_query($demsp);
if($dem>0){
$str="select * from each_product where id='$loai'";
$rs=mysql_query($str);	
while($sp= mysql_fetch_row($rs))
{
	$delete = "DELETE FROM each_product WHERE id=$loai";
	mysql_query($delete);
}
}
$caulenh = "DELETE FROM products WHERE id=$loai";
mysql_query($caulenh);
echo ("<SCRIPT LANGUAGE='JavaScript'>
  	  window.alert('Succesfully Removed')
   	window.location.href='addband.php';
   	</SCRIPT>");
}
			
?>