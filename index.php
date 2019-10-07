
<?php include('header.php'); ?>

	

			<div class="col-md-12 banner" style="margin-top:0px;">
				
				<?php include('slider.php'); ?>
			</div>

		  <div class="clearfix"></div>
		  <div class="col-md-4 mid-left">
				<p>Don't be late,</p>
				<h1>Book your ticket now!</h1>
				<p>Easy, simple & fast.</p>

		  </div>

			<div class="col-md-8 list">
				<?php
                 
                    $cmd="select * from movies ORDER BY mid DESC LIMIT 4";
                    $result = mysqli_query($conn, $cmd);
                    $sn=0;
                    while($row = mysqli_fetch_array($result))
                    {
                        $sn++;
                ?>      
					<a href="single.php?movie=<?php echo $row[0]; ?>"><div class="col-md-3 col-xs-6"><span><i class="fa fa-ticket"></i> Book Ticket</span><img src="posters/<?php echo $row[7]; ?>" ></div></a>
				<?php 
					}
				?>
			
			</div>

				<div class="clearfix"></div>

			<div class="col-md-7 mid-right list">
				<h2>Upcoming Movies</h2>
				<div class="clearfix"></div>
				<marquee behavior="alternate" scrollamount="2">
			<?php
                 
                    $cmd="select * from upmovies ORDER BY mid DESC LIMIT 4";
                    $result = mysqli_query($conn, $cmd);
                    $sn=0;
                    while($row = mysqli_fetch_array($result))
                    {
                        $sn++;
                ?>      
					<a href="comingsoon.php"><div class="col-md-3 col-xs-3"><span><i class="fa fa-ticket"></i> VIEW ALL</span><img src="upcoming/<?php echo $row[5]; ?>" ></div></a>
				<?php 
					}
				?>
			</marquee>
			</div>

			<div class="col-md-5 mid-right">
				<h2>Categories</h2>
				<div class="col-md-6 col-xs-6"><a href="movies.php?cat=romance"><div><p>Romantic</p></div></a></div>
				<div class="col-md-6 col-xs-6"><a href="movies.php?cat=comedy"><div><p>Comedy</p></div></a></div>
				<div class="clearfix"></div>
				<div class="col-md-6 col-xs-6"><a href="movies.php?cat=action"><div><p>Action</p></div></a></div>
				<div class="col-md-6 col-xs-6"><a href="movies.php?cat=anime"><div><p>Anime</p></div></a></div>
			</div>

			<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="117915609613028">
      </div>



<?php include('footer.php'); ?>
