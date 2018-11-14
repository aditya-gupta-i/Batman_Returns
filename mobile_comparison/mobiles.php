<?php

$conn = mysql_connect("localhost","root","");
   
if(! $conn ) {
	die('Could not connect: ' . mysql_error());
}

$key=$_GET['id'];
$sel=mysql_select_db('batmanreturns'); 

$query_overview="SELECT * FROM overview WHERE mobileID=$key";
$retval_overview= mysql_query($query_overview,$conn);
$overview = mysql_fetch_assoc($retval_overview);


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="newstyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial;}
</style>
</head>
<body>

<div class="maincon">
	<div class="imgmaincon">
		<!----image verital half---->
		<div class="imgmaincon_image">
			<center><img src="Xio.jpeg"height=""width=""></center>
		</div>
		<div class="imgmaincon_thumbs">
			<!-------Other thumbnails---->
		</div>
		<div class="imgmaincon_videolink">
			<!-------Video link Text---->
		</div>
		<div class="imgmaincon_buy_view">
			<!-------Buy View---->
		</div>
		
		
	</div>
	<div class="contentmaincon">
		<!-----The Tabs----------->
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'overview')">Overview</button>
			<button class="tablinks" onclick="openCity(event, 'specifications')">Specifications</button>
			<button class="tablinks" onclick="openCity(event, 'prices')">Compare Prices</button>
			<button class="tablinks" onclick="openCity(event, 'reviews')">User Reviews</button>
			<button class="tablinks" onclick="openCity(event, 'alternatives')">Alternatives</button>
		</div>
		<div id="overview" class="tabcontent">
			<div class="cm_upper">
				<h1><?php echo $overview["mobile_name"] ?></h1>
				<h2>Best Price : Rs.14,999</h2>
				<h3>Date of Launch : 19th October 2017</h3>
				<h3>Available in Colors : Blue,Green,White,Red,Silver</h3>
				<h2>Rating in 10 Reviews : 4.5/5
				<br>
			</div>
			<br>
			<center>
			<div class="cm_lower">
				<div class="overview_spec_boxes">
					<img src="display_size.png"><h3>Screen size</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="camera-icon.png"><h3>Camera Details</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="ram_icon.png"><h3>RAM in Gigs</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="battery_icon.png"><h3>Battery Capacity</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="weight_icon.png"><h3>Weight in grams</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="software_icon.png"><h3>Operating system</h3>
				</div>
			</div>	
			</center>
		</div>
		<div id="specifications" class="tabcontent">
			<div class="spec_head">DISPLAY</div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			
			<div class="spec_head"></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			
			<div class="spec_head"></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			
			<div class="spec_head"></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
			<div class="spec_head_row"><div class="spec_row_left"></div><!--Ravi----></div>
		</div>
		<div id="prices" class="tabcontent">
			<h2>Available at 7 Stores</h2>
			<h1>Best Price : Rs.14,999</h1>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>
			
			<div class="spec_head"><h4>Prices at Other stores:</h4></div>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>
			<div class="best_price_box">
				<div class="bp_box_left"></div>
				<div class="bp_box_middle"></div>
			</div>	
		</div>
		<div id="reviews" class="tabcontent">
			<h3>97 Reviews Found :</h3>
			<div class="review_disp_box">
				<div class="review_disp_box_head">Review Heading</div>
				<div class="review_disp_box_body">The content of the Review goes here.Maximum 1500 characters allowed.</div>
				<div class="review_disp_box_foot">
					<div class="review_disp_box_foot_intwo">Name</div>
					<div class="review_disp_box_foot_intwo">Stars</div>
				</div>
			</div>
			<a href="#"><h3><center>Write a review</center></h3></a>
		</div>
		<div id="alternatives" class="tabcontent">
			<h3>Similar Phones:</h3>
			<div class="container_alternative">
				<img src="Xio.jpeg" height="200px"width="100px">
				<center>
					<h3>Redmi Note 5 Pro</h3>
				</center>
				<h4>4.5 stars</h4>
				<hr>
				<h3>Rs.14,999</h3>
			</div>
		</div>
		<script> 
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		</script>
	</div>
	<div class="sidemaincon">
		<!-----sidebar------>
	</div>
</div>


     
</body>
</html>