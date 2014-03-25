<?php

// ---------- MAIN ---------- //

function db_connect() {
	$link = mysqli_connect('localhost','root','root','BJC');
	if(!$link) {
		die('Connect Error: ' . mysqli_connect_errno());
	}
	return $link;
}

// ---------- OTHER ---------- //

function log_page() {
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	// $query="insert into log values('$username','$successful','$time',current_date(),current_time())";
	$result=mysqli_query($con,$query);
	mysqli_close($con);
}

function news_bar(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from news_bar";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['information'];
	mysqli_close($con);
}

// ---------- HOMEPAGE ---------- //

function homepage_details_1(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from homepage";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['text_field_top'];
	mysqli_close($con);
}

function homepage_details_2(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from homepage";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['text_field_middle'];
	mysqli_close($con);
}

function homepage_details_3(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from homepage";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['text_field_bottom'];
	mysqli_close($con);
}

// ---------- HOMEPAGE ---------- //

function history_details_1(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from history";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['text_field_top'];
	mysqli_close($con);
}

function history_details_2(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from history";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['text_field_bottom'];
	mysqli_close($con);
}

// ---------- GALLERY ---------- //

function video_link(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from gallery";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['video_link'];
	mysqli_close($con);
}

// ---------- CONTACT ---------- //

function contact_email(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from contact_info_page";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['email_address'];
	mysqli_close($con);
}

function contact_phone(){
	$con = db_connect();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['PHP_SELF'];
	$query = "select * from contact_info_page";
	$result=mysqli_query($con,$query);
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	echo $data['phone_number'];
	mysqli_close($con);
}

// ---------- EVENTS ---------- //

function sat_events(){
	$con = db_connect();
	$result = mysqli_query($con,"SELECT * FROM events");
	while($row = mysqli_fetch_array($result))
		{
			echo "<tr><td>";
			echo $row['date'] . "</td><td>";
			echo $row['time'] . "</td><td>";
			echo $row['description'] . "</td></tr>";
		}
	mysqli_close($con);
}

// ---------- temp ---------- //


?>