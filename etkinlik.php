<?php 
session_start();
include_once('fonksiyon/etkinlikcek.php');
include_once('fonksiyon/hit_arttir.php');
include_once('fonksiyon/puan_cek.php');
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $etkinlikisim; ?></title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap-rating.css" rel='stylesheet' type='text/css' />
<link href="web/css/font-awesome.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="web/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="web/js/login.js"></script>
<script src="web/js/jquery.easydropdown.js"></script>
<script src="web/js/wow.min.js"></script>
<script src="web/js/rating.js"></script>
<script src="web/js/tooltip.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<?php //include_once('slider.php'); ?>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
 <script>
      $(function () {
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
		 $('#programmatically-rating').on('change', function () {
			 $.post('fonksiyon/puan.php', {'etkinlik':'<?php echo $etkinlik_id; ?>', 'puan':$(this).val(),'puanlayan':'<?php echo $_SESSION['k_id']; ?>'}, function(data) {
			 $("#ratingkontrol").html(data);
			 });
          //alert($(this).val());
        });
      });
    </script>
<script>
$( document ).ready(function() {
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  arrows: false,
  autoplay: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,  
  arrows: true,
  centerMode: true,
  focusOnSelect: true
});
	});	
</script>
</head>
<body>

<?php include_once('fonksiyon/ust.php');?>
<?php include_once('fonksiyon/slider.php'); ?>
     <div class="content_top">
	 <h2 style="text-align:center;margin-top:-20px;"><?php echo $etkinlikisim; ?></h2>
   </div>
   <div class="living_middle">
   	  <div class="container">
   		  <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   		  	<!--<ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Ekleyen:</h4><span><?php echo $etkinlikekleyen; ?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul> -->
			<ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Etkinlik Adı:</h4><span><?php echo $etkinlikisim; ?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Etkinlik Tarİhİ:</h4><span><?php if($etkinlikbitis){echo $etkinlikbaslangic.' - '.$etkinlikbitis;}else{echo $etkinlikbaslangic;} ?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
			<ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Üniversite:</h4><span><?php echo $etkinlikuniversite;?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
			<ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Kampüs:</h4><span><?php echo $etkinlikkampus;?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
			<ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Kategorİ:</h4><span><?php echo $etkinlikkategori;?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>etKİNLİK Puanı:</h4><span><input value="<?php echo $etkinlik_rating; ?>" type="hidden" class="rating-tooltip" id="programmatically-rating"><p id="ratingkontrol"></p></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-video"></i></li>
                    <li class="feature_right"><h4>İrtİbat:</h4><span><?php echo $etkinlikiletisim; ?></span>
                    </li>
                    <div class="clearfix"></div>
            </ul>
         </div>
         <div class="col-md-8 wow fadeInRight" data-wow-delay="0.4s">
		      <div class="slider slider-for">
			  <?php foreach($etkinlikgaleri_arr as $etkinlikfoto){
				  echo '<div><img src="'.$etkinlikfoto.'"/></div>';
			  } ?>
			</div>
			<div id="galeri_can"><div class="slider slider-nav">
			   <?php foreach($etkinlikgaleri_arr as $etkinlikfoto){
				  echo '<div><img style="width:180px;height:auto;" src="'.$etkinlikfoto.'"/></div>';
			  } ?>
			</div></div>
		 </div>
		    <div class="clearfix"></div>
		   </div>
		 </div>
      </div>
   </div>
   <div class="living_bottom">
   	  <div class="container" style="top: -60px; position: relative;">
   	  	<h2 class="title block-title wow bounceInUp" data-wow-delay="0.4s" style="margin-bottom:5px;">Detaylı Bİlgİ</h2>
			  <div class="col-md-12 wow fadeInRight" data-wow-delay="0.4s"><p><?php echo $etkinlikdetayli; ?></p>
			  
   	  	    </div>
   	  	
		<!--<div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="web/images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="#">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2014</span></p>
   	  	</div>
   	  	<div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
   	  		<div class="mask1"><img src="web/images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
   	  	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="#">More</a></p>
   	  	    <div class="divider"></div>
   	  	    <p class="field-content">30 Sep 2014</span></p>
   	  	</div>-->
   	  </div><center><div class="col-md-12 wow fadeInRight" data-wow-delay="0.4s">Etiketler: <?php $i = 0; foreach (array_combine($etkinliketiket_arr, $etiketidleri) as $etkinliketiket => $etiketid){if($i==0){echo '<a href="etiket.php?id='.$etiketid.'">'.$etkinliketiket.'</a>';$i=1;}else{echo ', <a href="etiket.php?id='.$etiketid.'">'.$etkinliketiket.'</a>';}} ?></div></center>
   </div>
   <?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		