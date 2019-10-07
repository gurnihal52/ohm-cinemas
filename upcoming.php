<?php include('head.php'); ?>

<div class="container cont">
	<div class="col-md-12 left">
		<h4>Add Upcoming Movie</h4>
		<div class="clearfix"></div>
		<hr>
		<form action="saveup.php" method="post" enctype="multipart/form-data">
		<div class="col-md-4"><p><label>Movie Name</label><br><input name="movie" type="text" placeholder="Movie Name" required></p></div>
		<div class="col-md-4"><p><label>Genre</label><br><input name="genre" type="text" placeholder="Genre" required></p></div>
		<div class="col-md-4"><p><label>Release Date</label><br><input id="calendar" onfocus="doOnLoad()" name="rdate" type="text" placeholder="Release Date" required></p></div>
		<div class="col-md-12"><p><label>Synopsis</label><br><textarea name="synopsis" placeholder="Synopsis (50-60 words)" required></textarea></p></div>
		
		<div class="col-md-6"><p><label>Trailer Link (Youtube Link)</label><br><input name="link" type="text" placeholder="Trailer Link (Youtube Link)" required></p></div>
		<div class="col-md-6">
			<p> <label>Small Poster (183x276)</label><br><input name="small" type="file" required> </p>
		</div>
		<div class="col-md-4"><p><input type="submit" value="SAVE" class="button1"></p></div>
		</form>
		<div class="clearfix"></div>
		<p>
			<?php
				if(isset($_GET['msg']))
				{
					echo "<script> alert('Entry Saved successfully.'); </script>";
				}
			?>
		</p>
	</div>
	

</div>


<script type="text/javascript">
        var myCalendar;
        function doOnLoad() 
        { 
          var d = new Date();
          
            myCalendar = new dhtmlXCalendarObject(["calendar","calendar1","calendar2","calendar3"]);     
            myCalendar.setSensitiveRange(d,null);     
        }
  </script>   


</body>
</html>