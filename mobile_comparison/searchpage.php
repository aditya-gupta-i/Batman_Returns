<?php

$conn = mysql_connect("localhost","root","");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
$sel=mysql_select_db('batmanreturns'); 

$query_all="SELECT * FROM overview natural join display natural join storage";
$retval_all= mysql_query($query_all,$conn);


?>

<html>
<head>
<style>
.searchresultmaincon{
	font-family: Verdana, Geneva, sans-serif;
	background-color: #FFF;
	display: inline-block;
	float: left;
	height: 90%;
	width: 79%;
	border: 1px solid #ccc;
	position: relative;
	margin-left:10px;
	overflow:auto;
}
.searchresultbox {
	background-color: #edf1ff;
	text-align: left;
	display: inline-block;
	float: left;
	height: 200px;
	width:99%;
	position: relative;
	margin-top:5px;
	border-style:solid;
	border-width:0.5px;
	border-color:gray;
	padding-top:1px;
}
.resultstatsbox {
	background-color: #edf1ff;
	text-align: left;
	display: inline-block;
	float: left;
	height: auto;
	width: 99%;
	position: relative;
	margin-top:0px;
	margin-left:0px;
	vertical-align: middle;
	padding-left: 5px;
	padding-top: 3px;
	padding-bottom:5px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="newstyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Filter Page</title>
<!---<link rel="stylesheet" type="text/css" href="webst1.css"> --->
</head>
<body>
<div class="maincon">

<form id="checkbox" action=""method="post">

<div class="filterbox"id="filterbox">
  <div class="innerfilterbox">
    <div class="innerfilterboxheading">PRICE<div class="resetbutton"><center>Reset</center></div></div>
    <div class="innerfilterboxcontent">
    	<input type="checkbox"name="Price"value="1000" onchange=func()><span>Below Rs.1000</span><br>
        <input type="checkbox"name="Price"value="2000" onchange=func()><span>Below Rs.2000</span><br>
        <input type="checkbox"name="Price"value="5000" onchange=func()><span>Below Rs.5000</span><br>
        <input type="checkbox"name="Price"value="10000" onchange=func()><span>Below Rs.10000</span><br>
        <input type="checkbox"name="Price"value="20000" onchange=func()><span>Below Rs.20000</span><br>
        <input type="checkbox"name="Price"value="25000" onchange=func()><span>Below Rs.25000</span><br>
        <input type="checkbox"name="Price"value="30000" onchange=func()><span>Below Rs.30000</span><br>
        <input type="checkbox"name="Price"value="200000" onchange=func()><span>Above Rs.30000</span><br>
    </div>
  </div>
  <div class="innerfilterbox">
   	 <div class="innerfilterboxheading">BRANDS<div class="resetbutton"><center>Reset</center></div></div>
     <div class="innerfilterboxcontentscrollable">
     <input type="checkbox"name="Brand"value="ARCHOS" onchange=func()><span>Archos</span><br>
     <input type="checkbox"name="Brand"value="ASUS" onchange=func()><span>Asus</span><br>
     <input type="checkbox"name="Brand"value="ATOM" onchange=func()><span>Atom</span><br>
     <input type="checkbox"name="Brand"value="BLU" onchange=func()><span>BLU</span><br>
     <input type="checkbox"name="Brand"value="BQ" onchange=func()><span>BQ</span><br>
     <input type="checkbox"name="Brand"value="BSNLPENTA" onchange=func()><span>BSNL Penta</span><br>
     <input type="checkbox"name="Brand"value="BILION" onchange=func()><span>Bilion</span><br>
     <input type="checkbox"name="Brand"value="BLACKBERRY" onchange=func()><span>Blackberry</span><br>
     <input type="checkbox"name="Brand"value="BLOOM" onchange=func()><span>Bloom</span><br>
     <input type="checkbox"name="Brand"value="BYOND" onchange=func()><span>Byond</span><br>
     <input type="checkbox"name="Brand"value="CAT" onchange=func()><span>Cat</span><br>
     <input type="checkbox"name="Brand"value="CELKON" onchange=func()><span>Celkon</span><br>
     <input type="checkbox"name="Brand"value="CENTRIC" onchange=func()><span>Centric</span><br>
     <input type="checkbox"name="Brand"value="CHEERS" onchange=func()><span>Cheers</span><br>
     <input type="checkbox"name="Brand"value="COMIO" onchange=func()><span>Comio</span><br>
     <input type="checkbox"name="Brand"value="COOLPAD" onchange=func()><span>Coolpad</span><br>
     <input type="checkbox"name="Brand"value="CREO" onchange=func()><span>Creo</span><br>
     <input type="checkbox"name="Brand"value="CROMA" onchange=func()><span>Croma</span><br>
     <input type="checkbox"name="Brand"value="DOMO" onchange=func()><span>DOMO</span><br>
     <input type="checkbox"name="Brand"value="DARAGO" onchange=func()><span>Darago</span><br>
     <input type="checkbox"name="Brand"value="DATAWIND" onchange=func()><span>Datawind</span><br>
     <input type="checkbox"name="Brand"value="DELL" onchange=func()><span>Dell</span><br>
     <input type="checkbox"name="Brand"value="DOCOSS" onchange=func()><span>Docoss</span><br>
     <input type="checkbox"name="Brand"value="ELARI" onchange=func()><span>Elari</span><br>
     <input type="checkbox"name="Brand"value="ELEPHONE" onchange=func()><span>Elephone</span><br>
     <input type="checkbox"name="Brand"value="ESSENTIAL" onchange=func()><span>Essential</span><br>
     <input type="checkbox"name="Brand"value="FLY" onchange=func()><span>Fly</span><br>
     <input type="checkbox"name="Brand"value="FORME" onchange=func()><span>Forme</span><br>
     <input type="checkbox"name="Brand"value="FOX" onchange=func()><span>Fox</span><br>
     <input type="checkbox"name="Brand"value="GIONEE" onchange=func()><span>Gionee</span><br>
     <input type="checkbox"name="Brand"value="GOODONE" onchange=func()><span>Good One</span><br>
     <input type="checkbox"name="Brand"value="GOOGLE" onchange=func()><span>Google</span><br>
     <input type="checkbox"name="Brand"value="GREENBERRY" onchange=func()><span>GreenBerry</span><br>
     <input type="checkbox"name="Brand"value="HP" onchange=func()><span>HP</span><br>
     <input type="checkbox"name="Brand"value="HPL" onchange=func()><span>HPL</span><br>
     <input type="checkbox"name="Brand"value="HSL" onchange=func()><span>HSL</span><br>
     <input type="checkbox"name="Brand"value="HTC" onchange=func()><span>HTC</span><br>
     <input type="checkbox"name="Brand"value="HITECH" onchange=func()><span>Hitech</span><br>
     <input type="checkbox"name="Brand"value="HUAWEI" onchange=func()><span>Huawei</span><br>
     <input type="checkbox"name="Brand"value="HYUNDAI" onchange=func()><span>Hyundai</span><br>
     <input type="checkbox"name="Brand"value="HYVE" onchange=func()><span>Hyve</span><br>
     <input type="checkbox"name="Brand"value="INFOCUS" onchange=func()><span>InFocus</span><br>
     <input type="checkbox"name="Brand"value="INFINIX" onchange=func()><span>Infinix</span><br>
     <input type="checkbox"name="Brand"value="INOVU" onchange=func()><span>Inovu</span><br>
     <input type="checkbox"name="Brand"value="INTEX" onchange=func()><span>Intex</span><br>
     <input type="checkbox"name="Brand"value="JIO" onchange=func()><span>Jio</span><br>
     <input type="checkbox"name="Brand"value="JIVI" onchange=func()><span>Jivi</span><br>
     <input type="checkbox"name="Brand"value="JOLLA" onchange=func()><span>Jolla</span><br>
     <input type="checkbox"name="Brand"value="JOSH" onchange=func()><span>Josh</span><br>
     <input type="checkbox"name="Brand"value="KARBONN" onchange=func()><span>Karbonn</span><br>
     <input type="checkbox"name="Brand"value="KODAK" onchange=func()><span>Kodak</span><br>
     <input type="checkbox"name="Brand"value="KULT" onchange=func()><span>Kult</span><br>
     <input type="checkbox"name="Brand"value="LG" onchange=func()><span>LG</span><br>
     <input type="checkbox"name="Brand"value="LAVA" onchange=func()><span>Lava</span><br>
     <input type="checkbox"name="Brand"value="LEECO" onchange=func()><span>LeEco</span><br>
     <input type="checkbox"name="Brand"value="LEMON" onchange=func()><span>Lemon</span><br>
     <input type="checkbox"name="Brand"value="LENOVO" onchange=func()><span>Lenovo</span><br>
     <input type="checkbox"name="Brand"value="LEPHONE" onchange=func()><span>Lephone</span><br>
     <input type="checkbox"name="Brand"value="LYF" onchange=func()><span>Lyf</span><br>
     <input type="checkbox"name="Brand"value="MTS" onchange=func()><span>MTS</span><br>
     <input type="checkbox"name="Brand"value="MAFE" onchange=func()><span>Mafe</span><br>
     <input type="checkbox"name="Brand"value="MAXX" onchange=func()><span>Maxx</span><br>
     <input type="checkbox"name="Brand"value="MEIZU" onchange=func()><span>Meizu</span><br>
     <input type="checkbox"name="Brand"value="MICROMAX" onchange=func()><span>Micromax</span><br>
     <input type="checkbox"name="Brand"value="MICRIMINI" onchange=func()><span>Micrimini</span><br>
     <input type="checkbox"name="Brand"value="MICROSOFT" onchange=func()><span>Microsoft</span><br>
     <input type="checkbox"name="Brand"value="MIGOLD" onchange=func()><span>Migold</span><br>
     <input type="checkbox"name="Brand"value="MITASHI" onchange=func()><span>Mitashi</span><br>
     <input type="checkbox"name="Brand"value="MTECH" onchange=func()><span>Mtech</span><br>
     <input type="checkbox"name="Brand"value="NAMOTEL" onchange=func()><span>Namotel</span><br>
     <input type="checkbox"name="Brand"value="NEFFOS" onchange=func()><span>Neffos</span><br>
     <input type="checkbox"name="Brand"value="NEXIAN" onchange=func()><span>Nexian</span><br>
     <input type="checkbox"name="Brand"value="NEXTBIT" onchange=func()><span>Nextbit</span><br>
     <input type="checkbox"name="Brand"value="NOKIA" onchange=func()><span>Nokia</span><br>
     <input type="checkbox"name="Brand"value="NUBIA" onchange=func()><span>Nubia</span><br>
     <input type="checkbox"name="Brand"value="NUU" onchange=func()><span>Nuu</span><br>
     <input type="checkbox"name="Brand"value="OKWU" onchange=func()><span>OKWU</span><br>
     <input type="checkbox"name="Brand"value="OPPO" onchange=func()><span>OPPO</span><br>
     <input type="checkbox"name="Brand"value="OBI" onchange=func()><span>Obi</span><br>
     <input type="checkbox"name="Brand"value="ONEPLUS" onchange=func()><span>Oneplus</span><br>
     <input type="checkbox"name="Brand"value="ONIDA" onchange=func()><span>Onida</span><br>
     <input type="checkbox"name="Brand"value="OPLUS" onchange=func()><span>Oplus</span><br>
     <input type="checkbox"name="Brand"value="OUKITEL" onchange=func()><span>Oukitel</span><br>
     <input type="checkbox"name="Brand"value="PANASONIC" onchange=func()><span>Panasonic</span><br>
     <input type="checkbox"name="Brand"value="PEPSI" onchange=func()><span>Pepsi</span><br>
     <input type="checkbox"name="Brand"value="PHICOMM" onchange=func()><span>Phicomm</span><br>
     <input type="checkbox"name="Brand"value="PHILIPS" onchange=func()><span>Philips</span><br>
     <input type="checkbox"name="Brand"value="QIKU" onchange=func()><span>QiKU</span><br>
     <input type="checkbox"name="Brand"value="RAGE" onchange=func()><span>Rage</span><br>
     <input type="checkbox"name="Brand"value="RAZER" onchange=func()><span>Razer</span><br>
     <input type="checkbox"name="Brand"value="REACH" onchange=func()><span>Reach</span><br>
     <input type="checkbox"name="Brand"value="RINGINGBELLS" onchange=func()><span>Ringing Bells</span><br>
     <input type="checkbox"name="Brand"value="RIO" onchange=func()><span>Rio</span><br>
     <input type="checkbox"name="Brand"value="SICT" onchange=func()><span>SICT</span><br>
     <input type="checkbox"name="Brand"value="SALORA" onchange=func()><span>Salora</span><br>
	 <input type="checkbox"name="Brand"value="SAMSUNG" onchange=func()><span>Samsung</span><br>
     <input type="checkbox"name="Brand"value="SANSUI" onchange=func()><span>Sansui</span><br>
     <input type="checkbox"name="Brand"value="SHARP" onchange=func()><span>Sharp</span><br>
     <input type="checkbox"name="Brand"value="SMARTNAMO" onchange=func()><span>SmartNaMO</span><br>
     <input type="checkbox"name="Brand"value="SMARTRON" onchange=func()><span>Smartron</span><br>
     <input type="checkbox"name="Brand"value="SONY" onchange=func()><span>Sony</span><br>
     <input type="checkbox"name="Brand"value="SPICE" onchange=func()><span>Spice</span><br>
     <input type="checkbox"name="Brand"value="SWIPE" onchange=func()><span>Swipe</span><br>
     <input type="checkbox"name="Brand"value="TMAX" onchange=func()><span>T-Max</span><br>
     <input type="checkbox"name="Brand"value="TCL" onchange=func()><span>TCL</span><br>
     <input type="checkbox"name="Brand"value="TECNO" onchange=func()><span>Tecno</span><br>
     <input type="checkbox"name="Brand"value="TENOR" onchange=func()><span>Tenor</span><br>
     <input type="checkbox"name="Brand"value="TONINOLAMBORGHINI" onchange=func()><span>Tonino Lamborghini</span><br>
     <input type="checkbox"name="Brand"value="TRIO" onchange=func()><span>Trio</span><br>
     <input type="checkbox"name="Brand"value="TURING" onchange=func()><span>Turing</span><br>
     <input type="checkbox"name="Brand"value="ULEFONE" onchange=func()><span>Ulefone</span><br>
     <input type="checkbox"name="Brand"value="UMI" onchange=func()><span>Umi</span><br>
     <input type="checkbox"name="Brand"value="UNIHERTZ" onchange=func()><span>Unihertz</span><br>
     <input type="checkbox"name="Brand"value="VAIO" onchange=func()><span>Vaio</span><br>
     <input type="checkbox"name="Brand"value="VERNEE" onchange=func()><span>Vernee</span><br>
     <input type="checkbox"name="Brand"value="VERTU" onchange=func()><span>Vertu</span><br>
     <input type="checkbox"name="Brand"value="VIAAN" onchange=func()><span>Viaan</span><br>
     <input type="checkbox"name="Brand"value="VIDEOCON" onchange=func()><span>Videocon</span><br>
     <input type="checkbox"name="Brand"value="VIVO" onchange=func()><span>Vivo</span><br>
     <input type="checkbox"name="Brand"value="VOX" onchange=func()><span>Vox</span><br>
     <input type="checkbox"name="Brand"value="WHITECHERRY" onchange=func()><span>Whitecherry</span><br>
     <input type="checkbox"name="Brand"value="WICKEDLEAK" onchange=func()><span>WickedLeak</span><br>
     <input type="checkbox"name="Brand"value="WIIO" onchange=func()><span>Wiio</span><br>
     <input type="checkbox"name="Brand"value="XELECTRON" onchange=func()><span>XElectron</span><br>
     <input type="checkbox"name="Brand"value="XOLO" onchange=func()><span>XOLO</span><br>
     <input type="checkbox"name="Brand"value="XCCESS" onchange=func()><span>Xccess</span><br>
     <input type="checkbox"name="Brand"value="XIAOMI" onchange=func()><span>Xiaomi</span><br>
     <input type="checkbox"name="Brand"value="YOTA" onchange=func()><span>Yota</span><br>
     <input type="checkbox"name="Brand"value="ZTE" onchange=func()><span>ZTE</span><br>
     <input type="checkbox"name="Brand"value="ZEN" onchange=func()><span>Zen</span><br>
     <input type="checkbox"name="Brand"value="ZIOX" onchange=func()><span>Ziox</span><br>
     <input type="checkbox"name="Brand"value="ZOPO" onchange=func()><span>Zopo</span><br>
     <input type="checkbox"name="Brand"value="ZYNC" onchange=func()><span>Zync</span><br>
     <input type="checkbox"name="Brand"value="IBALL" onchange=func()><span>iBall</span><br>
     <input type="checkbox"name="Brand"value="IKALL" onchange=func()><span>iKall</span><br>
     <input type="checkbox"name="Brand"value="IVOOMI" onchange=func()><span>iVooMi</span><br>
     <input type="checkbox"name="Brand"value="IBERRY" onchange=func()><span>iberry</span><br>
     <input type="checkbox"name="Brand"value="ITEL" onchange=func()><span>itel</span><br>
     <input type="checkbox"name="Brand"value="MPHONE" onchange=func()><span>mPhone</span><br>
    </div>
  </div>
   <div class="innerfilterbox">
   <div class="innerfilterboxheading">RAM<div class="resetbutton"><center>Reset</center></div></div>
   <div class="innerfilterboxcontent">
   <input type="checkbox"name="RAM"value="2" onchange=func()><span>2 GB and Above</span><br>
   <input type="checkbox"name="RAM"value="3" onchange=func()><span>3 GB and Above</span><br>
   <input type="checkbox"name="RAM"value="4" onchange=func()><span>4 GB and Above</span><br>
   <input type="checkbox"name="RAM"value="6" onchange=func()><span>6 GB and Above</span><br>
   <input type="checkbox"name="RAM"value="8" onchange=func()><span>8 GB and Above</span><br>
   </div>
   </div>
   
</div>

</form>

<script type="text/javascript">
var i;              
var j1=0;
var j2=0;
var j3=0;
var j4=0;
var j5=0;
var j6=0;
var priceArray = [];
var brandsArray = [];
var RAMArray = [];
var coreArray = [];
var frequencyArray = [];
var osArray = [];


var k;
var n=0;	  			 //dynamic srbox index.
var srbox = [];			 //dynamic srbox.
var createdBoxes = [];   //stores mobileIDs of created boxes.
var tnewIDarray = [];    //temporariry Array(Intermediate).
var newIDarray = [];     //arrays of ID(new search results).
var oldIDarray = [];	 //array of ID(previous search results).

function createDiv()     //Creates,Removes divs for statsbox section and also Prepares priceArray.
{
var x=document.getElementsByTagName("Input");
for(i=0;i<x.length;i++)
	{
	if(x[i].checked==true)
		{
		if(!document.getElementById("p"+i))
			{
			var parent=document.createElement("div");
			parent.className='statsdiv';
			parent.id="p"+i;
			var child=document.createElement("div");
			child.className='innerstatsdiv';
			var spantext=document.getElementsByTagName("span");
			parent.appendChild(document.createTextNode(x[i].name));
			child.appendChild(document.createTextNode(spantext[i].innerHTML));
			parent.appendChild(child);
			var statsbox=document.getElementById("myDIV");
			statsbox.appendChild(parent);
			}
		}
		else
		{
		if(document.getElementById("p"+i))
			{
				// Removing the div in statsbar filter section.
				var w=document.getElementById("p"+i);
				delete w.id;
				var y=document.getElementById("myDIV");
				y.removeChild(w);
				
				//Now Removing That value from array and updating next index.
				if(i>=0 && i<8) 				//important otherwise all arrays will mess up.(one tick error)
				{
					if(priceArray.indexOf(x[i].value)!=null)
					{
						var ind=priceArray.indexOf(x[i].value);
						delete priceArray[ind];
						var b;
						for(b=ind;b<(priceArray.length-1);b++)
						{
							priceArray[b]=priceArray[b+1];
						}
						priceArray.pop();
						j1=j1-1;
						alert(priceArray);
						delete ind;
						delete b;
					}
				}
				if(i>=8 && i<147)				//important otherwise all arrays will mess up.(one tick error)
				{
					if(brandsArray.indexOf(x[i].value)!=null)
					{	
						var ind2=brandsArray.indexOf(x[i].value);
						delete brandsArray[ind2];
						var d;
						for(d=ind2;d<(brandsArray.length-1);d++)
						{
							brandsArray[d]=brandsArray[d+1];
						}
						brandsArray.pop();
						j2=j2-1;
						delete ind2;
						delete d;
					} 
				}
				if(i>=147 && i<152)				//important otherwise all arrays will mess up.(one tick error)
				{
					if(RAMArray.indexOf(x[i].value)!=null)
					{	
						var ind=RAMArray.indexOf(x[i].value);
						delete RAMArray[ind];
						var b;
						for(b=ind;b<(RAMArray.length-1);b++)
						{
							RAMArray[b]=RAMArray[b+1];
						}
						RAMArray.pop();
						j3=j3-1;
						delete ind;
						delete b;
					} 
				}
				if(i>=152 && i<156)				//important otherwise all arrays will mess up.(one tick error)
				{
					if(coreArray.indexOf(x[i].value)!=null)
					{	
						var ind=coreArray.indexOf(x[i].value);
						delete coreArray[ind];
						var b;
						for(b=ind;b<(coreArray.length-1);b++)
						{
							coreArray[b]=coreArray[b+1];
						}
						coreArray.pop();
						j4=j4-1;
						delete ind;
						delete b;
					} 
				}
				if(i>=156 && i<160)				//important otherwise all arrays will mess up.(one tick error)
				{
					if(frequencyArray.indexOf(x[i].value)!=null)
					{	
						var ind=frequencyArray.indexOf(x[i].value);
						delete frequencyArray[ind];
						var b;
						for(b=ind;b<(frequencyArray.length-1);b++)
						{
							frequencyArray[b]=frequencyArray[b+1];
						}
						frequencyArray.pop();
						j5=j5-1;
						delete ind;
						delete b;
					} 
				}
				if(i>=160 && i<164)				//important otherwise all arrays will mess up.(one tick error)
				{
					if(osArray.indexOf(x[i].value)!=null)
					{	
						var ind=osArray.indexOf(x[i].value);
						delete osArray[ind];
						var b;
						for(b=ind;b<(osArray.length-1);b++)
						{
							osArray[b]=osArray[b+1];
						}
						osArray.pop();
						j6=j6-1;
						delete ind;
						delete b;
					} 
				}
			}
		}
	} 
	
}


function createArrays()                //Creates the arrays to be sent to the server.
{
	var inputs=document.getElementsByTagName("Input");	
	for(i=0;i<inputs.length;i++)
	{
		if(inputs[i].checked==true)
		{	
			if(i>=0 && i<8)			  //Creating priceArray.
			{	
				var check;
				check=checkArray(i,priceArray);
				if(check==1)          //Appends priceArray only if value not already present.
				{	
					priceArray[j1]=inputs[i].value;
					j1=j1+1;
				}
				delete check;
			}
			else if(i>=8 && i<147)		  //Creating brandsArray.
			{	
				var check;
				check=checkArray(i,brandsArray);
				if(check==1)		  //Appends brandsArray only if value not already present.
				{
					brandsArray[j2]=inputs[i].value;
					j2=j2+1;
				}
				delete check;
			}  
			else if(i>=147 && i<152)		  //Creating RAMArray.
			{
				var check;
				check=checkArray(i,RAMArray);
				if(check==1)		  //Appends RAMArray only if value not already present.
				{
					RAMArray[j3]=inputs[i].value;
					j3=j3+1;
				}
				delete check;
			}
			else if(i>=152 && i<156)		  //Creating coreArray.
			{
				var check;
				check=checkArray(i,coreArray);
				if(check==1)		  //Appends coreArray only if value not already present.
				{
					coreArray[j4]=inputs[i].value;
					j4=j4+1;
				}
				delete check;
			}
			else if(i>=156 && i<160)		  //Creating frequencyArray.
			{
				var check;
				check=checkArray(i,frequencyArray);
				if(check==1)		  //Appends frequencyArray only if value not already present.
				{
					frequencyArray[j5]=inputs[i].value;
					j5=j5+1;
				}
				delete check;
			}
			else if(i>=160 && i<164)
			{
				var check;
				check=checkArray(i,osArray);
				if(check==1)		  //Appends osArray only if value not already present.
				{
					osArray[j6]=inputs[i].value;
					j6=j6+1;
				}
				delete check;
			}
		}		
	} 
	//alert(priceArray);
	//alert(brandsArray);
	//alert(RAMArray);
	//alert(coreArray);
	//alert(frequencyArray);
}

function checkArray(k,array)     	  // Checks if the ticked value is already present in priceArray.
{
	var flag=1;
	var z;
	var el=document.getElementsByTagName("Input");
	for(z=0;z<array.length;z++)
	{
		if(array[z] == el[k].value)
		{
			flag=0;
		}
	}
	return flag;
}	

function ajaxRequest()   			 // Sends Request,applies createAll() and deleteBoxes().
{									 // Updates new and old received array.	
	//alert("entered into ajax func");
	var xmlhttp = new XMLHttpRequest();
	var sendPrice = JSON.stringify(priceArray);	
	var sendBrand = JSON.stringify(brandsArray);
	var sendRAM = JSON.stringify(RAMArray);
	var sendCores = JSON.stringify(coreArray);
	var sendFrequency = JSON.stringify(frequencyArray);
	var sendOs = JSON.stringify(osArray);

	xmlhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{ 	
			var received = JSON.parse(this.responseText);
			createAll(received);
			tnewIDarray.fill(0);			    //Filling all elements with 0 for creating new mobile ID array(Part of Trick)
			for(i=0;i<received.length;i++)              		 //||||
			{													 //||||	For creating New array of 
				tnewIDarray[i]=received[i].mobileID;			 //||||	mobile IDs received as per Query,by 
			}											 		 //|||| replacing all previous values.
			newIDarray=tnewIDarray.filter(function(number){		
				return number > 0;				// filtering all 0 if new array is smaller in size.
			});
			deleteBoxes();                      // function called for deleting boxes...
			//alert(oldIDarray);
			//alert(newIDarray);
			oldIDarray=newIDarray;
			//alert(received);
		}
	};
	xmlhttp.open("POST", "ajaxJSON.php?RAM="+sendRAM+"&brands="+sendBrand+"&prices="+sendPrice, true);
	//xmlhttp.open("POST", "filter.php?prices="+sendPrice+"&brands="+sendBrand+"&RAM="+sendRAM, true);
	xmlhttp.send();
}

function createAll(row)     //creates Srboxes according to sql(not actually sql) table received.
{	
	var d;
	for(d=0;d<row.length;d++)
	{	
		if(checkArray2(createdBoxes,row[d].mobileID)==0)
		{
			if(row[d].price!=null && row[d].name!=null)
			{
				//Creating required Variables and setting <img> and <hr> properties...........
				srbox[n]=document.createElement("div");
				srbox[n].className='searchresultbox';
				srbox[n].id=row[d].mobileID;
				createdBoxes.push(srbox[n].id);
			
				var img = document.createElement("IMG");
				img.id='img';
				img.src='Xio.jpeg';
				img.style.align='center';
				img.style.height="150px";
				
				var hr=document.createElement("hr");
				hr.align='left';
				hr.style.width='95%';
				
				var srimagebox=document.createElement("div");
				srimagebox.className='srimagebox';
				
				var srb1=document.createElement("div");
				srb1.className='srb1';
				
				var srb2=document.createElement("div");
				srb2.className='srb2';
				
				var srb1a=document.createElement("div");
				srb1a.className='srb1a';
				
				var spanbox=document.createElement("A");
				//spanbox.id='phoneName';
				spanbox.setAttribute("href", "mobiles.php?id="+row[d].mobileID);
				
				var srb1b=document.createElement("div");
				srb1b.className='srb1b';
				
				var srb1c=document.createElement("div");
				srb1c.className='srb1c';
				
				var srb1bheading=document.createElement("div");
				srb1bheading.className='srb1bheading';
				
				var srb1cheading=document.createElement("div");
				srb1cheading.className='srb1cheading';
				
				var srb2a=document.createElement("div");
				srb2a.className='srb2a';
				
				var srb2b=document.createElement("div");
				srb2b.className='srb2b';
				
				var srb2c=document.createElement("div");
				srb2c.className='srb2c';
				
				var srbbutton1=document.createElement("div");
				srbbutton1.className='srbbutton';
				
				var srbbutton2=document.createElement("div");
				srbbutton2.className='srbbutton';
				
				var spanbold=document.createElement("span");
				spanbold.className='bold';
				
				var spancenter1=document.createElement("span");
				spancenter1.className='center';
				
				var spancenter2=document.createElement("span");
				spancenter2.className='center';
				
				var spancenter0=document.createElement("span");
				spancenter0.className='center';
				
				var centersrbbuttons=document.createElement("center");
				var centerimage=document.createElement("center");
				
				var span1=document.createElement("span");
				span1.className='padd';
				var span2=document.createElement("span");
				span2.className='padd';
				var span3=document.createElement("span");
				span3.className='padd';
				var span4=document.createElement("span");
				span4.className='padd';
				var span5=document.createElement("span");
				span5.className='padd';
				var span6=document.createElement("span");
				span6.className='padd';
				var span7=document.createElement("span");
				span7.className='padd';
				var span8=document.createElement("span");
				span8.className='padd';
				var li1=document.createElement("li");
				li1.className='checkmark';
				var li2=document.createElement("li");
				li2.className='checkmark';
				var li3=document.createElement("li");
				li3.className='checkmark';
				var li4=document.createElement("li");
				li4.className='checkmark';
				var li5=document.createElement("li");
				li5.className='checkmark';
				var li6=document.createElement("li");
				li6.className='checkmark';
				var li7=document.createElement("li");
				li7.className='checkmark';
				var li8=document.createElement("li");
				li8.className='checkmark';
				var ul1=document.createElement("ul");
				var ul2=document.createElement("ul");
				
				//Adding Childs and Subchilds................
				centerimage.appendChild(img);
				srimagebox.appendChild(centerimage);
				
				spanbold.appendChild(document.createTextNode("Features:"));
				srb1bheading.appendChild(spanbold);
				srb1b.appendChild(srb1bheading);
				span1.appendChild(document.createTextNode(row[d].ram+" GB RAM"));
				span2.appendChild(document.createTextNode(row[d].megapixels+" MP Rear Camera"));
				span3.appendChild(document.createTextNode(row[d].rom+" GB Internal Memory"));
				span4.appendChild(document.createTextNode(row[d].gpu+" Graphics Processor"));
				span5.appendChild(document.createTextNode(row[d].chipset));
				span6.appendChild(document.createTextNode(row[d].screen_size+" inches Screen Size"));
				span7.appendChild(document.createTextNode(row[d].display_type+" Display"));
				span8.appendChild(document.createTextNode(row[d].capacity+" mAH Battery"));
				li1.appendChild(span1);
				li2.appendChild(span2);
				li3.appendChild(span3);
				li4.appendChild(span4);
				li5.appendChild(span5);
				li6.appendChild(span6);
				li7.appendChild(span7);
				li8.appendChild(span8);
				ul1.appendChild(li1);
				ul1.appendChild(li2);
				ul1.appendChild(li3);
				ul1.appendChild(li4);
				ul2.appendChild(li5);
				ul2.appendChild(li6);
				ul2.appendChild(li7);
				ul2.appendChild(li8);
				srb1b.appendChild(ul1);
				srb1cheading.appendChild(document.createTextNode("See Full Specifications"));
				srb1c.appendChild(srb1cheading);
				srb1c.appendChild(ul2);
				spanbox.appendChild(document.createTextNode(row[d].name));
				srb1a.appendChild(spanbox);
				srb1a.appendChild(hr);
				srb1.appendChild(srb1a);
				srb1.appendChild(srb1b);
				srb1.appendChild(srb1c);
				
				spancenter1.appendChild(document.createTextNode("Compare"));
				srbbutton1.appendChild(spancenter1);
				spancenter2.appendChild(document.createTextNode("See Price"));
				srbbutton2.appendChild(spancenter2);
				centersrbbuttons.appendChild(srbbutton1);
				centersrbbuttons.appendChild(srbbutton2);
				srb2c.appendChild(centersrbbuttons);
				var price="Rs."+row[d].price;
				srb2a.appendChild(document.createTextNode(price));
				spancenter0.appendChild(document.createTextNode("Ratings Box"));
				srb2b.appendChild(spancenter0);
				srb2.appendChild(srb2a);
				srb2.appendChild(srb2b);
				srb2.appendChild(srb2c);
				
				srbox[n].appendChild(srimagebox);
				srbox[n].appendChild(srb1);
				srbox[n].appendChild(srb2);
				var ultraParent=document.getElementById("maincon");
				ultraParent.appendChild(srbox[n]);
			//	Srbox created..........................
				n=n+1;
			} 
		}
	}

}

function checkArray2(array,element)  //Checks if element exists in array.Used in createAll Function.
{									 //(for creating ID only if it already not exist.)
	var flag=0;
	for(i=0;i<array.length;i++)
	{
		if(array[i]==element)
		{
			flag=1;
		}
	}
	return flag;
}

function deleteBoxes()			//Prepares delBoxesID array by comparing oldIDarray and newIDarray.
{								//Deletes all SrBoxes whose id are present in delBoxesID array.
	var delBoxesID = [];
	var index;
	var i,j,k;
	var temp;
	if(newIDarray.length < oldIDarray.length)
	{
		for(i=0;i<oldIDarray.length;i++)
		{
			for(j=0;j<newIDarray.length;j++)
			{
				if(oldIDarray[i]==newIDarray[j])
				{
					index=1;
				}
			}
			if(index!=1)
			{
				delBoxesID.push(oldIDarray[i]);
			}
			index=0;
		}
	
	var maincon=document.getElementById("maincon");
	var n = [];
	for(i=0;i<delBoxesID.length;i++)
	{	
		{
			n[i]=document.getElementById(delBoxesID[i]);
			for(k=0;k<createdBoxes.length;k++)
			{
				if(createdBoxes[k]==delBoxesID[i])
				{
					temp=createdBoxes[k];
					createdBoxes[k]=createdBoxes[createdBoxes.length-1];
					createdBoxes.pop();
				}
			}
			delete n[i].id;
			maincon.removeChild(n[i]);
		//	alert("Element deleted through delBoxes()");
			// Srbox Deleted............
		}
	}	
	}
}


function emptyScreen()   //Deletes all elements present on screen that are present when priceArray has no Elements.
{	
	var r;
	var main=document.getElementById("maincon");
	var mobile = [];
	if(priceArray[0]==null)
	{
		for(r=createdBoxes.length-1;r>=0;r--)
		{
			mobile[r]=document.getElementById(createdBoxes[r]);	
			createdBoxes.pop();
			delete mobile[r].id;
			main.removeChild(mobile[r]);
			//alert("Deleted Boxes through empty screen.");
		}
	}
	//alert("Executed emptyScreen");
}


function func()
{	
	createDiv();
	//alert("Create div executed");
	createArrays();
	//alert("createArrays executed");
	emptyScreen();		//performs only when there are no elements in priceArray.....
	//alert("emptyScreen executed");
	ajaxRequest();	
	//alert("AJAX request executed");
}
</script>


	<div class="searchresultmaincon"id="maincon">

		<div class="resultstatsbox" id="myDIV">
			<div class="filterby">Filter:</div>
		</div>

	<!-----staart of SRBOX------>
	
	<!-----End of SRBOX---------->


	</div> 

</div>
</body>
</html>