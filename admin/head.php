<?php 
session_start();
include('connect.php'); 
if(!isset($_SESSION['aid']))
{
	header('location:index.php');
}

?>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<link rel="stylesheet" type="text/css" href="../css/dhtmlx.css">
		<script type="text/javascript" src="../js/dhtmlx.js"></script>
	</head>
<body>

<nav class="navbar menu">
	<div class="container">
			<div class="navbar-header">

					<img src="../images/logo.png" >
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="movie.php">Movies</a>
					<ul class="dropdown-menu">
						<li><a href="movie.php">Add Movies</a></li>
						<li><a href="movielist.php">Movie List</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="upcoming.php">Upcomings</a>
					<ul class="dropdown-menu">
						<li><a href="upcoming.php">Add Movies</a></li>
						<li><a href="uplist.php">Movie List</a></li>
					</ul>
				</li>
				<li><a href="bookinglist.php">Booking List</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
			</ul>
	</div>
</nav>
<div class="clearfix"></div>