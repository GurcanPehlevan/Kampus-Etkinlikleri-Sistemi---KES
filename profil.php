<?php error_reporting(0); include_once('fonksiyon/profil_cek.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kampüs Etkinlikleri Sistemi | <?php echo $kadi; ?></title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css'/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css'/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="web/js/jquery-1.11.1.min.js"></script>
<script src="web/js/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/blitzer/jquery-ui.css">
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="web/js/login.js"></script>
<script type="text/javascript" src="web/js/etkinlikkontrol.js"></script>
<!--Animation-->
<script src="web/js/wow.min.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css'/>
<script type="text/javascript">

</script>

<script>
	new WOW().init();
</script>
<script>
$(window).unload(function() {
	localStorage.clear();
	}); 
</script>
</head>
<?php include_once('fonksiyon/ust.php');include_once('fonksiyon/slider.php');?>
<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
   	  <div class="container"> 	  	
	  <?php include_once('fonksiyon/profil_detay.php'); ?>
   	  </div>	  
   </div>
<?php include_once('fonksiyon/alt.php');?>


</body>
</html>	