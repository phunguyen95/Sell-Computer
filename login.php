
<?php
if(isset($_POST["ten_dn"]))
 {
	 $tendn=$_POST["ten_dn"];
	 $matkhau=$_POST["mat_khau"];
	 include_once("XLCSDL.php");
	Tao_Ket_Noi("qlmaytinh");
	$Bangkh=mysql_query("select * from user where username='$tendn' and password='$matkhau'");
	if(mysql_num_rows($Bangkh)>0)
 {
	 $kh=mysql_fetch_row($Bangkh);
	 $_SESSION["mem_id"]=$kh[0];
	 $_SESSION["lname"]=$kh[4];
	 $_SESSION["contact"]=$kh[6];
	 $_SESSION["role"]=$kh[7];
	 $role = $_SESSION["role"];
	 if($role == 1)
	 {
		echo "<script>alert('Chào quản trị viên') </script>"; 
	 }
	 //refetch trang 1
	 else{
	   echo"<script>alert('Chào $kh[4]');</script>";
	 }
	   echo"<script>window.location='index.php';</script>";
	

	 }
else
 echo"<script>alert('Đăng nhập sai');</script>";
 }
?>
<nav>
  <ul>
    <li id="login">
      <a id="login-trigger" href="#">
        Log in <span>▼</span>
      </a>
      <div id="login-content">
        <form id="form1" name="form1" method="post" action="index.php">
          <fieldset id="inputs">
            <input id="username" type="text" name="ten_dn" placeholder="Your username" required>   
            <input id="password" type="password" name="mat_khau" placeholder="Password" required>
          </fieldset>
          <fieldset id="actions">
            <input type="submit" id="submit" value="Log in" style="margin-right:45px"> <a href="register.php"><input type="button" id="signup" value="Register" /></a>
            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
          </fieldset>
        </form>
      </div>                     
    </li>