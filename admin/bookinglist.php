<?php include('head.php'); ?>

<div class="container cont">
	<div class="col-md-12 left">
		<h4>Booking List</h4>
		<div class="clearfix"></div>
		
		<table class="table table-bordered table-striped" style="font-size:13px;">
				<tr>
					<th>S.No.</th>
					<th>Booking Date</th>
					<th>Name</th>
					<th>Movie</th>
					<th>Show Date / Time</th>
					<th>Seat No.</th>
					<th>Amount Paid</th>
					<th>Txn No.</th>
					
				</tr>

				<?php
					$cmd="select * from booking_tbl ORDER BY oid DESC";
					$result = mysqli_query($conn, $cmd);
					$sn=0;
					while($row = mysqli_fetch_array($result))
					{
						$sn++;
				?>		
					<tr>
							<td><?php echo $sn; ?> </td>
							<td><?php echo $row[2]; ?> </td>
							<td><?php 
							    $cmd1="select * from users_tbl where uid ";
								$result1 = mysqli_query($conn, $cmd1);
								$row1= mysqli_fetch_array($result1);
								echo strtoupper($row1[1])." - ".$row1[2]; 
							?> </td>
							<td><?php echo strtoupper($row[5]); ?> </td>
							
							<td><?php echo $row[3]." - ".$row[4] ; ?> </td>
							<td><?php echo str_replace(" ", ", ", $row[6]); ?> </td>
							<td><?php echo $row[7]; ?> </td>
							<td><?php echo $row[8]; ?> </td>
							
							
					</tr>	

				<?php
					}

				?>
		</table>
	</div> 

</div>





</body>
</html>



