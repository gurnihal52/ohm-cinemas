<?php include('head.php'); ?>

<div class="container cont">
	<div class="col-md-12 left">
		<h4>Add New Movie</h4>
		<div class="clearfix"></div>
		<hr>
		<form action="savemovie.php" method="post" enctype="multipart/form-data">
			<div class="col-md-3"><p><label>Select Screen</label><br>
				<select name="screen" required>
					<option value="">Select Screen</option>
					<option value="1">Screen 1</option>
					<option value="2">Screen 2</option>
					<option value="3">Screen 3</option>
					<option value="4">Screen 4</option>
				</select></p>
			</div>
			<div class="col-md-3"><p><label>Movie Name</label><br><input name="movie" type="text" placeholder="Movie Name"></p></div>
			<div class="col-md-3"><p><label>Genre</label><br><input name="genre" type="text" placeholder="Genre"></p></div>
			<div class="col-md-3"><p><label>Release Date</label><br><input name="rdate" type="text" onfocus="doOnLoad()" id="calendar" placeholder="Release Date"></p></div>
			
			<div class="col-md-3"><p><label>Show Start Date</label><br><input name="sdate" type="text" onfocus="doOnLoad()" id="calendar1" placeholder="Show Start Date"></p></div>
			<div class="col-md-3"><p><label>Trailer Link (Youtube Link)</label><br><input name="link" type="text" placeholder="Trailer Link (Youtube Link)"></p></div>
			<div class="col-md-3"><p><label>Small Poster (183x276)</label><br><input name="small" type="file" ></p></div>
			<div class="col-md-3"><p><label>Large Poster (1300x500)</label><br><input name="large" type="file" ></p></div>

			<div class="col-md-12"><p><label>Synopsis</label><br><textarea name="synopsis" placeholder="Synopsis (50-60 words)"></textarea></p></div>
			<div class="col-md-3"><p><input type="submit" value="SAVE" class="button1"></p></div>
		</form>
		<!-- <div class="clearfix"></div> -->
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

<!-- 7009916010 varun -->