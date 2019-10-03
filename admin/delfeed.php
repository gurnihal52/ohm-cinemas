<?php
include('connect.php');

    $fid = $_GET['fid'];

    $cmd="delete from feed where fid=".$fid;
    mysqli_query($conn, $cmd);

    header('location:feedback.php');

?>