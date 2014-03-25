<?php
function db_connect() {
	$link = mysqli_connect('localhost','root','root','BJC');

	if(!$link) {
		die('Connect Error: ' . mysqli_connect_errno());
	}
	return $link;
}
?>