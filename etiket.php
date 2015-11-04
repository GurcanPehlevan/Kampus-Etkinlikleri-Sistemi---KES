<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kampüs Etkinlikleri Sistemi</title>
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
<!--Animation-->
<script src="web/js/wow.min.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
	$( document ).ready(function() {  
	$('.content_middle_box').css('border-bottom','0px');	});
</script>
</head>
<body>
<?php include('fonksiyon/ust.php') ?>
   <?php include_once('fonksiyon/slider.php'); ?>
   <div class="content_top">
   	  <div class="container">
   		<div id="etiket_baslik"></div>
   	</div>
   </div>
   <div style="padding-bottom:50px;" class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
		<?php include_once('fonksiyon/etiketcek.php'); ?>
		<script>$('#etiket_baslik').append('<center><h2 style="margin-top:-25px;"><?php echo $etiket_string; ?> etiketli etkinlikler</h2></center>');</script>
   		  </div>
   		  </div>
   	  </div>
   </div>
   <?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		