<?php include('header.php'); ?>

				
			
	<div class="col-md-12 " style="margin-top:0px;">
		<div class="col-md-10 col-md-offset-1 feed" style="margin-bottom:0px; ">
			<h3>Write Us On </h3>
			<hr>
			<p>We would like to hear from you</p>
			<p><i class="fa fa-envelope"></i> feedback@ohmcinema.com</p>
		</div>
		<div class="col-md-10 col-md-offset-1 feed" style=" margin-top:15px">
			<form action="feed.php" method="post">
			<div class="row"><h3>Give your Feedback</h3></div>

			<div class="col-md-4">
				<p><label>Your Name</label><input name="name" type="text" placeholder="Your Name" required></p>
			</div>

			<div class="col-md-4">
				<p><label>Your Mobile Number</label><input name="mob" type="text" id="mob1" placeholder="Your Mobile Number" required></p>
			</div>

			<div class="col-md-4">
				<p><label>Your Email Address</label><input name="mail" type="email" placeholder="Your Email Address" required></p>
			</div>

			<div class="col-md-12"><p><label>Your FeedBack</label><textarea name="feedback" placeholder="Your FeeBack" required></textarea></p></div>
			<div class="col-md-4">
				<input type="submit" value="SEND" class="button">
			</div>
			<div class="clearfix"></div>
			<p style="color:#f00"><?php 
					if(isset($_GET['ok']))
					{
						echo "Thank you for your valueable feedback...";
					}
			?></p>
			</form>
		</div>

		<div class="clearfix"></div>
		<div class="col-md-10 col-md-offset-1">
			
			
		</div>

	</div>

<?php include('footer.php'); ?>