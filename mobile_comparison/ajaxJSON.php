<?php

$json_RAM=$_GET["RAM"];
$RAMArray=json_decode($json_RAM);
$json_brand=$_GET["brands"];
$brandsArray=json_decode($json_brand);
$json_prices=$_GET["prices"];
$priceArray=json_decode($json_prices);	
//$priceArray=array(5000,2000,20000);

$MbrandsArrayQ=array();   //Modified brandsArray for wrapping it into ''.
$minRAMvalue=1; 
$min_price_value=200000;


if(count($RAMArray)!=0){
	$minRAMvalue=$RAMArray[0];
	for($i=0;$i<count($RAMArray);$i++)
	{	
		if($RAMArray[$i]<$minRAMvalue)
		{
			$minRAMvalue=$RAMArray[$i];
		}
	}
}

if(count($priceArray)!=0){
	$min_price_value=$priceArray[0];
	for($i=0;$i<count($priceArray);$i++)
	{	
		if($priceArray[$i]< $min_price_value)
		{
			$min_price_value=$priceArray[$i];
		}
	}
}

$i1;
if(count($brandsArray)!=0)
{
	for($i1=0;$i1<count($brandsArray);$i1++)
	{
		$MbrandsArray[$i1]="'$brandsArray[$i1]'";
	}
}
else{
	$MbrandsArray=array();
}

if(count($brandsArray)!=0){
	$MbrandsArrayQ=implode(",",$MbrandsArray);
}

if(count($brandsArray)==0){
		$q2="";
	}
	else{											//query for brands filter.		
		$q2=" AND brand IN ($MbrandsArrayQ)";
	} 
//echo $q2;
$conn = mysql_connect("localhost","root","");
   
if(! $conn ) {
	die('Could not connect: ' . mysql_error());
}

$sel=mysql_select_db('batmanreturns'); 

//$query_overview="SELECT * FROM overview natural join storage WHERE ram >= $minRAMvalue";
$query_overview="SELECT * FROM overview natural join storage natural join battery natural join display natural join rear_camera natural join processors WHERE price <= $min_price_value AND ram >= $minRAMvalue"."$q2" ;
$retval_overview= mysql_query($query_overview,$conn);

$mobileIDList=array();
$returnArr=array();
$i=0;
while($row = mysql_fetch_assoc($retval_overview)){
$mobileIDList[$i]=$row['mobileID'];
$returnArr[$i]=["name"=>$row['mobile_name'],"price"=>$row['price'],"mobileID"=>$row['mobileID'],"ram"=>$row["ram"],"rom"=>$row["rom"],"capacity"=>$row["capacity"],
"display_type"=>$row["display_type"],"screen_size"=>$row["screen_size"],"megapixels"=>$row["megapixels"],"gpu"=>$row["gpu"],"chipset"=>$row["chipset"]];
$i=$i+1;	
}
//echo $query_overview;
echo json_encode($returnArr);

?>