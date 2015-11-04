<?php error_reporting(0); 
session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kampüs Etkinlikleri Sistemi</title>
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap-rating.css" rel='stylesheet' type='text/css' />
<link href="web/css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="web/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="web/js/login.js"></script>
<script src="web/js/jquery.easydropdown.js"></script>
<!--Animation-->
<script src="web/js/wow.min.js"></script>
<script src="web/js/rating.js"></script>
<script src="web/js/tooltip.js"></script>
<link href="web/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script>
$( document ).ready(function() {  
$( "#yakintarih" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'yakintarih'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
$( "#soneklenenler" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'son_eklenenler'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
$( "#populer" ).click(function() {
	$(".content_menu li").removeClass("active");
	$(this).parent(-1).addClass("active");
  $.post('fonksiyon/anasayfa_etkinlik.php', {'siralama':'populer'}, function(data) {
    $('.content_middle_box').hide().fadeIn('slow');		
    $(".content_middle_box").html(data);
});
});
});
</script>
 
</head>
<body>

<?php include('fonksiyon/ust.php'); ?>
   <div class="banner">
   	  <div class="container_wrap"><br><br><br>
   		<h1>Nasıl bir etkinlik arıyorsunuz?</h1>
   	       <!--<div class="dropdown-buttons">   
            		  <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">İstanbul Üniversitesi</option>	
						<option value="1">Australia</option>
						<option value="2">Sri Lanka</option>
						<option value="3">Newziland</option>
						<option value="4">Pakistan</option>
						<option value="5">United Kingdom</option>
						<option value="6">United states</option>
						<option value="7">Russia</option>
						<option value="8">Mirum</option>
					  </select>
					</div>
				     <div class="dropdown-button">
					  <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="0">Konser</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">mazim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
					  </select>
					 </div>
				   </div>  -->
		    <form action="arama.php" method="POST">
				<input name="arama" id="arama" type="text" value="Anahtar kelime, etkinlik ismi, üniversite..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Anahtar kelime, etkinlik ismi, üniversite...';}">
			    <div class="contact_btn">
	               <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Ara"></label>
	            </div>
			</form>        		
   		    <div class="clearfix"></div>
         </div>
   </div>
   <div class="content_top">
   	  <div class="container">
   		<div class="col-md-4 bottom_nav">
   		   <div class="content_menu">
				<ul>
					<li class="active"><a style="cursor: pointer;" id="yakintarih">Yakın Tarih</a></li> 
					<li><a style="cursor: pointer;" id="soneklenenler">Son Eklenenler</a></li> 
					<li><a style="cursor: pointer;" id="populer">Popüler</a></li> 
				</ul>
			</div>
		</div>
		<!--<div class="col-md-4 content_dropdown1">
		   <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Dubai</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">mazim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		     </div>
		     <div class="content_dropdown">    
		       <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Show Map</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">mazim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
						<option value="5"></option>
						<option value="5"></option>
		        </select>
		       </div>
		</div>-->
		<div class="col-md-8 filter_grid">
			<ul style="float:right;" class="filter">
				<li class="fil">Kategorİ				:</li>
				<li><a href="kategori.php?id=1"> <i class="icon1"> </i> </a></li>
				<li><a href="kategori.php?id=2"> <i class="icon2"> </i> </a></li>
				<li><a href="kategori.php?id=3"> <i class="icon3"> </i> </a></li>
				<li><a href="kategori.php?id=5"> <i class="icon4"> </i> </a></li>
				<li><a href="kategori.php?id=6"> <i class="icon5"> </i> </a></li>
				<li><a href="kategori.php?id=7"> <i class="icon6"> </i> </a></li>
				<li><a href="kategori.php?id=8"> <i class="icon7"> </i> </a></li>
			</ul>
		</div>
   	</div>
   </div>
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
		<?php include('fonksiyon/anasayfa_etkinlik.php'); ?>
		</br>
   		  </div>
   		  </div>
   	  </div>
   </div>
   <?php include_once('fonksiyon/alt.php'); ?>
</body>
</html>		