<?php
session_start();
include_once('baglanti.php');
$etkinlik_session = 'etkinlik'.$etkinlik_id;
$sorgu = "UPDATE etkinlik SET e_hit = e_hit + 1 WHERE e_id = '$etkinlik_id'";
if(is_null($_SESSION[$etkinlik_session]['goruntulendi'])){
mysql_query($sorgu, $baglanti);
}
$_SESSION[$etkinlik_session]['goruntulendi'] = true;
?>