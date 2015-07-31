<form name="form1" method="post" action="">
 <script src="jquery.js"></script>
<?php session_start();
include_once("XLCSDL.php");
Tao_Ket_Noi("qlmaytinh");

//select * from hoa where mahoa in(1,2,4,)
//xử lý cập nhật số lượng
	 //Xu ly mua hang
	 if(isset($_POST["dathang"]))
	  {//Kiểm tra khách hàng đã đăng nhập
	  	if(isset($_SESSION["mem_id"]))
		  {
			  $mem = $_SESSION["mem_id"];
			//Ghi dữ liệu vào bảng đơn DH
			$a="INSERT INTO order(number,mem_id) VALUES (NULL,$mem)";
			  mysql_query($a);
			//Lấy số DH mới thêm vào
			$caulenh="SELECT LAST_INSERT_ID()";
			$bang=mysql_query($caulenh);
			$dondh=mysql_fetch_row($bang);
			$sodh=$dondh[0];
			//thêm dữ liệu vào bảng ctdondh
			$caulenh="insert into detail_order(number,contact_numb,count,Dongia) value (NULL,0122,2,1000000)";
			$giohang=$_SESSION["giohang"];
			//lấy đơn giá
			//duyệt qua gio hang lấy các mã hoa
	 foreach($giohang as $ma=>$sl)
	  $dsmh=$ma.",";
	  //dsmh=1,2,4,
	  $dsmh=substr($dsmh,0,strlen($dsmh)-1);
	  //dsmh=1,2,4
	  	 $caulenh1="select * from each_product where masp in(".$dsmh.")";
	 	$bangsp=mysql_query( $caulenh1);
	 while($sp=mysql_fetch_row($bangsp))
	 {
		 $caulenh="(".$sp[0].",".$giohang[$sp[0]].",".$sp[3]."),";
	}
	$caulenh=substr($caulenh,0,strlen($caulenh)-1);
	mysql_query($caulenh);
	echo"<script>alert('Bạn đã đặt hàng thành công');</script>";
 unset($_SESSION["giohang"]);
 
	}
	else//chưa đăng nhập
	 echo "<script>alert('Bạn phải đăng nhập trước khi mua hàng')</script>";
	  }
if(isset($_SESSION["giohang"]))
 {
	
if(isset($_POST["capnhat"]))
 {
	 $giohang=$_SESSION["giohang"];
	 foreach($giohang as $ma=>$sl)
	  {
		  if(is_numeric($_POST["sl".$ma]))
		  {
			  $sl=$_POST["sl".$ma];
			  if($sl>0 ) 
		 		 $giohang[$ma]=$_POST["sl".$ma];
		  }
		 }
		$_SESSION["giohang"]=$giohang; 
	 }
//Xu ly xoa
if(isset($_REQUEST["mahoaxoa"]))
{
	$giohang=$_SESSION["giohang"];
	unset($giohang[$_REQUEST["mahoaxoa"]]);
	$_SESSION["giohang"]=$giohang;
}
//hiển thị
	 $giohang=$_SESSION["giohang"];
	 $dsmh="";
	 //duyệt qua gio hang lấy các mã hoa
	 foreach($giohang as $ma=>$sl)
	  $dsmh.=$ma.",";
	  //dsmh=1,2,4,
	  $dsmh=substr($dsmh,0,strlen($dsmh)-1);
	  //dsmh=1,2,4
	  if($dsmh>0){
	  	 $caulenh="select * from each_product where masp in(".$dsmh.")";
	 include_once("XLCSDL.php");
	Tao_Ket_Noi("qlmaytinh");
	 $bangsp=mysql_query( $caulenh);
	 $tong=0;
	  $hienthi=0;
	 if(mysql_num_rows($bangsp))
	 {
		 echo"<table height='500px' width='1000px' border='1'><tr><td width='100px'>STT</td><td width='300px'>Product Name</td><td  width='200px'>Image</td><td>Count</td><td>Price</td><td><Delete</td></tr>";
		 $stt=1;
		 while($sp=mysql_fetch_row($bangsp))
		 {
			 echo"<tr><td>".$stt."</td>
			 <td>".$sp[2]."</td>
			 <td><img src='images/".$sp[4]."'width='150'/></td>
			 <td> <input size=10px type='text' name='sl".$sp[0]."' masp='sl".$sp[0]."' value='".$giohang[$sp[0]]."' /></td>
			 <td width='150px'>".number_format($giohang[$sp[0]]*$sp[3])." VND</td>
			 <td><a href='trang_giao_hang.php?mahoaxoa=".$sp[0]."'>Xóa</a>
			 </td>
			 </tr>";
			 $hienthi=1;
			 $stt++; 
			 $tong = $tong + $giohang[$sp[0]]*$sp[3];
			 }
		}
		echo "<tr height='50px'></tr>";
	if($hienthi==1){
		echo"<tr><td></td><td></td><td></td><td>Tổng</td><td width='150px'>".number_format($tong)." VND</td><td></td></tr>";
	echo"<tr><td colspan='6' align='center'><input type='submit' name='capnhat' id='capnhat' value='Cập nhật'> <input type='submit' name='dathang' id='dathang' value='Đặt Hàng'></td></tr>";
	}
	echo"</table>";
	}
 }
?>

