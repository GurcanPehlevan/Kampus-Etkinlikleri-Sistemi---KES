<?php
ob_start();
include_once('baglanti.php');
if(isset($_GET['id'])){
$k_id = $_GET['id'];}
else {$k_id = $_SESSION['k_id'];}

$sorgu = "SELECT * FROM kullanici WHERE k_id = '$k_id'";
$sonuc = mysql_query($sorgu, $baglanti);
if(mysql_num_rows($sonuc) == 0){
	header("Location: 404.php");
}
if($sonuc){
	while($sonuclar = mysql_fetch_array($sonuc)){
		$twitter = $sonuclar['k_twitter'];
		$facebook = $sonuclar['k_facebook'];
		$instagram = $sonuclar['k_instagram'];
		$gplus = $sonuclar['k_gplus'];
		$avatar = $sonuclar['k_avatar'];
		$kadi = $sonuclar['k_kullaniciadi'];
		$email = $sonuclar['k_email'];
		$hakkinda = $sonuclar['k_hakkinda'];
		$telefon = $sonuclar['k_telefonu'];
		$universite = $sonuclar['k_universitesi'];
	}
}

//var_dump(isset($avatar));
?>