<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">


<!--  IGNORE THIS head files starting-->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><script>function disputeIframe(){setTimeout(function (){self.document.open();self.document.write("<h1><a style='font-weight: normal; color: #000; font-family: arial;' href='" + self.location.href + "' target='_top'>Iframes are not supported on a free plan.</a></h1>");                    self.document.close();},200);} try {if (self!=top){disputeIframe();}}catch(e){disputeIframe();}</script><link href="./Home_files/bootstrap3.min.c.css" rel="stylesheet"><link rel="stylesheet" href="./Home_files/font-awesome.min4.css"><link href="./Home_files/hover-min.css" rel="stylesheet"><link href="./Home_files/style.css" rel="stylesheet"><link href="./Home_files/blocks.css" rel="stylesheet"><link href="./Home_files/theme8.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="./Home_files/css"><link rel="stylesheet" type="text/css" href="./Home_files/css(1)"><link rel="stylesheet" type="text/css" href="./Home_files/css(2)"><style type="text/css" data="Page Custom CSS"></style><script src="./Home_files/jquery-3.3.1.min.js.download" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script><script>if(!window.jQuery){document.write('<script src="//d33rxv6e3thba6.cloudfront.net/asset/sites/js/jquery-3.3.1.min.js"></scr'+'ipt>');}</script><meta name="page-source" site="//sites.simbla.com/2956c3c7-e131-4514-2838-b48a3db569e7" page="home" site-id="5be6bfa6d5a0ce00163ebe96" page-id="5be6c06fd5a0ce00163ebe9a" master-page-id=""><link rel="canonical" href="http://sites.simbla.com/2956c3c7-e131-4514-2838-b48a3db569e7/"><link type="text/css" rel="stylesheet" href="./Home_files/lightbox.css">


<!--  IGNORE THIS head files ending-->





</head>
<body>


<!--  IGNORE THIS HEADER starting-->

  <header class="simblaEL container-fluid" data-drag="P270" id="P270" style="position: relative; padding-top: 33px; background-color: rgb(154, 142, 184); border-radius: 0px;" data-title="Header" data-border-type="All"><div class="row simblaEL rDivider" data-drag="P272" id="P272" style="position: relative; padding-top: 0px; padding-bottom: 2px; margin-bottom: 0px; margin-top: 0px; padding-right: 0px;" data-title="Row"><div class="sDivider col-md-2 index0" data-colsize="2" data-title="Column"><div class="simblaEL simblaImg" data-drag="P274" id="P274" style="position: relative;"><img draggable="false" class="" alt="logo.png" data-id="" title="logo.png" style="padding: 11px 50px 5px; margin-top: 0px;" src="./Home_files/-UJh8GIUJeH2702G0pMvoOW6.png"></div></div><div class="sDivider col-md-10 index1" data-colsize="10" data-title="Column"><div class="simblaEL tcH" data-drag="P277" id="P277" style="position: relative;"><div class="textContainer H3" style="cursor: text; padding: 0px 925px 0px 0px;"><h3 style="text-align: center;"><b style=""><font face="Abril Fatface" style="font-size: 25px;">BATMAN RETURNS</font></b></h3></div></div></div></div>
    </header>


<!--  IGNORE THIS HEADER ending-->




  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>


<div class="fullscreen-bg">
  <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
      <source src="pro.mp4" type="video/mp4">       
  </video>
</div>




<!--  IGNORE THIS FOOTER starting-->


<div class="simblaEL simblaBlock footer1 footerBlock containerHolder" data-drag="P168" id="P168" style=""><a class="simblaEL anchorElm" data-drag="divCounter" name="Footer0" id="Footer0" data-id="5be6c0e2d5a0ce00163ebe9e"></a><div class="container secondary" style="width: 100%; background-color: rgb(154, 142, 184); border-radius: 0px;" data-title="Container" data-border-type="All"><div class="simblaEL containerHolder" data-drag="P170" id="P170"><div class="container" data-title="Container"><div class="row simblaEL rDivider" data-drag="P172" id="P172" style="padding: 50px 0px 0px; position: relative;" data-title="Row"><div class="sDivider col-md-3 index0" data-colsize="3" data-title="Column"><div class="simblaEL tcH" data-drag="P174" id="P174" style="position: relative;"><div class="textContainer H4" style="cursor: text; padding-top: 0px; margin-top: 0px;"><h4>About Batman Returns</h4></div></div><div class="simblaEL tc" data-drag="P176" id="P176" style="position: relative;"><div class="textContainer" style="cursor: text; margin-top: 15px; padding-bottom: 30px;"><p>Batman Returns is a web based e-commerce application which allows user to find and compare their desired mobile phones. This is made a part of learning project for CS257 course.</p></div></div><div class="simblaEL tc" data-drag="P178" id="P178" style="position: relative;"></div></div><div class="sDivider col-md-3 index1" data-colsize="3" data-title="Column"><div class="simblaEL tcH" data-drag="P180" id="P180" style=""><div class="textContainer H4 border" style="cursor: text; /* border-bottom-width: 1px; */ /* border-bottom-style: solid; */ /* border-bottom-color: white; */"><h4>Pages</h4></div>
</div><div class="simblaEL tc" data-drag="P182" id="P182" style="position: relative;"><div class="textContainer" style="cursor: text; padding-top: 2px; margin-top: 25px;"><p>Home</p>
</div></div><div class="simblaEL tc" data-drag="P184" id="P184" style=""><div class="textContainer" style="cursor: text;"><p>About &amp; Contacts</p></div></div><div class="simblaEL tc" data-drag="P186" id="P186" style=""><div class="textContainer" style="cursor: text;"><p>&nbsp;Login/Sign-Up</p></div></div><div class="simblaEL tc" data-drag="P188" id="P188" style=""><div class="textContainer" style="cursor: text;"><p>Phone Finder</p></div></div><div class="simblaEL tc" data-drag="P194" id="P194" style="position: relative;"></div><div class="simblaEL tc" data-drag="P196" id="P196" style=""></div><div class="simblaEL tc" data-drag="P198" id="P198" style=""></div><div class="simblaEL tc" data-drag="P200" id="P200" style=""></div><div class="simblaEL tc" data-drag="P202" id="P202" style=""></div><div class="simblaEL tc" data-drag="P204" id="P204" style=""></div></div><div class="sDivider col-md-3 index2" data-colsize="3" data-title="Column"><div class="simblaEL tc" data-drag="P206" id="P206"></div><div class="simblaEL tcH" data-drag="P208" id="P208" style=""><div class="textContainer H4" style="cursor: text;"><h4>Contact info</h4></div></div><div class="simblaEL tcH" data-drag="P210" id="P210" style=""></div><div class="simblaEL tc" data-drag="P212" id="P212" style="position: relative;"><div class="textContainer" style="cursor: text; padding-top: 25px;"><p>Admins - Aditya &amp; Ravi</p></div></div><div class="simblaEL tc" data-drag="P214" id="P214" style="position: relative;"><div class="textContainer" style="cursor: text; padding-top: 30px; padding-bottom: 0px;"><p>Tel | +91-9479739337</p><p><br></p></div></div><div class="simblaEL tc" data-drag="P216" id="P216" style="position: relative;"><div class="textContainer" style="cursor: text; padding-top: 0px; padding-bottom: 15px;"><p>cse170001002@iiti.ac.in</p><p>cse170001039@iiti.ac.in</p></div></div></div><div class="sDivider col-md-3 index3" data-colsize="3" style="" data-title="Column"><div class="simblaEL tcH" data-drag="P218" id="P218" style=""><div class="textContainer H4" style="cursor: text;"><h4>Social media</h4></div></div><div class="simblaEL tcH" data-drag="P220" id="P220" style=""></div><div class="row simblaEL rDivider" data-drag="P222" id="P222" style="padding: 50px 0px 0px; margin-bottom: 20px;" data-title="Row"><div class="sDivider col-xs-3 index0" data-colsize="3" data-title="Column"><div class="simblaEL iconElm" data-drag="P224" id="P224"><i class="fa fa-dribbble" style="" data-color="" data-bgcolor="" data-shadow="ns" data-border="circle"></i></div></div><div class="sDivider col-xs-3 index1" data-colsize="3" data-title="Column"><div class="simblaEL iconElm" data-drag="P226" id="P226"><i class="fa fa-facebook" style="" data-color="" data-bgcolor="" data-shadow="ns" data-border="circle"></i></div></div><div class="sDivider col-xs-3 index2" data-colsize="3" data-title="Column"><div class="simblaEL iconElm" data-drag="P228" id="P228"><i class="fa fa-twitter" style="" data-color="" data-bgcolor="" data-shadow="ns" data-border="circle"></i></div></div><div class="sDivider col-xs-3 index3" data-colsize="3" data-title="Column"><div class="simblaEL iconElm" data-drag="P230" id="P230"><i class="fa fa-instagram" style="" data-color="" data-bgcolor="" data-shadow="ns" data-border="circle"></i></div></div></div><div class="simblaEL simblaImg" data-drag="P232" id="P232" style="position: relative;"><img draggable="false" class="" alt="logo.png" data-id="" title="logo.png" style="margin-left: 0px; padding: 15px 15px 15px 1px;" src="./Home_files/gXIU9NqlBSXvsr_RZFQQhYqz.png"></div></div></div></div></div><div class="simblaEL containerHolder" data-drag="P234" id="P234"><div class="container" style="" data-title="Container"><div class="row simblaEL rDivider" data-drag="P236" id="P236" style="padding: 40px 0px 0px; margin-bottom: 30px;" data-title="Row"><div class="sDivider col-md-6 index0" data-colsize="6" data-title="Column"><div class="simblaEL tc" data-drag="P238" id="P238" style=""><div class="textContainer" style="cursor: text;"><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; www.xyz.com</p></div></div><div class="simblaEL tc" data-drag="P240" id="P240"></div><div class="simblaEL tc" data-drag="P242" id="P242" style=""></div></div><div class="sDivider col-md-6 index1" data-colsize="6" data-title="Column"><div class="simblaEL tc" data-drag="P244" id="P244" style=""><div class="textContainer" style="cursor: text;"><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;All rights reserved <b><font style="font-size: 18px;">Batman Returns</font></b></p></div></div><div class="simblaEL tc" data-drag="P246" id="P246" style=""></div></div></div></div></div></div></div>


<!--  IGNORE till THIS FOOTER ending -->



</body>
</html>