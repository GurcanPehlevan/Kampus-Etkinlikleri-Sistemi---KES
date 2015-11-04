<?php
include_once('baglanti.php');

$sorgu = "SELECT e_rating,e_ratingsayisi FROM etkinlik WHERE e_id = '$etkinlik_id'";

$sonuc = mysql_query($sorgu, $baglanti);

while($sonuclar = mysql_fetch_array($sonuc)){
	$e_toplam_rating = $sonuclar['e_rating'];
	$e_rating = $sonuclar['e_ratingsayisi'];
}
$etkinlik_rating = number_format(($e_toplam_rating / $e_rating), 2);
?>