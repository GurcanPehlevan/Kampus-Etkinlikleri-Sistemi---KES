<?php
include_once('baglanti.php');

$etiket_id = $_GET['id'];
if(!is_numeric($etiket_id)){
	header('Location: ./404.php');
}

$sorgu = "SELECT etiket_string FROM etiket WHERE etiket_id = '$etiket_id'";
$sonuc = mysql_query($sorgu, $baglanti);

$sonuclar = mysql_fetch_array($sonuc);

$etiket_string = $sonuclar['etiket_string'];
$etiket_etkinlik_idleri = array();
$sorgu = "SELECT DISTINCT etiket_e_id FROM etiket WHERE etiket_string = '$etiket_string'";
$sonuc = mysql_query($sorgu, $baglanti);
while($sonuclar = mysql_fetch_array($sonuc)){
	$etiket_etkinlik_idleri[] = $sonuclar['etiket_e_id'];
}
include_once('etkinlikcek.php');
foreach($etiket_etkinlik_idleri as $e_id){
if($i == 0 || $i%4==0){
		echo '<div class="top_grid top_grid wow bounceInUp">';
	}
	echo '<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="'.$etkinlikkapakfoto.'" class="img-responsive" alt=""/></div>
   				    <!--<div class="sale">$2.980</div>-->
   			          <div class="mask">
                        <a href="etkinlik.php?id='.$e_id.'"><div style=margin-top:55px;" class="info"><i class="search"> </i> Detayları Görüntüle</div></a>
                        <ul class="mask_img">
                        	<!--<li class="star"><img src="web/images/star.png" alt=""/></li>
                        	<li class="set"><img src="web/images/set.png" alt=""/></li>-->
                        	<div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <!--<i class="home"></i>-->
   				 <div class="inner_wrap">
   				 	<a href="etkinlik.php?id='.$e_id.'"><h3>'.$etkinlikisim.'</h3></a>
   				 	<ul class="star1">
   				 	  <h4 class="green">'.$etkinlikuniversite.'</h4>
					  <p><h4 class="green">'.$etkinlikkampus.'</h4></p>
   				 	  <li><a href="#">Puan: <img src="web/images/star1.png" alt=""></a></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>';	
			$i++;

	if($i != 0 && $i%4==0){
		echo '</div><div style="padding:5px">&nbsp;</div>';
	}
}
?>