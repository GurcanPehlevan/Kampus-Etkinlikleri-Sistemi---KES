function sifrekontrol() {
	//console.log("Şifre1: " + $("#kayitform input#sifre").val());
	//console.log("Şifre2: " + $("#sifretekrar").val());
	if($("#kayitform input#sifre").val() != $("#sifretekrar").val()){
		$('.hata').remove();
		$("#sifretekrar").after('<div class="hata"><p style="color:red;">şifreler tutmuyor</p></div>');
		$('#kayitol').attr("disabled", true);
		//console.log("sifreler tutmuyor");
	}
	else{console.log("sifreler tuttu");$('.hata').remove();$('#kayitol').attr("disabled", false);}
}
function formkontrol() {
	if($("#isim").val()=='' || $("#soyad").val()=='' || $("#eposta").val()=='' || $("#kullaniciadi").val()=='' || $("#kayitform input#sifre").val()==''){
		$("#kayitform").submit(function (e) {
			e.preventDefault();
				alert('Lütfen girmiş olduğunuz bilgileri kontrol ediniz.');
		});
	}
	else {return true;};
}

function giriskontrol() {
	$("form").submit(function (e) {
			e.preventDefault();
				$.post('fonksiyon/giriskontrol.php', {'kullanicieposta':$("#kullanicieposta").val(),'sifre':$("#sifre").val()}, function(data) { 
				$("#kullaniciadikontrol").html(data);
									});
}); }
$( document ).ready(function() {
$("#isim").focusout(function() {
	if($("#isim").val()==''){
	//console.log('isim yazilmadi');
    $(this).after('<div class="hata"><p style="color:red;">isim gerekli</p></div>');
	$('.hata').hide().fadeIn('slow');
	$('#kayitol').attr("disabled", true);
	}
	else{$('.hata').remove();$('#kayitol').attr("disabled", false);}							})
$("#soyad").focusout(function() {
	if($("#soyad").val()==''){
	//console.log('isim yazilmadi');
    $(this).after('<div class="hata"><p style="color:red;">soyad gerekli</p></div>');
	$('.hata').hide().fadeIn('slow');
	$('#kayitol').attr("disabled", true);
	}
	else{$('.hata').remove();$('#kayitol').attr("disabled", false);}							})
$("#eposta").focusout(function() {
	if($("#eposta").val()==''){
    $(this).after('<div class="hata"><p style="color:red;">e-posta gerekli</p></div>');
	$('.hata').hide().fadeIn('slow');
	$('#kayitol').attr("disabled", true);
	}
	else if($("#eposta").val() != '' && $("#eposta").val().search('@') == -1){
	$('.hata').remove()
    $(this).after('<div class="hata"><p style="color:red;">e-posta hatalı</p></div>');
	$('.hata').hide().fadeIn('slow');
	$('#kayitol').attr("disabled", true);
	}
		else{$('.hata').remove();$('#kayitol').attr("disabled", false);
    $.post('fonksiyon/epostakontrol.php', {'eposta':$("#eposta").val()}, function(data) { 
	$('#kullaniciadikontrol').hide().fadeIn('slow');	
    $("#kullaniciadikontrol").html(data);
});}})
$("#kullaniciadi").focusout(function() {
	if($("#kullaniciadi").val()=='' || $("#kullaniciadi").val()==' '){
	//console.log('isim yazilmadi');
    $(this).after('<div class="hata"><p style="color:red;">kullanici adı gerekli</p></div>');
	$('.hata').hide().fadeIn('slow');
	$('#kayitol').attr("disabled", true);
	}
	else{$('.hata').remove();$('#kayitol').attr("disabled", false);
    $.post('fonksiyon/kullanicikontrol.php', {'kullaniciadi':$("#kullaniciadi").val()}, function(data) {
    $('#kullaniciadikontrol').hide().fadeIn('slow');		
    $("#kullaniciadikontrol").html(data);
});}
								})							
								});