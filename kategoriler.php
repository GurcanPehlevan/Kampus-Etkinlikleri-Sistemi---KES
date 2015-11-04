<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Kampüs Etkinlikleri Sistemi | Kategoriler</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="web/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="web/js/login.js"></script>
<script src="web/js/jquery.easydropdown.js"></script>
<!------ Light Box ------>
<link rel="stylesheet" href="web/css/swipebox.css">
<script src="web/js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!------ Eng Light Box ------>	
<script src="web/js/wow.min.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
</head>
<body>
<?php include_once('fonksiyon/ust.php');
		include_once('fonksiyon/slider.php');?>
    
     <center style="margin-top:-20px;"><h2>Kategoriler</h2></center>
   <div class="living_middle">
   	  <div style="margin-top:-30px;margin-bottom:-90px;" class="container">
   	    <div class="entertain_box wow bouncIneUp" data-wow-delay="0.4s">
		  <?php include_once('fonksiyon/kategori_cek.php'); ?>
		   <div class="clearfix"> </div>
		 </div>	
     </div>
   </div>
   <?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		