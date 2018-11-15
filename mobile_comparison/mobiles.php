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

$query_spec_display="SELECT * FROM display WHERE mobileID=$key";
$retval_spec_display= mysql_query($query_spec_display);
$display = mysql_fetch_assoc($retval_spec_display);

$query_spec_design="SELECT * FROM design WHERE mobileID=$key";
$retval_spec_design= mysql_query($query_spec_design);
$design = mysql_fetch_assoc($retval_spec_design);

$query_spec_rearcamera="SELECT * FROM rear_camera WHERE mobileID=$key";
$retval_spec_rearcamera= mysql_query($query_spec_rearcamera);
$rear_camera = mysql_fetch_assoc($retval_spec_rearcamera);

$query_spec_frontcamera="SELECT * FROM front_camera WHERE mobileID=$key";
$retval_spec_frontcamera= mysql_query($query_spec_frontcamera);
$front_camera = mysql_fetch_assoc($retval_spec_frontcamera);

$query_spec_processors="SELECT * FROM processors WHERE mobileID=$key";
$retval_spec_processors= mysql_query($query_spec_processors);
$processors = mysql_fetch_assoc($retval_spec_processors);

$query_spec_connectivity="SELECT * FROM connectivity WHERE mobileID=$key";
$retval_spec_connectivity= mysql_query($query_spec_connectivity);
$connectivity = mysql_fetch_assoc($retval_spec_connectivity);

$query_spec_sensors="SELECT * FROM sensors WHERE mobileID=$key";
$retval_spec_sensors= mysql_query($query_spec_sensors);
$sensors = mysql_fetch_assoc($retval_spec_sensors);

$query_spec_storage="SELECT * FROM storage WHERE mobileID=$key";
$retval_spec_sensors= mysql_query($query_spec_storage);
$storage = mysql_fetch_assoc($retval_spec_sensors);

$query_spec_battery="SELECT * FROM battery WHERE mobileID=$key";
$retval_spec_battery= mysql_query($query_spec_battery);
$battery = mysql_fetch_assoc($retval_spec_battery);

$price_range=$overview["price"];
$lprice=$price_range-1500;
$hprice=$price_range+1500;
$query_alternatives="SELECT * FROM overview WHERE price >= $lprice AND price <= $hprice";
$retval_alternatives= mysql_query($query_alternatives,$conn);

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
		<!-----image verital half---->
		<div class="imgmaincon_image">
			<center><img src="Xio.jpeg"height=""width=""></center>
		</div>
		<div class="imgmaincon_thumbs">
			<!----Other thumbnails---->
		</div>
		<div class="imgmaincon_videolink">
			<!------Video link Text------>
		</div>
		<div class="imgmaincon_buy_view">
			<!---------Buy View--------->
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
				<h2>Best Price : <?php echo $overview["price"] ?></h2>
				<h3>Date of Launch : <?php echo $overview["date_of_launch"] ?></h3>
				<h3>Available in Colors : <?php echo $design["color"] ?></h3>
				<h2>Rating in 10 Reviews : 4.5/5
				<br>
			</div>
			<br>
			<center>
			<div class="cm_lower">
				<div class="overview_spec_boxes">
					<img src="display_size.png"><h3><?php echo $display["screen_size"] ?>&nbsp;inches</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="camera-icon.png"><h3><?php echo $rear_camera["megapixels"] ?>&nbsp;MP rear Camera</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="ram_icon.png"><h3><?php echo $storage["ram"] ?>&nbsp;GB RAM</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="battery_icon.png"><h3><?php echo $battery["capacity"] ?>&nbsp;mAH Battery</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="weight_icon.png"><h3><?php echo $design["weight"] ?>&nbsp;grams Weight</h3>
				</div>
				<div class="overview_spec_boxes">
					<img src="software_icon.png"><h3>Powered by Android</h3>
				</div>
			</div>	
			</center>
		</div>
		<div id="specifications" class="tabcontent">
			<div class="spec_head">DESIGN</div>
			<div class="spec_head_row"><div class="spec_row_left">Color</div><div class="spec_row_right"><?php echo $design["color"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Weight</div><div class="spec_row_right"><?php echo $design["weight"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Dimensions</div><div class="spec_row_right"><?php echo $design["dimensions"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Sim Type</div><div class="spec_row_right"><?php echo $design["sim_type"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">External Card Slot</div><div class="spec_row_right"><?php echo $design["external_card_slot"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Dual Sim</div><div class="spec_row_right"><?php echo $design["number_of_sims"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Water Resistance</div><div class="spec_row_right"><?php echo $design["water_resistance"] ?></div></div>
			
			<div class="spec_head">DISPLAY</div>
			<div class="spec_head_row"><div class="spec_row_left">Display Type</div><div class="spec_row_right"><?php echo $display["display_type"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Resolution</div><div class="spec_row_right"><?php echo $display["resolution"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Screen Size</div><div class="spec_row_right"><?php echo $display["screen_size"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Aspect Ratio</div><div class="spec_row_right"><?php echo $display["aspect_ratio"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Notch</div><div class="spec_row_right"><?php echo $display["notch"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">PPI</div><div class="spec_row_right"><?php echo $display["ppi"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Screen_ratio</div><div class="spec_row_right"><?php echo $display["screen_ratio"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Color reproduction</div><div class="spec_row_right"><?php echo $display["color_reproduction"] ?></div></div>
			
			<div class="spec_head">CAMERA</div>
			<div class="spec_head_row"><div class="spec_row_left">Megapixels(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["megapixels"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Flash(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["flash"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Video(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["video"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Dual Camera(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["dual_camera"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Aperture(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["aperture"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Features(Rear)</div><div class="spec_row_right"><?php echo $rear_camera["features"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Megapixels(Front)</div><div class="spec_row_right"><?php echo $front_camera["megapixels"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Flash(Front)</div><div class="spec_row_right"><?php echo $front_camera["flash"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Video(Front)</div><div class="spec_row_right"><?php echo $front_camera["video"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Dual Camera(Front)</div><div class="spec_row_right"><?php echo $front_camera["dual_camera"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Aperture(Front)</div><div class="spec_row_right"><?php echo $front_camera["aperture"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Features(Front)</div><div class="spec_row_right"><?php echo $front_camera["features"] ?></div></div>
			
			<div class="spec_head">PROCESSORS</div>
			<div class="spec_head_row"><div class="spec_row_left">CPU</div><div class="spec_row_right"><?php echo $processors["cpu"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">GPU</div><div class="spec_row_right"><?php echo $processors["gpu"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Chipset</div><div class="spec_row_right"><?php echo $processors["chipset"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Cores</div><div class="spec_row_right"><?php echo $processors["cores"] ?></div></div>
			
			<div class="spec_head">CONNECTIVITY</div>
			<div class="spec_head_row"><div class="spec_row_left">Bluetooth</div><div class="spec_row_right"><?php echo $connectivity["bluetooth"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Wifi</div><div class="spec_row_right"><?php echo $connectivity["wifi"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Hotspot</div><div class="spec_row_right"><?php echo $connectivity["hotspot"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">USB</div><div class="spec_row_right"><?php echo $connectivity["usb"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">NFC</div><div class="spec_row_right"><?php echo $connectivity["nfc"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">GPS</div><div class="spec_row_right"><?php echo $connectivity["gps"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Network</div><div class="spec_row_right"><?php echo $connectivity["network"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Infrared</div><div class="spec_row_right"><?php echo $connectivity["infrared"] ?></div></div>
			
			<div class="spec_head">SENSORS</div>
			<div class="spec_head_row"><div class="spec_row_left">Accelerometer</div><div class="spec_row_right"><?php echo $sensors["accelerometer"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Proximity</div><div class="spec_row_right"><?php echo $sensors["proximity"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Fingerprint Sensor</div><div class="spec_row_right"><?php echo $sensors["fingerprint"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Gyroscope</div><div class="spec_row_right"><?php echo $sensors["gyroscope"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Ambient Light</div><div class="spec_row_right"><?php echo $sensors["ambient_light"] ?></div></div>
			
			<div class="spec_head">STORAGE</div>
			<div class="spec_head_row"><div class="spec_row_left">RAM</div><div class="spec_row_right"><?php echo $storage["ram"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">ROM</div><div class="spec_row_right"><?php echo $storage["rom"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Expandable</div><div class="spec_row_right"><?php echo $storage["expandable"] ?></div></div>
			
			<div class="spec_head">BATTERY</div>
			<div class="spec_head_row"><div class="spec_row_left">Type</div><div class="spec_row_right"><?php echo $battery["type"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Capacity</div><div class="spec_row_right"><?php echo $battery["capacity"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Removability</div><div class="spec_row_right"><?php echo $battery["removability"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Fast Charging</div><div class="spec_row_right"><?php echo $battery["fast_charge"] ?></div></div>
			<div class="spec_head_row"><div class="spec_row_left">Wireless Charging</div><div class="spec_row_right"><?php echo $battery["wireless_charge"] ?></div></div>
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
			<?php while($row=mysql_fetch_assoc($retval_alternatives)){ ?>
			<div class="container_alternative">
				<img src="Xio.jpeg" height="200px"width="100px">
				<center>
					<h3><?php echo $row["mobile_name"]?></h3>
				</center>
				<h4>4.5 stars</h4>
				<hr>
				<h3><?php echo $row["price"]?></h3>
			</div>
			<?php } ?>
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