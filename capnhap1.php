<?php
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
//Lấy dữ liệu trong biến “ma”
$ma=$_POST['id'];
$str="select * from each_product where id='$ma'";
$rs=mysql_query($str);
echo "<div class='grid_8'>";
echo "Product:";
echo "<select id='masp'>";
echo "<option>----------------------------------------------------------------</option>";
while($row=mysql_fetch_row($rs))
{
    echo "<option value='$row[0]'>".$row[2];
    echo "</option>";
}
echo "</select>"; 
echo "</div>";

?>
