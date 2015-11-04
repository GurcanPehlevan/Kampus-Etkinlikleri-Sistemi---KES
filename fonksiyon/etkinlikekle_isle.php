<?php
ob_start();
session_start();
include_once('baglanti.php');
include_once('etkinlikekle_fonk.php');

$fotosayi = mysql_real_escape_string($_POST['fotosayisi']);
$etkinlikadi = mysql_real_escape_string($_POST['etkinlikadi']);
$etkinlikkategori = mysql_real_escape_string($_POST['etkinlikkategori']);
$etkinlikuniversite = mysql_real_escape_string($_POST['etkinlikuniversite']);
$etkinlikkampus = mysql_real_escape_string($_POST['etkinlikkampus']);
$etkinlikbaslangic = mysql_real_escape_string($_POST['baslangictarih']);
$etkinlikbaslangic = str_replace('/','-',$etkinlikbaslangic);
$etkinlikbitis = mysql_real_escape_string($_POST['bitistarih']);
$etkinlikbitis = str_replace('/','-',$etkinlikbitis);
$etkinlikiletisim = mysql_real_escape_string($_POST['iletisim']);
$etkinliketiket = mysql_real_escape_string($_POST['etiket']);
$etkinlikdetayli = mysql_real_escape_string($_POST['detayli']);
$kullaniciid = $_SESSION['k_id'];
$etkinlikarray = explode(', ',$etkinliketiket);


galeri_yolla($fotosayi);
kapak_yolla();
$etkinlikgaleri = implode(', ',$etkinlikfotolari);
$sorgu = "INSERT INTO etkinlik (e_isim, e_kategori_id, e_universite, e_kampus, e_baslangic_tarihi, e_bitis_tarihi, e_iletisim, e_etiket, e_detayliaciklama, e_kapakfoto, e_fotolar, e_eklenmetarihi, e_ekleyen_id, e_rating, e_hit, e_onay) VALUES ('$etkinlikadi', '$etkinlikkategori', '$etkinlikuniversite', '$etkinlikkampus', '$etkinlikbaslangic', '$etkinlikbitis', '$etkinlikiletisim', '$etkinliketiket', '$etkinlikdetayli', '$kapakfoto', '$etkinlikgaleri', NOW(), '$kullaniciid', '', '0', '0')";
echo $sorgu;

$db = mysql_query($sorgu, $baglanti);
$son_id = mysql_insert_id($baglanti);
//var_dump($etkinlikarray);
foreach($etkinlikarray as $etiket){
$etkinlik_sorgu = "INSERT INTO etiket (etiket_string, etiket_e_id) VALUES ('$etiket', '$son_id')";
$db_e = mysql_query($etkinlik_sorgu, $baglanti);
echo $etiket;
}
if($db && $db_e){
	header('Location: ../a.php');
}
else{echo 'Hata';}
//var_dump($etkinlikfotolari);
//var_dump($kapakfoto);
//echo 'tamam';
?>