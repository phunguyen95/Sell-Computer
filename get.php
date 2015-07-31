<?php
    
    if(isset($_REQUEST["ten"]))
	 {
	 include_once("XLCSDL.php");
	Tao_Ket_Noi("qlmaytinh");
	$tensp=$_REQUEST["ten"];
	if($tensp!=NULL || $tensp!=""){
	$row=mysql_query("select * from each_product where tensp like '%".$tensp."%'");
    if(mysql_num_rows($row))
    {
        while($rs= mysql_fetch_row($row))
        {
            echo "<a class='portfolio_item float' href='product_single.php?masp=$rs[0] && id=$rs[1]'>";
			echo "<span>".$rs[2]."<br><br><br></span><span style='color:#F00; font-weight:bold'>".number_format($rs[3])." VND</span>";
			echo "<img src='images/".$rs[4]."' width='150'  alt=''/> ";
			echo "</a> ";
        }
    }
	else
		echo"Không tìm thấy sản phẩm vui lòng tìm kiếm lại";
	 }
	 }
?>
