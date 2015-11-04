<?php
include_once('baglanti.php');
$mail = $_POST['abonemail'];
$sorgu = "INSERT INTO abone (eposta) VALUES ('$mail')";
mysql_query($sorgu, $baglanti);
?>
<script>
javascript:history.go(-1);
alert('Abonelik isteğiniz alındı.');
</script>