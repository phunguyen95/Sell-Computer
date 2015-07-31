<?php
function Tao_Ket_Noi($tencsdl)
{
$kn = mysql_connect("mysql7.000webhost.com","","");
if(!$kn)
{
	exit;
}
$db = mysql_select_db($tencsdl,$kn);
if(!$db)
{
	exit;
}
}
?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>