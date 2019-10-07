<?php include('head.php'); ?>

<div class="container cont">
	<div class="col-md-12 left">
		<h4>List of Movies</h4>
		<div class="clearfix"></div>
		
		<table class="table table-bordered table-striped" style="font-size:13px;">
				<tr>
					<th>S.No.</th>
					
					<th>Movie Name</th>
					<th>Genre</th>
					<th>Release Date</th>
					<th>Synopsis</th>
					<th>Delete</th>
				</tr>

				<?php
					$cmd="select * from upmovies ORDER BY mid DESC";
					$result = mysqli_query($conn, $cmd);
					$sn=0;
					while($row = mysqli_fetch_array($result))
					{
						$sn++;
				?>		
					<tr>
							<td><?php echo $sn; ?> </td>
							<td><?php echo $row[1]; ?> </td>
							<td><?php echo $row[2]; ?> </td>
							<td><?php echo $row[3]; ?> </td>
							
							<td><?php echo $row[6]; ?> </td>
							
							<td><a href="delupmovie.php?mid=<?php echo $row[0]; ?>"><i class="fa fa-times fa-2x text-danger"></i></a></td>
					</tr>	

				<?php
					}

				?>
		</table>
	</div> 

</div>





</body>
</html>



