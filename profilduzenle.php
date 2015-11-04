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
$durum = $_GET['d'];
include_once('fonksiyon/profil_cek.php');
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
<!--Animation-->
<script src="web/js/wow.min.js"></script>
<script src="web/js/profilkontrol.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css'/>
<script type="text/javascript">

</script>
<script>
	new WOW().init();
</script>
<script>
$( document ).ready(function() {
	$('select#etkinlikuniversite').val('<?php echo $universite ?>');
});
</script>
</head>
<body>
<?php include_once('fonksiyon/ust.php');
	  include_once('fonksiyon/slider.php');
?>
   </div>
   </div>
   <div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
   	  <div class="container" style="margin-top:-50px;">
   	  	<h2 style="margin-bottom:0px !important;text-transform:capitalize !important;">Profil Düzenle<br><br><?php echo $kadi; ?></h2><?php if($durum=='ok'){echo '<br><center><h3>Profiliniz başarıyla düzenlendi.</h3></center>';} ?><br>
   	  	  <form id="etkinlikform" name="etkinlikform" method="post" action="fonksiyon/profilduzenle_isle.php" enctype="multipart/form-data">
					<div class="text_can_profil col-md-6 col-md-offset-3">
                    <label class="text profil_duzenle">E-posta: </label><input name="eposta" id="eposta" type="text" class="text" value="<?php echo $email; ?>"><br>
					<label class="text profil_duzenle">Yeni Şifre: </label><input name="sifre" id="sifre" type="password" class="text"><br>
					<label class="text profil_duzenle">Yeni Şifre Tekrar: </label><input name="sifretekrar" id="sifretekrar" type="password" class="text" onfocusout="sifrekontrol()"><br>
					<label class="text profil_duzenle">Üniversite: </label><?php include_once('fonksiyon/universite_liste.php'); ?><br>
					<label class="text profil_duzenle">Telefon: </label><input name="telefon" id="telefon" type="text" class="text" value="<?php echo $telefon; ?>"><br>
					<label class="text profil_duzenle">twitter.com/ </label><input name="twitter" id="twitter" type="text" class="text" value="<?php echo $twitter; ?>"><br>
					<label class="text profil_duzenle">facebook.com/ </label><input name="facebook" id="facebook" type="text" class="text" value="<?php echo $facebook; ?>"><br>
					<label class="text profil_duzenle">instagram.com/ </label><input name="instagram" id="instagram" type="text" class="text" value="<?php echo $instagram; ?>"><br>
					<label class="text profil_duzenle" style="position:relative;top:115px;">Profil Fotoğrafı </label><?php  if($avatar!=''){echo '<style>
.yuvarlak {
	width: 200px;
	height: 200px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url('.$avatar.') no-repeat center;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);	
	margin-bottom:30px;
	}

.yuvarlak img {
	opacity: 0;
	filter: alpha(opacity=0);
	}
</style><center><div class="yuvarlak"><img style="width:150px;height:auto" src="'.$avatar.'"/></div></center>  ';}else{ echo '<style>
.yuvarlak {
	width: 200px;
	height: 200px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url(profilfoto/varsayilan_profil.jpg) no-repeat center;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	margin-bottom:30px;
	}

.yuvarlak img {
	opacity: 0;
	filter: alpha(opacity=0);
	}
</style><center><div class="yuvarlak"><img style="width:150px;height:auto" src="profilfoto/varsayilan_profil.jpg"/></div></center>'; } ?>
					<input style="float:right;" id="profilfoto" style="margin-top:15px;" name="profilfoto" type="file" />
					<div class="form-submit1">
			           <br><br><br><input name="submit" type="submit" id="submit" value="ProfİLİMİ Düzenle">
					</div>
					</div>
          </form>
   	  </div>	  
   </div>
<?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		