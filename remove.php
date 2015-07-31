<?php
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");
if(isset($_REQUEST['masp'])){
$masp=$_REQUEST['masp'];
$caulenh="DELETE FROM each_product where masp=$masp";
mysql_query($caulenh);
 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Removed')
    window.location.href='capnhap.php';
    </SCRIPT>");
}

?>