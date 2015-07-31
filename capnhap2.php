<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
<?php session_start();
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
$masp=$_POST['masp'];


?>
<?php

$str="select * from each_product where masp='$masp'";
$rs=mysql_query($str);

while($sp= mysql_fetch_row($rs))
{
	echo "<div  class='grid_8'>";
	echo "<form action='capnhap.php?masp=$masp' method='post' enctype='multipart/form-data' name='form1'>";
		echo "<hr><table>";
		echo "<tr><td>Product's Name:</td><td><input placeholder='(Nếu không cần thay đổi thì không cần điền)' size='45' type='text' id='name' name='name' value='' ></input></td></tr>";
		echo "<tr><td>Price:</td><td> <input placeholder='(Nếu không cần thay đổi thì không cần điền)' size ='45' type='text' name='price' id='price' >VND</input></td></tr>";
		echo "<tr><td>Images:</td><td> <input  name='file' id='file' type='file' size='45'></input></td></tr>";
		echo "<tr><td>Detail:</td><td><input placeholder='(Nếu không cần thay đổi thì không cần điền)' size='45' type='text' name='detail' id='detail' ></input></td></tr>";
		echo "<tr align='right'><td><input type='Submit' value='UPDATE'></td><td><a href='remove.php?masp=$masp'><input type='Button' value='REMOVE'></a>";
		echo "</table>";
		echo "</form>";
		echo "</div>";
    echo "<div class='grid_4'><a class='portfolio_item float alpha ' href='product_single.php?masp=$masp&&id=$sp[1]'>";
		echo "<span>".$sp[2]."<br><br><br></span><span style='color:#F00; font-weight:bold'>".number_format($sp[3])." VND</span>";
		echo "<img src='images/".$sp[4]."'  alt=''/> ";
		echo "</a></div> ";
		
		
}

?>
