<?php
session_start();
$_SESSION['error']="";

if (empty($_REQUEST['securityentry'])) {
	$_SESSION['error']="<p>Please supply an answer</p>";
	header("location: dpassword2.php");
}
else {
		$link = mysqli_connect('localhost','root','root','BJC');
		$query = "select * from security where security_question_answer='" . $_REQUEST['securityentry'] . "' and emailaddress='" . $_SESSION['user_email'] ."'";
		$result = mysqli_query($link,$query);
		$num_rows = mysqli_num_rows($result);
		mysqli_close ($link);
		//echo $query;
		if($num_rows>0) {
			$_SESSION['security']=$_REQUEST['securityentry'];
			header('location: demail.php');
			exit;
		}
		else {
			$_SESSION['error']="<p>This answer is incorrect</p>";
			header("location: dpassword2.php");
		}
	}
?>