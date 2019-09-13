

<?php include('header.php'); ?>

<?php
	if(!isset($_SESSION['uid']))
	{
		header('location:login.php');
	}

?>	

			
		  
				<div class="clearfix"></div>

			<div class="container" style="margin-top:25px;">
					
				
				<div class="col-md-12 pro">
					<p><span id="pro">Profile</span><span id="ord">Order History</span></p>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-md-12 profile" id="profile">
					<div class="col-md-6">
						<?php
							$cmd = "select * from users_tbl where uid=".$_SESSION['uid'];
							$res  = mysqli_query($conn, $cmd);
							$row  = mysqli_fetch_array($res);
						?>
						<p><strong>Personal info:</strong></p>
						<p><span>Your Name:</span> <?php echo strtoupper($row['name']); ?></p>
						<p><span>Mobile No.:</span> <?php echo $row['mobile']; ?></p>
						<p><span>Email:</span> <?php echo $row['email']; ?></p>
	
					</div>
					<div class="col-md-6">
						<p><strong>Change Password:</strong></p>
						<form action="change.php" method="post">
						<p><input type="password" name="cp" placeholder="Current Password" required ></p>
						<p><input type="password" name="np" placeholder="New Password" required pattern=".{6,}" title="Password length must be 6 or more"></p>
						<p><input type="submit" value="SAVE" class="btn btn-warning"></p>
						</form>
						<p class="text-danger">
							<?php
							if(isset($_GET['error']))
							{
								 if($_GET['error']=="111")
									 {
										echo "Incorrect Current Password";
									 }
									 else
									 {
									 	echo "New Password Saved...";
									 }
							}	
						    ?> 
						</p>
					</div>
				</div>
				<div class="col-md-12 history table-responsive" id="history">
					<table class="table table-striped">
							<tr>
							<th>S.No.</th>
							<th>Booking Date</th>
							
							<th>Movie</th>
							<th>Show Date / Time</th>
							<th>Seat No.</th>
							<th>Amount Paid</th>
							<th>Txn No.</th>
							</tr>
							<?php
					$cmd="select * from booking_tbl where uid='".$_SESSION['uid']."' ORDER BY oid DESC";
					$result = mysqli_query($conn, $cmd);
					$sn=0;
					while($row = mysqli_fetch_array($result))
					{
						$sn++;
				?>		
					<tr>
							<td><?php echo $sn; ?> </td>
							<td><?php echo $row[2]; ?> </td>
							
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
			
		

<div class="clearfix"></div>			
<br><br><br><br><br><br>



<?php include('footer.php'); ?>





<script>
   $("#footer").addClass("navbar-fixed-bottom col-md-offset-1");
</script>