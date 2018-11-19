<?php

$conn = mysql_connect("localhost","root","");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
$brand=$_POST['brand'];
$mobile_name=$_POST['mobile_name'];
$price=$_POST['price'];
$date_of_launch=$_POST['date_of_launch'];

$color=$_POST['color'];
$weight=$_POST['weight'];
$dimensions=$_POST['dimensions'];
$sim_type=$_POST['sim_type'];
$external_card_slot=$_POST['external_card_slot'];
$number_of_sims=$_POST['number_of_sims'];
$water_resistance=$_POST['water_resistance'];

$display_type=$_POST['display_type'];
$resolution=$_POST['resolution'];
$screen_size=$_POST['screen_size'];
$aspect_ratio=$_POST['aspect_ratio'];
$notch=$_POST['notch'];
$ppi=$_POST['ppi'];
$screen_ratio=$_POST['screen_ratio'];
$color_reproduction=$_POST['color_reproduction'];

$r_megapixels=$_POST['r_megapixels'];
$r_flash=$_POST['r_flash'];
$r_video=$_POST['r_video'];
$r_dual_camera=$_POST['r_dual_camera'];
$r_aperture=$_POST['r_aperture'];
$r_features=$_POST['r_features'];

$f_megapixels=$_POST['f_megapixels'];
$f_flash=$_POST['f_flash'];
$f_video=$_POST['f_video'];
$f_dual_camera=$_POST['f_dual_camera'];
$f_aperture=$_POST['f_aperture'];
$f_features=$_POST['f_features'];


$cpu=$_POST['cpu'];
$gpu=$_POST['gpu'];
$chipset=$_POST['chipset'];
$cores=$_POST['cores'];

$bluetooth=$_POST['bluetooth'];
$wifi=$_POST['wifi'];
$hotspot=$_POST['hotspot'];
$usb=$_POST['usb'];
$nfc=$_POST['nfc'];
$gps=$_POST['gps'];
$network=$_POST['network'];
$infrared=$_POST['infrared'];

$accelerometer=$_POST['accelerometer'];
$proximity=$_POST['proximity'];
$fingerprint=$_POST['fingerprint'];
$gyrocope=$_POST['gyroscope'];
$ambient_light=$_POST['ambient_light'];

$ram=$_POST['ram'];
$rom=$_POST['rom'];
$expandable=$_POST['expandable'];

$type=$_POST['type'];
$capacity=$_POST['capacity'];
$removability=$_POST['removability'];
$fast_charging=$_POST['fast_charging'];
$wireless_charging=$_POST['wireless_charging'];




   

$sel=mysql_select_db('batmanreturns');   
$query_overview="INSERT INTO overview(brand,mobile_name,price,date_of_launch) VALUES ('$brand','$mobile_name',$price,'$date_of_launch')";
$retval_overview= mysql_query($query_overview,$conn);

$query_design="INSERT INTO design(color,weight,dimensions,sim_type,external_card_slot,number_of_sims,water_resistance) VALUES ('$color',$weight,'$sim_type','$external_card_slot',$number_of_sims,'$water_resistance')";
$retval_design= mysql_query($query_design,$conn);

$query_display="INSERT INTO display (display_type,resolution,aspect_ratio,notch,ppi,screen_ratio,color_reproduction) VALUES ('$display_type','$resolution',$screen_size,'$aspect_ratio',$notch,$ppi,$screen_ratio,$color_reproduction)";
$retval_display= mysql_query($query_display,$conn);

$query_r_camera="INSERT INTO rear_camera(r_megapixels,r_flash,r_video,r_dual_camera,r_aperture,r_features) VALUES ('$r_megapixels',$r_flash,'$r_video',$r_dual_camera,'$r_aperture','$r_features')";
$retval_r_camera= mysql_query($query_r_camera,$conn);

$query_f_camera="INSERT INTO front_camera(f_megapixels,f_flash,f_video,f_dual_camera,f_aperture,f_features) VALUES ('$f_megapixels',$f_flash,'$f_video',$f_dual_camera,'$f_aperture','$f_features')";
$retval_f_camera= mysql_query($query_f_camera,$conn);

$query_processors="INSERT INTO processors (cpu,gpu,chipset,cores) VALUES ('$cpu','$gpu','$chipset',$cores)";
$retval_processors= mysql_query($query_processors,$conn);

$query_connectivity="INSERT INTO connectivity (bluetooth,wifi,hotspot,usb,nfc,gps,network,infrared) VALUES ('$bluetooth','$wifi','$hotspot','$usb',$nfc,$gps,'$network',$infrared)";
$retval_connectivity= mysql_query($query_connectivity,$conn);

$query_sensors="INSERT INTO sensors (accelerometer,proximity,fingerprint,gyrocope,ambient_light) VALUES ($accelerometer,$proximity,$fingerprint,$gyrocope,$ambient_light)";
$retval_sensors= mysql_query($query_sensors,$conn);

$query_storage="INSERT INTO storage (ram,rom,expandable) VALUES ($ram,$rom,$expandable)";
$retval_storage= mysql_query($query_storage,$conn);

$query_battery="INSERT INTO battery (type,capacity,removability,wireless_charge,fast_charge) VALUES ('$type',$capacity,$removability,$wireless_charging,$fast_charging)";
$retval_battery= mysql_query($query_battery,$conn);

if($retval_overview==0 || $retval_design==0 || $retval_display==0 ||$retval_r_camera==0||$retval_f_camera==0||$retval_processors==0||$retval_connectivity==0||$retval_sensors==0
||$retval_storage==0||$retval_battery==0){
	echo "Error! Could not Enter!!". mysql_error();
}
else{
?>

<html>
<head>
<title>Specifications HTML Form</title>
<link rel="stylesheet" type="text/css" href="webst1.css">
<style>
.indexmenu2 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 20px;
	font-weight: bold;
	background-color: #869df4;
	text-align: center;
	padding-top:5px;
	padding-bottom:5px;
	display: inline-block;
	margin-bottom:15px;
	height: 40px;
	width: 213px;
	float:left;
}
.indexmenu2:hover{background-color: #0c3ef9;	}
</style>
</head>
<body>
<center><div class="label3"><center>Successfully Entered!!</center></div><br><div class="label3"><center>
</center></div></center>
</body>
</html>

<?php 
}
?>
