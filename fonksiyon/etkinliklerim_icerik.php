﻿<?php session_start(); ?>
<script>
function tekrar_baslat(){
$('input.check').on('change', function () {
          alert('Rating: ' + $(this).val());
        });
        $('#programmatically-set').click(function () {
          $('#programmatically-rating').rating('rate', $('#programmatically-value').val());
        });
        $('#programmatically-get').click(function () {
          alert($('#programmatically-rating').rating('rate'));
        });
        $('.rating-tooltip').rating({
          extendSymbol: function (rate) {
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              title: rate + ' Puan'
            });
          }
        });
        $('.rating-tooltip-manual').rating({
          extendSymbol: function () {
            var title;
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              trigger: 'manual',
              title: function () {
                return title;
              }
            });
            $(this).on('rating.rateenter', function (e, rate) {
              title = rate;
              $(this).tooltip('show');
            })
            .on('rating.rateleave', function () {
              $(this).tooltip('hide');
            });
          }
        });
        $('.rating').each(function () {
          $('<span class="label label-default"></span>')
            .text($(this).val() || ' ')
            .insertAfter(this);
        });
        $('.rating').on('change', function () {
          $(this).next('.label').text($(this).val());
        });
		
		 $('[id="programmatically-rating"]').on('change', function () {
			 var $t = $(this).next();
			 $.post('fonksiyon/puan.php', {'etkinlik':$(this).parent(1).find('[id="etkinlik_rating_id"]').val(), 'puan':$(this).val(),'puanlayan':'<?php echo $_SESSION['k_id']; ?>'}, function(data) {
			 $t.html(data);
			 });
});
}
</script>

<script>
      $( document ).ready(function() {
        $('input.check').on('change', function () {
          alert('Rating: ' + $(this).val());
        });
        $('#programmatically-set').click(function () {
          $('#programmatically-rating').rating('rate', $('#programmatically-value').val());
        });
        $('#programmatically-get').click(function () {
          alert($('#programmatically-rating').rating('rate'));
        });
        $('.rating-tooltip').rating({
          extendSymbol: function (rate) {
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              title: rate + ' Puan'
            });
          }
        });
        $('.rating-tooltip-manual').rating({
          extendSymbol: function () {
            var title;
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              trigger: 'manual',
              title: function () {
                return title;
              }
            });
            $(this).on('rating.rateenter', function (e, rate) {
              title = rate;
              $(this).tooltip('show');
            })
            .on('rating.rateleave', function () {
              $(this).tooltip('hide');
            });
          }
        });
        $('.rating').each(function () {
          $('<span class="label label-default"></span>')
            .text($(this).val() || ' ')
            .insertAfter(this);
        });
        $('.rating').on('change', function () {
          $(this).next('.label').text($(this).val());
        });
		
		 $('[id="programmatically-rating"]').on('change', function () {
			 var $t = $(this).next();
			 $.post('fonksiyon/puan.php', {'etkinlik':$(this).parent(1).find('[id="etkinlik_rating_id"]').val(), 'puan':$(this).val(),'puanlayan':'<?php echo $_SESSION['k_id']; ?>'}, function(data) {
			 $t.html(data);
			 tekrar_baslat();
			 });
        });
      });

    </script>

<?php
include_once('baglanti.php');
$sayfa = (($_GET['sayfa']-1)*8);
$kategori = $_GET['id'];
if($sayfa < 0){$sayfa = 0;}
$id = $_SESSION['k_id'];
$icerik_sayisi_sorgu = "SELECT e_id FROM etkinlik WHERE e_ekleyen_id = '$id'";
$toplam_etkinlik_sayisi = mysql_num_rows(mysql_query($icerik_sayisi_sorgu,$baglanti));
$sayfa_sayisi = intval($toplam_etkinlik_sayisi/8 + 1);

$sorgu = "SELECT * FROM etkinlik WHERE e_ekleyen_id = '$id' ORDER BY e_id DESC LIMIT $sayfa, 8";
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
		echo '<div id="etkinlikler" class="top_grid top_grid wow bounceInUp">';
	}
	echo "<script>$('.rating-tooltip').rating({
          extendSymbol: function (rate) {
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              title: rate + ' Puan'
            });
          }
        });
        $('.rating-tooltip-manual').rating({
          extendSymbol: function () {
            var title;
            $(this).tooltip({
              container: 'body',
              placement: 'bottom',
              trigger: 'manual',
              title: function () {
                return title;
              }
            });</script>";
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
   				 	  <li><input id="etkinlik_rating_id" type="hidden" value="'.$etkinlikid.'"><input value="'.$etkinlik_rating.'" type="hidden" class="rating-tooltip" id="programmatically-rating"><p id="ratingkontrol"></p></li>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>';	
			$i++;

	if($i != 0 && $i%4==0){
		echo '</div><div style="padding:5px">&nbsp;</div><div class="clearfix"></div>';
	}
}

?>

