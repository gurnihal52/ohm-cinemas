<?php
	 session_start();
     include('connect.php');
     $u = $_POST['username'];
     $p = $_POST['password'];

     $cmd = "select aid from admin_tbl where username='".$u."' AND password='".$p."'";
     $res = mysqli_query($conn, $cmd);
     $num = mysqli_num_rows($res);

     if($num>0)
     {
     	$row = mysqli_fetch_array($res);
     	$_SESSION['aid'] = $row['aid'];	
     	header('location:movie.php');
     }
     else
     {
     	header('location:index.php?error=000');
     }

	 

?>