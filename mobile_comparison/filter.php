<?php

$conn = mysql_connect("localhost","root","");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
$sel=mysql_select_db('batmanreturns'); 

$json_price=$_GET["prices"];
$json_brand=$_GET["brands"];
$json_RAM=$_GET["RAM"];
/* $json_core=$_GET["core"];
$json_frequency=$_GET["frequency"];
$json_os=$_GET["os"]; */
$priceArray=json_decode($json_price);
$brandsArray=json_decode($json_brand);	
$RAMArray=json_decode($json_RAM);
/* $coreArray=json_decode($json_core);
$frequencyArray=json_decode($json_frequency);
$osArray=json_decode($json_os); */
/*
$priceArray=array('4','8');
$brandsArray=array('SAMSUNG','XIAOMI');
$RAMArray=array('2','3');
$coreArray=array('DUALCORE');
$frequencyArray=array('1.5','2.0');
*/
$priceArrayQ=array();
$MbrandsArrayQ=array();   //Modified brandsArray for wrapping it into ''.
$minRAMvalue=1; 		  //Minimum value set for default case.
$minFrequency=1.0;		  //Minimum value set for default case.
$MosArray=array();

//Finding Maximum RAM value in the $RAMArray.
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

//Finding Maximum frequency in the $frequencyArray.
if(count($frequencyArray)!=0){
	$minFrequency=$frequencyArray[0];
	for($i=0;$i<count($frequencyArray);$i++)
	{
		if($frequencyArray[$i]<$minFrequency)
		{
			$minFrequency=$frequencyArray[$i];
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
if(count($priceArray)!=0){
	$priceArrayQ=implode(",",$priceArray);
}
if(count($brandsArray)!=0){
	$MbrandsArrayQ=implode(",",$MbrandsArray);
}


	if(count($priceArray)==0){
		$q1="";
	}											//query for price filter.
	else{
		$q1="pricegroup IN ($priceArrayQ) AND ";
	}
	
	
	if(count($brandsArray)==0){
		$q2="";
	}
	else{											//query for brands filter.		
		$q2="brand IN ($MbrandsArrayQ) AND ";
	}
	
	$q3="ram >=$minRAMvalue";					//query for RAM filter.
	
	if(count($coreArray)!=0)
	{
		if(in_array("DECACORE",$coreArray)){
			$q4T="('DECACORE')";
		}
		else if(in_array("OCTACORE",$coreArray)){
			$q4T="('DECACORE','OCTACORE')";
		}														//query for CPU core filter.
		else if(in_array("QUADCORE",$coreArray)){
			$q4T="('DECACORE','OCTACORE','QUADCORE')";
		}
		else if(in_array("DUALCORE",$coreArray)){
			$q4T="('DECACORE','OCTACORE','QUADCORE','DUALCORE')";
		}
		$q4=" AND noofcores IN $q4T";
	}
	else{
		$q4="";
	}
	
	$q5=" AND frequency>=$minFrequency";  					//query for CPU frequency filter.
	
	
	if(count($osArray)!=0){
		for($i1=0;$i1<count($osArray);$i1++)
		{
			$MosArray[$i1]="'$MosArray[$i1]'";
		}													//query for os filter.
		$MosArrayQ=implode(",",$MosArray);
		$q6=" AND os IN $MosArrayQ";
	}
	else{
		$q6="";
	}
 
$query="SELECT * FROM overview natural join storage WHERE "."$q1"."$q2"."$q3"."$q4"."$q5"."$q6";
$retval= mysql_query($query,$conn);
$row = mysql_fetch_assoc($retval);

$mobileIDList=array();
$returnArr=array();
$i=0;

do{
$mobileIDList[$i]=$row['mobileID'];
$returnArr[$i]=["name"=>$row['name'],"price"=>$row['price'],"pricegroup"=>$row['pricegroup'],"mobileID"=>$row['mobileID']];
$i=$i+1;	
}
while
($row = mysql_fetch_assoc($retval));
echo json_encode($returnArr); 
/*
do
{
	echo $row['name'];
}while($row = mysql_fetch_assoc($retval));
*/
?>