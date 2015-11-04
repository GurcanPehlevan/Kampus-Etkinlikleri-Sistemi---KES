<?php
include_once('baglanti.php');

$etkinlik_id = $_POST['etkinlik'];
$puan = $_POST['puan'];
$puanlayan_id = $_POST['puanlayan'];
$puanlayan_db = ', '.$puanlayan_id;

$e_rating_k_id_str = mysql_result(mysql_query("SELECT e_rating_k_id FROM etkinlik WHERE e_id = '$etkinlik_id' LIMIT 1"),0);
$e_rating_k_id_arr = explode(', ',$e_rating_k_id_str);
if(!in_array($puanlayan_id, $e_rating_k_id_arr)){
$sorgu ="UPDATE etkinlik SET e_rating_k_id = CONCAT(e_rating_k_id, '$puanlayan_db' ), e_ratingsayisi = e_ratingsayisi + 1, e_rating = e_rating + '$puan' WHERE e_id = '$etkinlik_id'";
mysql_query($sorgu,$baglanti);
echo 'Oyunuz alınmıştır.';
}
else {echo 'Daha önce oy verdiniz.';}
?>