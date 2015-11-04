<?php
ini_set('memory_limit', '-1');
$etkinlikfotolari = array();
function crop_galeri($kaynak,$hedef)
{
      define( 'DESIRED_IMAGE_WIDTH', 700 ); //yeniden boyutlandirmak istedigimiz genislik
      define( 'DESIRED_IMAGE_HEIGHT', 400 ); //yeniden boyutlandirmak istedigimiz yukseklik
 
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
function crop_kapak($kaynak,$hedef)
{
      define( 'DESIRED_IMAGE_WIDTH', 270 ); //yeniden boyutlandirmak istedigimiz genislik
      define( 'DESIRED_IMAGE_HEIGHT', 180 ); //yeniden boyutlandirmak istedigimiz yukseklik
 
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

function galeri_yolla($id){
	global $etkinlikfotolari;
	$dizin = "../etkinlikgaleri/";
	for($i=1;$i<=$id;$i++){
    $hedef = $dizin.rand(10000,99999).'-'.str_replace(" ","-",basename($_FILES["etkinlikfoto$i"]["name"]));
	$etkinlikfotolari[] = substr($hedef, 3);
    $check = getimagesize($_FILES["etkinlikfoto$i"]["tmp_name"]);
    if($check !== false) {
        //echo "tamam";
    } else {
        exit;
    }
	if(crop_galeri($_FILES["etkinlikfoto$i"]["tmp_name"], $hedef)){
		//echo 'tamamdir';
	}
	else {echo 'hata var';}
}
		return $etkinlikfotolari;
}
function kapak_yolla(){
	global $kapakfoto;
	$dizin = "../etkinlikgaleri/";
    $hedef = $dizin.rand(10000,99999).'-'.str_replace(" ","-",basename($_FILES["kapakfoto"]["name"]));
	$kapakfoto = substr($hedef, 3);
    $check = getimagesize($_FILES["kapakfoto"]["tmp_name"]);
    if($check !== false) {
        //echo "tamam";
    } else {
        exit;
    }
	if(crop_kapak($_FILES["kapakfoto"]["tmp_name"], $hedef)){
		//echo 'tamamdir';
	}
	else {echo 'hata var';}

		return $kapakfoto;
}
//var_dump($etkinlikfotolari);
?>