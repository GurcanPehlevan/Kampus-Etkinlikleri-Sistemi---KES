<?php
error_reporting(0);
include_once('baglanti.php');
if(isset($_POST["kullaniciadi"]))
{  
  $kullanici =  $_POST["kullaniciadi"]; 
  $sorgu = mysql_query("SELECT k_id FROM kullanici WHERE k_kullaniciadi='$kullanici'", $baglanti);
  $kullanicivarmi = mysql_num_rows($sorgu); 
  if($kullanicivarmi) {
      die('<script>$("#kullaniciadi").after(\'<div class="hata"><p style="color:red;">kullanıcı adı alınmış</p></div>\');</script>');
  }else{
      die('<script>$("#kullaniciadi").after(\'<div class="hata"><p style="color:green;">kullanıcı adı uygun</p></div>\');</script>');
  }
}
?>