<?php

$conn = mysql_connect("localhost","root","");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sel=mysql_select_db('website');



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