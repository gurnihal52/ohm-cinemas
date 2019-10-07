<?php

	include('connect.php');

	 $mid   = $_GET['mid'];

	 $cmd  = "SELECT * from upmovies where mid='".$mid."'";

	 $result  = mysqli_query($conn, $cmd);
	 
	 $num  = mysqli_num_rows($result);

			$row=mysqli_fetch_array($result);
	 		$n=strtoupper($row[1]);
	 		$id=$row[0];
	       
	 		?>
	 		<script>

			   document.getElementById('md').click(); 
	 		  
	 		 </script>


<!-- Trigger the modal with a button -->
<button id="md" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="display:none;">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <p class="modal-title"><strong>Upcoming Movie</strong></p>
      </div>
      <div class="clearfix"></div>
      <div class="modal-body">
			
			<div class="col-md-6">
				
			
			<img src="upcoming/<?php echo $row[5]; ?>" width="100%">
						
				
			
			</div>
			<div class="col-md-6" >
		       
		        <br>
		        <p><strong><?php echo $row[1]; ?> </strong></p>
		        <br>
		        <p><span>Genre:</span> <?php echo $row[2]; ?> </p>
		        <br>
		        <p><span>Release Date:</span> <?php echo $row[3]; ?> </p>
		        <br>
		        <p class="text-justify"><span>Synopsis:</span> <?php echo $row[6]; ?> </p>
		        <br>
		        <p><a href="<?php echo $row[4]; ?>" target="_blank" class="button"><i class="fa fa-youtube-play"></i> Watch Trailer</a></p>
		  
     
			</div>

			
			<div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>