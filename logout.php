<?php
if(isset($_SESSION["lname"]))
 {
	 
	  	 echo"Chào <span  style='font-weight:bold;font-size:20px'>".$_SESSION["lname"]; echo "</span>";
	 echo"<span>       </span><span style='color:#F00;'><a href='index.php?logout=1'> <u>Logout</u></a></span>";
	 }
?>