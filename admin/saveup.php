<?php
    include('connect.php');

   
    $movie		= $_POST['movie'];
    $genre		= $_POST['genre'];
    $rdate		= $_POST['rdate'];
   
    $link		= $_POST['link'];
    $small		= basename($_FILES['small']['name']);
   
    $synopsis	= $_POST['synopsis'];

    $cmd = "insert into upmovies ( movie_name, genre, release_date,  link, small_poster, synopsis) values('$movie','$genre','$rdate', '$link','$small','$synopsis')";

    if(mysqli_query($conn, $cmd))
    {
    move_uploaded_file($_FILES['small']['tmp_name'], "../upcoming/".$small);
   
	header('location:upcoming.php?msg=000');
	}
	else
	{
			echo mysqli_error($conn);
	}
    

?>
