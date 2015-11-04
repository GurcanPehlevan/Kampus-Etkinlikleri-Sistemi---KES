<?php
error_reporting(0);
include_once('baglanti.php');
if(isset($_POST["eposta"]))
{  
  $eposta =  $_POST["eposta"]; 
  $sorgu = mysql_query("SELECT k_id FROM kullanici WHERE k_email='$eposta'", $baglanti);
  $epostavarmi = mysql_num_rows($sorgu);
  if($epostavarmi) {
      die('<script>$("#eposta").after(\'<div class="hata"><p style="color:red;">e-posta kullanılmış</p></div>\');</script>');
  }else{
      die('<script>$("#eposta").after(\'<div class="hata"><p style="color:green;">e-posta uygun</p></div>\');</script>');
  }
}
?>