<?php
error_reporting(0);
include_once('baglanti.php');
$sonuc = mysql_query("SELECT * FROM kategori", $baglanti);
  
echo '<select name="etkinlikkategori" id="etkinlikkategori">';
echo '<option value ="bos">Kategori Seçiniz</option>';
 
while($kategori = mysql_fetch_array($sonuc)){
	echo '<option value='.$kategori['kat_id'].'>'.$kategori['kat_isim'].'</option>';
}
echo '</select>';
?>