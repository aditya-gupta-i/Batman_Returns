<?php

$conn = mysql_connect("localhost","root","");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sel=mysql_select_db('website');

$ID=$_POST['ID'];
$query1="SELECT * FROM overview WHERE mobileID=$ID";
$retval1= mysql_query($query1,$conn);
$row1 = mysql_fetch_assoc($retval1);
$name=$row1['name'];

$simtype=$_POST['simtype'];
$dualsim=$_POST['dualsim'];
$simsize=$_POST['simsize'];
$dimensions=$_POST['dimensions'];
$weight=$_POST['weight'];
$os=$_POST['os'];
$touch=$_POST['touch'];
$displaytype=$_POST['displaytype'];
$touch=$_POST['touch'];
$displaysize=$_POST['displaysize'];
$ppi=$_POST['ppi'];
$protection=$_POST['protection'];
$dualcamera=$_POST['dualcamera'];
$rearcamera=$_POST['rearcamera'];
$frontcamera=$_POST['frontcamera'];
$flash=$_POST['flash'];
$dualflash=$_POST['dualflash'];
$videorecording=$_POST['videorecording'];
$provariant=$_POST['provariant'];
$proarchitecture=$_POST['proarchitecture'];
$noofcores=$_POST['noofcores'];
$frequency=$_POST['frequency'];
$gpu=$_POST['gpu'];
$nfcchipset=$_POST['nfcchipset'];
$edge=$_POST['edge'];
$threeg=$_POST['3g'];
$fourg=$_POST['4g'];
$volte=$_POST['volte'];
$wifi=$_POST['wifi'];
$bluetooth=$_POST['bluetooth'];
$usb=$_POST['usb'];
$email=$_POST['email'];
$music=$_POST['music'];
$video=$_POST['video'];
$radio=$_POST['radio'];
$ram=$_POST['ram'];
$internal=$_POST['internal'];
$cardslot=$_POST['cardslot'];
$proximity=$_POST['proximity'];
$accelerometer=$_POST['accelerometer'];
$fingerprintsensor=$_POST['fingerprintsensor'];
$gyroscope=$_POST['gyroscope'];
$ambientlight=$_POST['ambientlight'];
$batterytype=$_POST['batterytype'];
$batterysize=$_POST['batterysize'];
$removable=$_POST['removable'];
$turbocharging=$_POST['turbocharging'];


$query="INSERT INTO specifications(mobileID,name,simtype,dualsim,simsize,dimensions,weight,os,displaytype,touch,displaysize,ppi,protection,
dualcamera,rearcamera,frontcamera,flash,dualflash,videorecording,provariant,proarchitecture,noofcores,frequency,gpu,nfcchipset,edge,3g,4g,
volte,wifi,bluetooth,usb,email,music,video,radio,ram,internal,cardslot,proximity,accelerometer,fingerprintsensor,gyroscope,ambientlight,
batterytype,batterysize,removable,turbocharging) VALUES ('$ID','$name',
'$simtype','$dualsim','$simsize','$dimensions','$weight','$os','$displaytype','$touch','$displaysize','$ppi','$protection','$dualcamera','$rearcamera',
'$frontcamera','$flash','$dualflash','$videorecording','$provariant','$proarchitecture','$noofcores','$frequency','$gpu','$nfcchipset','$edge','$threeg',
'$fourg','$volte','$wifi','$bluetooth','$usb','$email','$music','$video','$radio','$ram','$internal','$cardslot','$proximity','$accelerometer',
'$fingerprintsensor','$gyroscope','$ambientlight','$batterytype','$batterysize','$removable','$turbocharging') ";
$retval= mysql_query($query,$conn);

if(!$retval){
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
<center><div class="label3"><center>Successfully Entered!!</center></div><br><div class="label3"><center>mobileID:<?php echo $ID; ?>
</center></div></center>
<hr>
<a href="overviewform.html"><div class="indexmenu2">Overview Form</div></a>
<a href="pricesform.html"><div class="indexmenu2">Prices Form</div></a>
<a href="specificationsform.html"><div class="indexmenu2">Specifications Form</div></a>
<a href="prosandconsform.html"><div class="indexmenu2">Pros & Cons Form</div></a>
<a href="reviewsform.html"><div class="indexmenu2">Reviews Form</div></a>
<a href="imageupload.html"><div class="indexmenu2">Upload Image</div></a>
</body>
</html>

<?php 
}
?>


?>