<?php include('header.php'); ?>

				
			
	<div class="col-md-12 " style="margin-top:0px;">
		
			<div class="col-md-10 col-md-offset-1 feed" style="margin-top:15px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.023331174392!2d75.23381441474486!3d29.69010324217997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39114750cb3ebcf1%3A0xa664627d8187f282!2sOld+Cinema+Rd%2C+Sardulgarh%2C+Punjab+151507%2C+India!5e0!3m2!1sen!2sau!4v1566361593798!5m2!1sen!2sau" width="800" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
			<div style="margin-top:15px; float:left; "><h3>Contact Us</h3><hr>
			
			<p><i class="fa fa-phone"></i> +919646322813</p>
			<p><i class="fa fa-envelope"></i> info@ohmcinema.com</p></div>
		</div>
		
		<div class="col-md-10 col-md-offset-1 feed" style=" margin-top:15px">
			<form action="feed.php" method="post">
			<div class="row"><h3>Send Us Your Message</h3></div>

			<div class="col-md-4">
				<p><label>Your Name</label><input name="name" type="text" placeholder="Your Name" required></p>
			</div>

			<div class="col-md-4">
				<p><label>Your Mobile Number</label><input name="mob" type="text" id="mob1" placeholder="Your Mobile Number" required></p>
			</div>

			<div class="col-md-4">
				<p><label>Your Email Address</label><input name="mail" type="email" placeholder="Your Email Address" required></p>
			</div>

			<div class="col-md-12"><p><label>Your Message</label><textarea name="feedback" placeholder="Your Message" required></textarea></p></div>
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
		

	</div>

<?php include('footer.php'); ?>
