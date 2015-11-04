<?php
error_reporting(0);
$sunucu = "localhost";
$kadi = "root";
$sifre = "";

$baglanti = mysql_connect($sunucu, $kadi, $sifre);


if (!$baglanti){
	die('hata: '. mysql_error());
}
mysql_select_db('kes');
mysql_query("SET NAMES UTF8");
?>