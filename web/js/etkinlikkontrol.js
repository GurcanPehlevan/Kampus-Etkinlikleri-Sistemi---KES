$( document ).ready(function() {
	tinymce.init({
    selector: "textarea",
	menubar: false
 });
 var galeriresimsecildi = false;
 var kapakresimsecildi = false;
$(document).on("change", 'input[style="margin-top:14px;"]', function(){
	$('.hata5').remove();
	kapakresimsecildi = true;
	});
$(document).on("change", 'input[style="margin-top:15px;"]', function(){
		$('.hata6').remove();
		 if(!localStorage.kacinci){
		 var kacinci = $('input[style="margin-top:15px;"]').eq(-1).index();}
		 else{var kacinci = localStorage.kacinci;}
		  if(kacinci <= 8){
			  var fileName = $(this).val();
	   kacinci = parseInt(kacinci) + 1;
	   kacinciid = kacinci +1;
       $("#etkinlikfoto"+kacinci).parent().after('<br><label class="can_etkinlikfile">'+ kacinciid +'.Fotoğrafı Seç (700x400)</span><input id="etkinlikfoto'+ kacinciid +'" style="margin-top:15px;" name="etkinlikfoto'+ kacinciid +'" type="file" /></label>');
	   localStorage.kacinci = parseInt(kacinci);
	   $("input#fotosayisi").val(kacinci);
	   $('#etkinlikform').unbind('submit').submit();
	   galeriresimsecildi = true;
	   }
	   else{alert("Fotoğraf sınırına ulaştınız!");$("input#fotosayisi").val('10');} 
	  $('#etkinlikform').on('submit', function(e) {
     });
        e.preventDefault();
		if ($('#etkinlikkategori').val()=='bos'){
			$('.hata7').remove();
			$('#etkinlikkategori').after('<div class="hata7"><p style="color:red;">Etkinlik kategorisi seçmediniz!</p></div>');
			$('.hata7').hide().fadeIn('slow');
		}
		if ($('#etkinlikuniversite').val()=='bos'){
			$('.hata8').remove();
			$('#etkinlikuniversite').after('<div class="hata8"><p style="color:red;">Etkinlik kategorisi seçmediniz!</p></div>');
			$('.hata8').hide().fadeIn('slow');
		}
		//alert(kapakresimsecildi);
		if(kapakresimsecildi == false ){
			$('.hata5').remove();
			$('input#kapakfoto').after('<div class="hata5"><p style="color:red;">Kapak fotoğrafı seçmediniz!</p></div>');
		}
			$('.hata5').hide().fadeIn('slow');
		if (galeriresimsecildi == false){
			$('.hata6').remove();
			$('input#etkinlikfoto1').after('<div class="hata6"><p style="color:red;">Etkinlik fotoğrafı seçmediniz!</p></div>');
			$('.hata6').hide().fadeIn('slow');
		}
    });
$("#etkinlikadi").focusout(function() {
	if($("#etkinlikadi").val() ==''){
	console.log('isim yazilmadi');
	$('.hata1').remove();
    $(this).after('<div class="hata1"><p style="color:red;">Etkinlik adı girmediniz!</p></div>');
	$('.hata1').hide().fadeIn('slow');
	$('#submit').attr("disabled", true);
	}
	else{$('.hata1').remove();$('#submit').attr("disabled", false);}							})
$("#etkinlikkampus").focusout(function() {
	if($("#etkinlikkampus").val()==''){
	//console.log('isim yazilmadi');
	$('.hata2').remove();
    $(this).after('<div class="hata2"><p style="color:red;">Kampüs girmediniz!</p></div>');
	$('.hata2').hide().fadeIn('slow');
	$('#submit').attr("disabled", true);
	}
	else{$('.hata2').remove();$('#submit').attr("disabled", false);}							})
$("#baslangictarih").change(function() {
	//alert(JSON.stringify($("#baslangictarih").val()));
	if($('input#baslangictarih').val()=='Etkinlik Başlangıç Tarihi'){
	console.log('isim yazilmadi');
	$('.hata3').remove();
    $(this).after('<div class="hata3"><p style="color:red;">Tarih girmediniz!</p></div>');
	$('.hata3').hide().fadeIn('slow');
	$('#submit').attr("disabled", true);
	}
	else{console.log('else');$('.hata3').remove();$('#submit').attr("disabled", false);}							})
$("#etiket").focusout(function() {
	if($("#etiket").val()==''){
	//console.log('isim yazilmadi');
	$('.hata4').remove();
    $(this).after('<div class="hata4"><p style="color:red;">Etiket girmediniz!</p></div>');
	$('.hata4').hide().fadeIn('slow');
	$('#submit').attr("disabled", true);
	}
	else{$('.hata4').remove();$('#submit').attr("disabled", false);}							})
						$(function() {
var tarih = new Date();
$( "#baslangictarih" ).datepicker({
minDate: "tarih.getDay()" + "tarih.getMonth()" + "tarih.getFullYear()",
onSelect: function(dateText, datePicker) {
       $(this).val(dateText);
	   $(this).change();
	   //$('hata3').remove();
    }
});
$( "#bitistarih" ).datepicker({
minDate: "tarih.getDay()" + "tarih.getMonth()" + "tarih.getFullYear()"
});
$('input#uzuntarih').click(function() {
$("#bitistarih").fadeToggle().toggle(this.checked);
});
  });
								});