<?php
include('connect.php');

    $mid = $_GET['mid'];

    $cmd="delete from upmovies where mid=".$mid;
    mysqli_query($conn, $cmd);

    header('location:uplist.php');

?>