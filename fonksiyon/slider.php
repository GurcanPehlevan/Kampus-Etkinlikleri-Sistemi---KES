<?php
error_reporting(0);
include_once('baglanti.php');
echo '<script type="text/javascript" src="slick/slick.min.js"></script>
      <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>';
echo "<script>
  $(document).ready(function(){
  $('.slider').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000,
  pauseOnHover: false
  });
});
</script>";
$sorgu = "SELECT * FROM slider";
$sonuc = mysql_query($sorgu, $baglanti);
echo '<div class="slider">';
while($slider = mysql_fetch_array($sonuc)){
	echo '<div><a href="'.$slider['s_link'].'"><span class="slider_can_baslik">'.$slider['s_baslik'].'<br><span class="slider_can_altbaslik">'.$slider['s_alt_baslik'].'</span></span><img style="width:100%" src="'.$slider['s_resim_yolu'].'"/></a></div>';
}
echo '</div>';
?>