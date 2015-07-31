<?php session_start();

$id = $_POST["id"];
echo "<a href='remove-band2.php?maid=$id'>";
	echo "<table width='250px'><tr align='right'><td><input type='Button' value='REMOVE'></td></tr></table>";
	echo"</a>";
?>
