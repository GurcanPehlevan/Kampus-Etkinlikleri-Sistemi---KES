<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php session_start(); 
error_reporting(0);
if(!isset($_SESSION['k_id'])){
	header("Location: ./");
}
?>
<title>Kampüs Etkinlikleri Sistemi | Etkinlik Ekle | KULLANICIADI</title>
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
<body>
<?php include_once('fonksiyon/ust.php');
	  include_once('fonksiyon/slider.php');?>
   </div>
   </div>
   <div style="margin-top:-30px;" class="living_middle wow fadeInUp" data-wow-delay="0.4s">
   	  <div class="container">
   	  	<h2 style="margin-bottom:0px !important;text-transform:capitalize !important;">Etkinlik Ekle</h2>
   	  	  <form id="etkinlikform" name="etkinlikform" method="post" action="fonksiyon/etkinlikekle_isle.php" enctype="multipart/form-data">
                     <div class="text_can">	
					 <input name="etkinlikadi" id="etkinlikadi" type="text" class="text" value="Etkinlik Adı" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Etkinlik Adı';}">
					 <br><?php include_once('fonksiyon/kategori_liste_cek.php'); ?>
					 <br><?php include_once('fonksiyon/universite_liste.php'); ?>
					 <input name="etkinlikkampus" id="etkinlikkampus" type="text" class="text" value="Kampüs" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Kampüs';}">
					 <input class="text" value="Etkinlik Başlangıç Tarihi" type="text" name="baslangictarih" id="baslangictarih" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Etkinlik Başlangıç Tarihi';}$(this).change();"> 
					 <input type="checkbox" id="uzuntarih"/>  Etkinlik bir günden uzun sürüyor
					 <input  style="display:none;" class="text" value="Etkinlik Bitiş Tarihi" type="text" name="bitistarih" id="bitistarih" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Etkinlik Bitiş Tarihi';}"> 
					 <input name="iletisim" id="iletisim" type="text" class="text" value="İletişim Bilgisi (Telefon, Whatsapp, Twitter vb.)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'İletişim Bilgisi (Telefon, Whatsapp, Twitter vb.)';}">
					 <input name="etiket" id="etiket" type="text" class="text" value="Etiket (virgül ile ayırın)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Etiket (virgül ile ayırın)';}">
					 <label class="can_etkinlikfile">Kapak Fotoğrafı (280x180)</span><input id="kapakfoto" style="margin-top:14px;" name="kapakfoto" type="file" /></label><br>
					 <label class="can_etkinlikfile">1. Fotoğrafı Seç (700x400)</span><input id="etkinlikfoto1" style="margin-top:15px;" name="etkinlikfoto1" type="file" /></label>
					 <br><label class="can_etkinlikbaslik">Etkinlik Detaylı Açıklama</label><textarea name="detayli" id="detayli" style="height:250px;"></textarea>
					 <input type="hidden" id="fotosayisi" name="fotosayisi" value="1"></input>
					 <div class="clearfix"></div>
					</div>
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="ETKİNLİK Ekle">
					</div>
					<div class="clearfix"></div>
          </form>
   	  </div>	  
   </div>
<?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		