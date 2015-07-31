<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="jquery.js"></script>
<?php
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
$id = $_POST["id"];
if($id>0){
$row = mysql_num_rows(mysql_query("select * from each_product where id = $id"));
  
$Bang_sp = mysql_query("select * from each_product where id = $id") or die(mysql_error());

//Duyet va xuat du lieu
echo "<div class='grid_9'>";

	while($sp = mysql_fetch_row($Bang_sp))
	{ 
		echo "<a class='portfolio_item float alpha ' href='product_single.php?masp=$sp[0] && id=$sp[1]'>";
		echo "<span>".$sp[2]."<br><br><br></span><span style='color:#F00; font-weight:bold'>".number_format($sp[3])." VND</span>";
		echo "<img src='images/".$sp[4]."' width='150'  alt=''/> ";
		echo "</a> ";
	}

echo "</div>";
}

?>