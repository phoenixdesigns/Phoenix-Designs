<?php
function db_connect() {
	$link = mysqli_connect('localhost','root','root','BJC');

	if(!$link) {
		die('Connect Error: ' . mysqli_connect_errno());
	}
	return $link;
}

function log_page() {
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	// $query="insert into log values('$username','$successful','$time',current_date(),current_time())";
	$result=mysqli_query($con,$query);
	mysqli_close($con);
}
?>