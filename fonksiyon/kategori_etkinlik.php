<?php error_reporting(0);
include_once('baglanti.php');


$sorgu = "SELECT * FROM etkinlik ORDER BY e_baslangic_tarihi ASC LIMIT 16";

$sonuc = mysql_query($sorgu, $baglanti);

	$i=0;
while($sonuclar = mysql_fetch_array($sonuc)){
	$etkinlikisim = $sonuclar['e_isim'];
	$etkinlikuniversite = $sonuclar['e_universite'];
	$etkinlikkampus = $sonuclar['e_kampus'];
	$etkinlikrating = $sonuclar['e_rating'];
	$etkinlikkapakfoto = $sonuclar['e_kapakfoto'];
	$etkinlikid = $sonuclar['e_id'];
	$e_toplam_rating = $sonuclar['e_rating'];
	$e_rating = $sonuclar['e_ratingsayisi'];
	$etkinlik_rating = number_format(($e_toplam_rating / $e_rating), 2);
	
	if($i == 0 || $i%4==0){
		echo '<div class="top_grid top_grid wow bounceInUp">';
	}
	echo '<div class="col-md-3">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="'.$etkinlikkapakfoto.'" class="img-responsive" alt=""/></div>
   				    <!--<div class="sale">$2.980</div>-->
   			          <div class="mask">
                        <a href="etkinlik.php?id='.$etkinlikid.'"><div style=margin-top:55px;" class="info"><i class="search"> </i> Detayları Görüntüle</div></a>
                        <ul class="mask_img">
                        	<!--<li class="star"><img src="web/images/star.png" alt=""/></li>
                        	<li class="set"><img src="web/images/set.png" alt=""/></li>-->
                        	<div class="clearfix"> </div>
                        </ul>
                       </div>
                   </div> 
                   <!--<i class="home"></i>-->
   				 <div class="inner_wrap">
   				 	<a href="etkinlik.php?id='.$etkinlikid.'"><h3>'.$etkinlikisim.'</h3></a>
   				 	<ul class="star1">
   				 	  <h4 class="green">'.$etkinlikuniversite.'</h4>
					  <p><h4 class="green">'.$etkinlikkampus.'</h4></p>
   				 	  <li><input value="'.$etkinlik_rating.'" type="hidden" class="rating-tooltip" id="programmatically-rating"><p id="ratingkontrol"></p></li>
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
     
		