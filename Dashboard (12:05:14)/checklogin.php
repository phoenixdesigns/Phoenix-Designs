<?php
session_start();
$_SESSION['error']="";

if (empty($_REQUEST['username'])) $_SESSION['error'].="<p>Please supply a username</p>";
if (empty($_REQUEST['password'])) $_SESSION['error'].="<p>Please supply a password</p>";

if ($_SESSION['error']) header("location: dlogin.php");



$link = mysqli_connect('localhost','root','root','BJC');
$query = "select * from userdetails where Username='" . $_REQUEST['username'] . "' and Password='" . $_REQUEST['password'] . "'";
$result = mysqli_query($link,$query);
$num_rows = mysqli_num_rows($result);
mysqli_close ($link);
if($num_rows>0) {
	$_SESSION['username']=$_REQUEST['username'];
	header('location: dopen.php');
}
	else {
		$_SESSION['error'].="<p>Unknown Username/Password</p>";
		header("location: dlogin.php");
	}
?>