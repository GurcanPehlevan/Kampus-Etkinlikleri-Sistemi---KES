function sifrekontrol() {
	if($("#sifre").val() != $("#sifretekrar").val()){
		$('.hata').remove();
		$("#sifretekrar").after('<div class="hata"><p style="color:red;">şifreler tutmuyor</p></div>');
		$('.hata').hide().fadeIn('slow');
		$('#submit').attr("disabled", true);
		//console.log("sifreler tutmuyor");
	}
	else{console.log("sifreler tuttu");$('.hata').remove();$('#kayitol').attr("disabled", false);}
}
$( document ).ready(function() {
	
	$("#eposta").focusout(function() {
	if($("#eposta").val() ==''){
	console.log('isim yazilmadi');
	$('.hata1').remove();
    $(this).after('<div class="hata1"><p style="color:red;">E-posta boş bırakılamaz!</p></div>');
	$('.hata1').hide().fadeIn('slow');
	$('#submit').attr("disabled", true);
	}
	else{$('.hata1').remove();$('#submit').attr("disabled", false);}							})
	 });