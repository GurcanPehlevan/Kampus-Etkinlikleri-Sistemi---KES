<?php
session_start();
ini_set('memory_limit', '-1');
include_once('baglanti.php');
include_once('profil_cek.php');
$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];
$universite = $_POST['etkinlikuniversite'];
$telefon = $_POST['telefon'];
$twitter = $_POST['twitter'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
if($_FILES["profilfoto"]["tmp_name"]!=''){
profil_yolla();
$avatar = $profilfoto;}
$k_id = $_SESSION['k_id'];

if($sifre!=''){
	$sifre_md5 = md5($sifre);
	$sorgu = "UPDATE kullanici SET k_email = '$eposta', k_sifre_md5 = '$sifre_md5', k_universitesi = '$universite', k_telefonu = '$telefon', k_twitter = '$twitter', k_facebook = '$facebook', k_instagram = '$instagram', k_avatar = '$avatar' WHERE k_id='$k_id'";
}else{
	$sorgu = "UPDATE kullanici SET k_email = '$eposta', k_universitesi = '$universite', k_telefonu = '$telefon', k_twitter = '$twitter', k_facebook = '$facebook', k_instagram = '$instagram', k_avatar = '$avatar' WHERE k_id='$k_id'";
}
echo $sorgu;
$sonuc = mysql_query($sorgu, $baglanti);
if($sonuc){header('Location: ../profilduzenle.php?d=ok');
}
function crop_profil($kaynak,$hedef)
{
      define( 'DESIRED_IMAGE_WIDTH', 200 ); //yeniden boyutlandirmak istedigimiz genislik
      define( 'DESIRED_IMAGE_HEIGHT', 200 ); //yeniden boyutlandirmak istedigimiz yukseklik
 
      $source_path = $kaynak;
 
      list( $source_width, $source_height, $source_type ) = getimagesize( $source_path );
 
      switch ( $source_type )
      {
        case IMAGETYPE_GIF:
          $source_gdim = imagecreatefromgif( $source_path );
          break;
 
        case IMAGETYPE_JPEG:
          $source_gdim = imagecreatefromjpeg( $source_path );
          break;
 
        case IMAGETYPE_PNG:
          $source_gdim = imagecreatefrompng( $source_path );
          break;
      }
 
      $source_aspect_ratio = $source_width / $source_height;
      $desired_aspect_ratio = DESIRED_IMAGE_WIDTH / DESIRED_IMAGE_HEIGHT;
 
      if ( $source_aspect_ratio > $desired_aspect_ratio )
      {
        $temp_height = DESIRED_IMAGE_HEIGHT;
        $temp_width = ( int ) ( DESIRED_IMAGE_HEIGHT * $source_aspect_ratio );
      }
      else
      {
        $temp_width = DESIRED_IMAGE_WIDTH;
        $temp_height = ( int ) ( DESIRED_IMAGE_WIDTH / $source_aspect_ratio );
      }
 
      $temp_gdim = imagecreatetruecolor( $temp_width, $temp_height );
      imagecopyresampled(
        $temp_gdim,
        $source_gdim,
        0, 0,
        0, 0,
        $temp_width, $temp_height,
        $source_width, $source_height
      );
 
      $x0 = ( $temp_width - DESIRED_IMAGE_WIDTH ) / 2;
      $y0 = ( $temp_height - DESIRED_IMAGE_HEIGHT ) / 2;
 
      $desired_gdim = imagecreatetruecolor( DESIRED_IMAGE_WIDTH, DESIRED_IMAGE_HEIGHT );
      imagecopy(
        $desired_gdim,
        $temp_gdim,
        0, 0,
        $x0, $y0,
        DESIRED_IMAGE_WIDTH, DESIRED_IMAGE_HEIGHT
      );
 
      imagejpeg($desired_gdim,$hedef);
 
      imagedestroy($desired_gdim);
	  return true;
}
function profil_yolla(){
	global $profilfoto;
	$dizin = "../profilfoto/";
    $hedef = $dizin.rand(10000,99999).'-'.str_replace(" ","-",basename($_FILES["profilfoto"]["name"]));
	$profilfoto = substr($hedef, 3);
    $check = getimagesize($_FILES["profilfoto"]["tmp_name"]);
    if($check !== false) {
        //echo "tamam";
    } else {
        exit;
    }
	if(crop_profil($_FILES["profilfoto"]["tmp_name"], $hedef)){
		//echo 'tamamdir';
	}
	else {echo 'hata var';}

		return $profilfoto;
}
?>