<?php
session_start();
include_once('baglanti.php');
$gelensayfa = $_SERVER['HTTP_REFERER'];
$kullanicieposta = mysql_real_escape_string($_POST['kullanicieposta']);
$sifre = mysql_real_escape_string(md5($_POST['sifre']));

$sorgu = "SELECT * FROM kullanici WHERE (k_email='$kullanicieposta' AND k_sifre_md5='$sifre') OR (k_kullaniciadi='$kullanicieposta' AND k_sifre_md5='$sifre')";

//eho $sorgu;
$sonuc = mysql_query($sorgu, $baglanti);

if($sonuc){
	while($kullanici = mysql_fetch_array($sonuc)){
		$_SESSION['k_id'] = $kullanici['k_id'];
		$_SESSION['k_adi'] = $kullanici['k_adi'];
		$_SESSION['k_soyadi'] = $kullanici['k_soyadi'];
		$_SESSION['k_kullaniciadi'] = $kullanici['k_kullaniciadi'];
		}
	//header("Location: http://google.com");
}
else{
	echo 'Hata var: '.mysql_error($baglanti);
}
?>