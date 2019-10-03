<?php include('head.php'); ?>

<div class="container cont">
	<div class="col-md-12 left">
		<h4>Feedback List</h4>
		<div class="clearfix"></div>
		
		<table class="table table-bordered table-striped" style="font-size:13px;">
				<tr>
					<th>S.No.</th>
					<th>Date</th>
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Feedback</th>
					<th>Delete</th>
				</tr>

				<?php
					$cmd="select * from feed ORDER BY fid DESC";
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
							
							<td><?php echo $row[4]; ?> </td>
							<td><?php echo $row[5]; ?> </td>
							
							<td><a href="delfeed.php?fid=<?php echo $row[0]; ?>"><i class="fa fa-times fa-2x text-danger"></i></a></td>
					</tr>	

				<?php
					}

				?>
		</table>
	</div> 

</div>





</body>
</html>



