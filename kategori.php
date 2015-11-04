<?php error_reporting(0); 
session_start();
include_once('fonksiyon/baglanti.php');
$kategori = $_GET['id'];
$kategoriadisorgu = "SELECT kat_isim FROM kategori WHERE kat_id = '$kategori'";
$kategoriadi = mysql_fetch_array(mysql_query($kategoriadisorgu,$baglanti));?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kampüs Etkinlikleri Sistemi</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap-rating.css" rel='stylesheet' type='text/css' />
<link href="web/css/font-awesome.css" rel="stylesheet">
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
<script src="web/js/rating.js"></script>
<script src="web/js/tooltip.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script>
$( document ).ready(function() {  
$( "#yakintarih" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'yakintarih'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
$( "#soneklenenler" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'son_eklenenler'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
$( "#populer" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'populer'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
});
</script>
 
</head>
<body>

<?php include('fonksiyon/ust.php');
	include_once('fonksiyon/slider.php');?>
	<center><h2 style="margin-top:-20px;"><?php echo $kategoriadi[0].' Etkinlikleri'; ?></h2></center>
   <div class="content_middle" >
   	  <div class="container">
   	    <div class="content_middle_box">
		<?php include('fonksiyon/kategori_icerik.php'); ?>
		</br>
   		  </div>
   		  </div>
   	  </div>
	  <?php include_once('fonksiyon/kategori_syf_num.php'); ?>
   </div>
   <?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		