<?php
    include('connect.php');

    $screen		= $_POST['screen'];
    $movie		= $_POST['movie'];
    $genre		= $_POST['genre'];
    $rdate		= $_POST['rdate'];
    $sdate		= $_POST['sdate'];
    $link		= $_POST['link'];
    $small		= basename($_FILES['small']['name']);
    $large		= basename($_FILES['large']['name']);
    $synopsis	= $_POST['synopsis'];

    $cmd = "insert into movies (screen, movie_name, genre, release_date, show_date, link, small_poster, large_poster, synopsis) values('$screen','$movie','$genre','$rdate','$sdate','$link','$small','$large','$synopsis')";

    if(mysqli_query($conn, $cmd))
    {
    move_uploaded_file($_FILES['small']['tmp_name'], "../posters/".$small);
    move_uploaded_file($_FILES['large']['tmp_name'], "../posters/".$large);
	header('location:movie.php?msg=000');
	}
	else
	{
			echo mysqli_error($conn);
	}
    

?>
