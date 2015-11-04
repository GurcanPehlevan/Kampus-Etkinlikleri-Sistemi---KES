<?php
include_once('baglanti.php');

$ad = mysql_real_escape_string($_POST['isim']);
$soyad = mysql_real_escape_string($_POST['soyad']);
$telefon = mysql_real_escape_string($_POST['telefon']);
$kullaniciadi = mysql_real_escape_string($_POST['kullaniciadi']);
$telefon = mysql_real_escape_string($_POST['telefon']);
$eposta = mysql_real_escape_string($_POST['eposta']);
$universite = mysql_real_escape_string($_POST['etkinlikuniversite']);
$sifre = md5(mysql_real_escape_string($_POST['sifre']));


$sorgu = "INSERT INTO kullanici (k_id, k_adi, k_soyadi, k_kullaniciadi, k_email, k_telefonu, k_universitesi, k_sifre_md5) VALUES ('' , '$ad', '$soyad', '$kullaniciadi', '$eposta', '$telefon', '$universite', '$sifre')";
echo $sorgu;
$db = mysql_query($sorgu, $baglanti);

if($db){
	header("Location: ../");
}
else{
	echo 'Hata var: '.mysql_error($baglanti);
}

?>