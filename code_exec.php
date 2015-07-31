<?php
session_start();
include_once("XLCSDL.php");
	Tao_Ket_Noi("qlmaytinh");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
$re_pass=$_POST['re-password'];
$result=mysql_query("INSERT INTO user (mem_id,fname, lname,  address, contact,  username, password,role)VALUES('','$fname', '$lname', '$address', '$contact',  '$username', '$password','2')");

if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='index.php';
    </SCRIPT>");
}
?>