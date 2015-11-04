<?php
ob_start();
error_reporting(0);
include_once('baglanti.php');
$etkinlik_id = $_GET['id'];
if(!is_numeric($etkinlik_id)){
	header('Location: ./404.php');
}
$sorgu = "SELECT * FROM etkinlik WHERE e_id = '$etkinlik_id'";

$sonuc = mysql_query($sorgu,$baglanti);
if(mysql_num_rows($sonuc) == 0){
	header("Location: 404.php");
}
if($sonuc){
	while($sonuclar = mysql_fetch_array($sonuc)){
		$etkinlikisim = $sonuclar['e_isim'];
		$etkinlik_kat_id = $sonuclar['e_kategori_id'];
		$etkinlikuniversite = $sonuclar['e_universite'];
		$etkinlikkampus = $sonuclar['e_kampus'];
		$etkinlikbaslangic = $sonuclar['e_baslangic_tarihi'];
		$etkinlikbitis = $sonuclar['e_bitis_tarihi'];
		$etkinlikiletisim = $sonuclar['e_iletisim'];
		$etkinliketiket_str = $sonuclar['e_etiket'];
		$etkinlikdetayli = $sonuclar['e_detayliaciklama'];
		$etkinlikgaleri_str = $sonuclar['e_fotolar'];
		$etkinlikekleyenid = $sonuclar['e_ekleyen_id'];
		$etkinlikfiyat = $sonuclar['e_fiyat'];
		$etkinlikrating = $sonuclar['e_rating'];
		$etkinlikhit = $sonuclar['e_hit'];
		$etkinlikkapakfoto = $sonuclar['e_kapakfoto'];
		$etkinlikid = $sonuclar['e_id'];
	}
}
$sorgu = "SELECT k_kullaniciadi FROM kullanici WHERE k_id='$etkinlikekleyenid'";
$sonuc = mysql_query($sorgu,$baglanti);
if($sonuc){
	while($sonuclar = mysql_fetch_array($sonuc)){
		$etkinlikekleyen = $sonuclar['k_kullaniciadi'];
	}
}
else{echo 'hata';}
$sorgu = "SELECT kat_isim FROM kategori WHERE kat_id='$etkinlik_kat_id'";
$sonuc = mysql_query($sorgu,$baglanti);
if($sonuc){
	while($sonuclar = mysql_fetch_array($sonuc)){
		$etkinlikkategori = $sonuclar['kat_isim'];
	}
}
$etiketid = array();

$etkinliketiket_arr = explode(', ',$etkinliketiket_str);
foreach($etkinliketiket_arr as $etiket){
$sorgu = "SELECT etiket_id FROM etiket WHERE etiket_string='$etiket' LIMIT 1";
$sonuc = mysql_query($sorgu,$baglanti);
if($sonuc){
	while($sonuclar = mysql_fetch_array($sonuc)){
		$etiketidleri[] = $sonuclar['etiket_id'];
	}
}
else{echo 'hata';}
}
$etkinlikiletisim = str_replace(', ','<br>',$etkinlikiletisim);
$etkinlikgaleri_arr = explode(', ',$etkinlikgaleri_str);
//var_dump($etkinlikgaleri_arr);
$etkinlikgaleri_arr = explode(', ',$etkinlikgaleri_str);
?>