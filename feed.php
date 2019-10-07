<?php

	include('connect.php');

	$name = $_POST['name'];
	$mob = $_POST['mob'];
	$mail = $_POST['mail'];
	$feed = $_POST['feedback'];
	$dt  = date('d-m-Y');
	$cmd = "insert into feed (date, name, mobile, email, feedback) values('".$dt."','".$name."','".$mob."','".$mail."','".$feed."')";
	mysqli_query($conn, $cmd);

	header('location:contact.php?ok=111');
?>