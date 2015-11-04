<?php
error_reporting(0);
include_once('baglanti.php');
if(isset($_POST["kullanicieposta"]))
{  
  $kullanici =  mysql_real_escape_string($_POST["kullanicieposta"]); 
  $sifre1 =  md5($_POST["sifre"]); 
  $sifre =  $_POST["sifre"]; 
  $sorgu = mysql_query("SELECT k_id FROM kullanici WHERE (k_email='$kullanici' AND k_sifre_md5='$sifre1') OR (k_kullaniciadi='$kullanici' AND k_sifre_md5='$sifre1')", $baglanti);
  $kullanicivarmi = mysql_num_rows($sorgu); 
  if($kullanicivarmi) {
      die("<script>$.post('fonksiyon/giris.php', {'kullanicieposta':'$kullanici', 'sifre':'$sifre'});window.location = window.parent.location.href</script>");
  }else{
      die('<script>$(\'.hata\').remove();$("#sifre").after(\'<div class="hata"><p style="color:red;">Hatalı Giriş!</p></div>\');</script>');
  }
}
?>