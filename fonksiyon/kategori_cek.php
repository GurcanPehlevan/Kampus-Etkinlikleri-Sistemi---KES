<?php
include_once('baglanti.php');

$sorgu = "SELECT kat_id,kat_isim,kat_foto FROM kategori ORDER BY kat_sira ASC";

$sonuc = mysql_query($sorgu, $baglanti);

while($sonuclar = mysql_fetch_array($sonuc)){
	$isim = $sonuclar['kat_isim'];
	$foto = $sonuclar['kat_foto'];
	$kat_id = $sonuclar['kat_id'];
	echo '<div style="padding:20px;" class="col-md-3 grid_box">
		   	   <a href="./kategori.php?id='.$kat_id.'"><img src="'.$foto.'" class="img-responsive" alt="2"><span class="zoom-icon"></span> </a>
		   	  <div class="grid_box2">
			   <h4 style="text-transform:capitalize;"> <a href="./kategori.php?id='.$kat_id.'">'.$isim.'</a></h4>
	          </div>
		   </div>';
}
?>