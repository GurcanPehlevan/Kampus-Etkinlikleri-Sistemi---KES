<?php //error_reporting(E_ALL ^ E_NOTICE); //haters gonna hate
$siteadresi = "http://172.28.5.227/kes"; ;?>
<script>
$(document).ready(function() {
		$(".nav li").removeClass("active");
		var hangisayfa = $('a[href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"]');
		$(hangisayfa).parent("li").addClass("active");
	});	</script>
<?php session_start();
if(!isset($_SESSION['k_id'])){?>
<div class="header">

<?php echo '<script src="web/js/formkontrol.js"></script>'; ?>
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="<?php $siteadresi ?>"><img src="web/images/logo.png" height="45" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="web/images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="active"><a href="<?php echo $siteadresi; ?>/">Ana Sayfa</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/kategoriler.php">Kategorİler</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/etkinlik.php">HakkImIzda</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/iletisim.php">İletİşİm</a></li>
							</ul>
							<script type="text/javascript" src="web/js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Arama terimini girin..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="web/js/classie.js"></script>
						<script src="web/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
				<div id="loginContainer" style="float:right;z-index:999;color:white;width:100%">
	    		      <a href="#" id="kayitbuton"><img src="web/images/uyeol.png"/><span style="position:relative;top:2px;">giriş yap</span><a/>
					  <a style="float:right;" href="#" id="loginButton"><img src="web/images/login.png"><span>Üye ol</span></a>
						    <div id="loginBox">                
						        <form method="POST" action="fonksiyon/giris.php" id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="kullanicieposta">Kullanıcı Adı veya E-posta</label>
						                          <input type="text" name="kullanicieposta" id="kullanicieposta">
						                    </fieldset>
						                    <fieldset>
						                            <label for="sifre">Şifre</label>
						                            <input type="password" name="sifre" id="sifre">
						                     </fieldset>
						                    <input onclick="giriskontrol()" type="submit" id="login" value="Giriş Yap">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Beni Hatırla</i></label>
						            	</fieldset>
						                 <span><a href="#">Şifremi unuttum</a></span>
							      </form>
				              </div>
							  <div id="kayitkutu">                
						        <form method="POST" action="fonksiyon/kayit.php" id="kayitform">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="isim">Adınız</label>
						                          <input type="text" name="isim" id="isim">
						                    </fieldset>
											<fieldset>
						                          <label for="soyad">Soyadınız</label>
						                          <input type="text" name="soyad" id="soyad">
						                    </fieldset>
											<fieldset>
						                          <label for="telefon">Telefon Numaranız</label>
						                          <input type="text" name="telefon" id="telefon">
						                    </fieldset>
											<fieldset>
						                          <label for="kullaniciadi">Kullanıcı Adınız</label>
												  <span id="kullaniciadikontrol"></span>
						                          <input type="text" name="kullaniciadi" id="kullaniciadi">
						                    </fieldset>
											<fieldset>
						                          <label for="eposta">E-posta Adresiniz</label>
												  <span id="epostakontrol"></span>
						                          <input type="email" name="eposta" id="eposta">
						                    </fieldset>
											<fieldset>
						                            <label for="sifre">Şifreniz</label>
						                            <input type="password" name="sifre" id="sifre">
						                    </fieldset>
											<fieldset>
						                            <label for="sifretekrar">Şifrenizi Tekrarlayın</label>
						                            <input type="password" name="sifretekrar" id="sifretekrar" onfocusout="sifrekontrol()">
						                    </fieldset>
											<fieldset>
											<label for="universite">Okuduğunuz Üiversite</label>
											<?php include_once('universite_liste.php'); ?>
						                    </fieldset>
						                    <input onclick="formkontrol()" type="submit" id="kayitol" value="Üye ol" disabled="disabled">
						            	</fieldset>
							      </form>
				              </div>
			             </div>
						 
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
<?php } else { ?>
<div class="header">
		   <div class="col-sm-7 header-left">
					 <div class="logo">
						<a href="<?php echo $siteadresi; ?>"><img src="web/images/logo.png" height="52" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="web/images/nav.png" alt="" /></a>
						     <ul class="nav" id="nav">
						    	<li class="active"><a href="<?php echo $siteadresi; ?>/">Ana Sayfa</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/kategoriler.php">Kategorİler</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/etkinlik.php">HakkImIzda</a></li>
						    	<li><a href="<?php echo $siteadresi; ?>/iletisim.php">İletİşİm</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="web/js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Arama terimini girin..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="web/js/classie.js"></script>
						<script src="web/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-5 header_right">
			<div id="loginContainer">
				<span style="color:white;"><?php echo 'Hoşgeldin, '.$_SESSION['k_kullaniciadi'].'!'; ?><span style="float:right;"></span></span>
				<span style="color:white;"><span style="float:right;"><a href="#" id="kontrolpaneli" style="color:white;cursor:pointer;">Kontrol Paneli<img style="padding-left:5px;position:relative;bottom:2px;" src="web/images/profil.png"/></span></span></a>
				<div id="kontrolkutu" class="col-sm-6 col-sm-offset-5">
				<img style="padding:5px;position:relative;bottom:3px;" src="web/images/profil_ayar.jpg"/><span><a href="./profilduzenle.php">Profilimi Düzenle</a></span></img><br>
				<img style="padding:5px;position:relative;bottom:3px;" src="web/images/etkinliklerim.jpg"/><span><a href="./etkinliklerim.php">Etkinliklerim</a></span><br>
				<img style="padding:5px;position:relative;bottom:3px;" src="web/images/etkinlik_ekle.jpg"/><span><a href="./etkinlikekle.php">Etkinlik Ekle</a></span><br>
				<img style="padding:5px;position:relative;bottom:3px;" src="web/images/cikis.jpg"/><span><a href="./cikis.php">Çıkış Yap</a></span>
				</div>
			</div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
<?php } ?>