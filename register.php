<?php
session_start();
		include('connect.php');	

		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$cmd="insert into users_tbl (name, mobile, email, password) values('".$name."','".$mobile."', '".$email."', '".$password."')";
		
		if(mysqli_query($conn, $cmd))
		{
			$cmd1 = "select * from users_tbl ORDER BY uid DESC LIMIT 1";
			$res  = mysqli_query($conn, $cmd1);
			$row  = mysqli_fetch_array($res);
			
			$_SESSION['uid']=$row['uid'];

				if(isset($_SESSION['log']))
				{
					unset($_SESSION['log']);
					 $_SESSION['name'] = $row['name'];
					  $_SESSION['mobile'] = $row['mobile'];
					  $_SESSION['email'] = $row['email'];
					header('location:checkout.php');
				}
				else
				{
				header('location:index.php');
				}
		
		}
		else
		{
			header('location:signup.php?error=000');
		}
?>