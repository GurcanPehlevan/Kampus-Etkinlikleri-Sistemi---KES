<script>
$( document ).ready(function() {
$("#aboneol input").click(function() {
	$("#istekok").append("<br><h4 style='color:white;'>Abonelik isteğiniz alınmıştır.</h4>").hide().fadeIn();
});
});
</script>

<div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Kampanyalardan ve etkinliklerden anında haberdar olun!</h3>
   	   <form method="post" action="fonksiyon/abonelik.php">
		<span>
			<i><img src="web/images/mail.png" alt=""></i>
		    <input name="abonemail" id="abonemail" type="text" value="E-posta adresinizi girin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-posta adresinizi girin';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <div id="aboneol"><input name="submit" type="submit" id="submit" value="Abone Ol"> </div></label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	   <div id="istekok"></div>
	  </div>
	  <div class="footer_top">
   	   <h3>Bizi Takip Edin!</h3>
		<p>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a target="_blank" href="http://facebook.com"> <i class="fb"> </i> </a></li>
			  <li><a target="_blank" href="http://twitter.com"><i class="tw"> </i> </a></li>
			  <li><a target="_blank" href="http://plus.google.com"><i class="google"> </i> </a></li>
			  <li><a target="_blank" href="http://youtube.com"><i class="u_tube"> </i> </a></li>
		 	</ul>
		    <div class="clearfix"> </div>
		</p>			 	    
	  </div>
      </div>
   </div>