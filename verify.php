<?php

		include('connect.php');	
		$mob = $_GET['m'];

			$cmd = "select uid from users_tbl where mobile='".$mob."'";
			$res  = mysqli_query($conn, $cmd);
			$num = mysqli_num_rows($res);

			if($num>=1)
			{
			?>
			<div class="alert alert-danger alert-dismissible fade in" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Error!</strong> User already exist with this Mobile Number.
				</div>
				<script>
					document.getElementById("mob").value="";
					document.getElementById("mob1").value="";
				</script>
			<?php	
				
			}

?>