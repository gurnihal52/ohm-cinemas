<?php
include('connect.php');

    $mid = $_GET['mid'];

    $cmd="delete from movies where mid=".$mid;
    mysqli_query($conn, $cmd);

    header('location:movielist.php');

?>