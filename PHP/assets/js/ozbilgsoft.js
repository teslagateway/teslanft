// Kodlama ve yazılım web ofisine aittir.

var opts = {

  lines: 13 // The number of lines to draw

, length: 28 // The length of each line

, width: 14 // The line thickness

, radius: 42 // The radius of the inner circle

, scale: 1.5 // Scales overall size of the spinner

, corners: 1 // Corner roundness (0..1)

, color: '#000' // #rgb or #rrggbb or array of colors

, opacity: 0.25 // Opacity of the lines

, rotate: 0 // The rotation offset

, direction: -1 // 1: clockwise, -1: counterclockwise

, speed: 1 // Rounds per second

, trail: 60 // Afterglow percentage

, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS

, zIndex: 2e9 // The z-index (defaults to 2000000000)

, className: 'spinner' // The CSS class to assign to the spinner

, top: '50%' // Top position relative to parent

, left: '50%' // Left position relative to parent

, shadow: false // Whether to render a shadow

, hwaccel: false // Whether to use hardware acceleration

, position: 'absolute' // Element positioning

}

var target = document.getElementById('foo')

var spinner = new Spinner(opts).spin(target);

var k_ara = $("input[name='kk']");

var k_ara_sonuc = k_ara.filter(':checked');

var f_ara = $("input[name='ff']");

var f_ara_sonuc = f_ara.filter(':checked').val();

var s_ara = $("input[name='cc[]']");

var s_ara_sonuc = s_ara.filter(":checked");

var siralama = $("select[name='neyeg']");

var goster = $("select[name='gosterim']");

var markagoster = $("select[name='markagosterim']");

var sayfa = 1;

var aranacak = new Array;

var ozellikler = new Array;

var fiyatlar = new Array;

var kategoriler = new Array;

var data = "";

var yukle = $("#foo");

    $.map(k_ara_sonuc,function(e,i){

        kategoriler += e.value+",";

    });

function Sayfa(rakam){

   if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

    yukle.show();

    data = {

    "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : rakam,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

}


markagoster.change(function(){

    if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

    yukle.show();

    data = {

    "marka" : markalar, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

})

goster.change(function(){

    if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

    yukle.show();

    data = {

    "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

})

siralama.change(function(){

    if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

    yukle.show();

    data = {

    "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

})

k_ara.click(function(){

    k_ara_sonuc = k_ara.filter(':checked');

    if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

    kategoriler = "";

    $.map(k_ara_sonuc,function(e,i){

        kategoriler += e.value+",";

    });

    data = {

        "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    yukle.show();

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            $("span[name='katadi']").text(k_ara.filter(':checked').data("name"));

            setTimeout(function(){ yukle.hide(); }, 500);

        }

    });

});

f_ara.click(function(){

    k_ara_sonuc = k_ara.filter(':checked').val();

    f_ara_sonuc = f_ara.filter(':checked');

    fiyatlar = "";

var qq = $.map(f_ara_sonuc, function(e,i) {

    fiyatlar += e.value+",";

});

    yukle.show();

    data = {

    "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

});



s_ara.click(function(){

    s_ara_sonuc = s_ara.filter(":checked");

    ozellikler = "";

    if(f_ara_sonuc == undefined ) f_ara_sonuc = "0";

var arr = $.map(s_ara_sonuc, function(e,i) {

    ozellikler += e.value+",";

});

    yukle.show();

    data = {

    "kategori" : kategoriler, 

    "fiyat" : fiyatlar, 

    "ozellik" : ozellikler,

    "siralama" : siralama.val(),

    "gosterilecek" : goster.val(),

    "sayfa" : sayfa,

    };

    $.ajax({

        type: "POST",

        url: "farama.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("ul[name='uubry']").empty();

            $("ul[name='uubry']").append(sonuc.urunler);

			$(".kisalt").pKisalt({limit: 32, goster: false});

            $("ul[name='sayfala']").empty();

            $("ul[name='sayfala']").append(sonuc.sayfala);

            setTimeout(function(){ yukle.hide(); }, 500);



        }

    });

});



function up(num){

    var data = {

        "sid" : num ,

        "islem" : "ekle",

    };

    $.ajax({

        type: "POST",

        url: "sepetd.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            $("#tdtoplam").text(sonuc.aratoplam);

            $("#stoplam").text(sonuc.aratoplam);

            $("#sstoplam").text(sonuc.aratoplam);

            $("#kdvtoplam").text(sonuc.kdvtoplam);

            $("strong[name='toplam']").text(sonuc.geneltoplam);

            $("input[name='qq"+num+"'").val(sonuc.adet);

            $("span[name='pp"+num+"'").text(sonuc.fiyat);

        }

    });

};

function down(num){

    var data = {

        "sid" : num ,

        "islem" : "sil",

    };

    $.ajax({

        type: "POST",

        url: "sepetd.php",

        data : data,

        error: function(response){

            console.log(response);

        },

        success: function(veri){

            var sonuc = JSON.parse(veri);

            if(sonuc.hata){

                alert("Ürün adeti 1 den küçük olamaz");

            }else{

			$("#tdtoplam").text(sonuc.aratoplam);

            $("#kdvtoplam").text(sonuc.kdvtoplam);

			$("#stoplam").text(sonuc.aratoplam);

			$("#sstoplam").text(sonuc.aratoplam);

            $("strong[name='toplam']").text(sonuc.geneltoplam);

            $("input[name='qq"+num+"'").val(sonuc.adet);

            $("span[name='pp"+num+"'").text(sonuc.fiyat);

        }

        }

    });

};

// Üye Ol

$(function(){

	function uyeGizle(){

	$("#uyenote").hide();

	}

	$("#uyeol").click(function(){

	$("#uyenote").show();

	$.ajax({ 

		type: "POST",

		url: "uyeol.php",

		data: $('#uyeolform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#uyenote').html(veri);

				setTimeout(uyeGizle,4000);

				document.forms["uyeolform"].reset();

			}   

		});

	});

	

	return false;

});

$(function(){

	function urunyorumGizle(){

	$("#urunyorumnote").hide();

	}

	$("#urunyorum").click(function(){

	$("#urunyorumnote").show();

	$.ajax({ 

		type: "POST",

		url: "urunyorum.php",

		data: $('#urunyorumform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#urunyorumnote').html(veri);

				setTimeout(urunyorumGizle,4000);

				document.forms["urunyorumform"].reset();

			}   

		});

	});

	

	return false;

});

// Giriş Yap

$(function(){

	function girisGizle(){

	$("#girisnote").hide();

	}

	$("#giris").click(function(){

	$("#girisnote").show();

	$.ajax({ 

		type: "POST",

		url: "giris.php",

		data: $('#girisform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#girisnote').html(veri);

				setTimeout(girisGizle,4000);

				document.forms["girisform"].reset();

			}   

		});

	});

	

	return false;

});

// Şifre Değiştir

$(function(){

	function sifreGizle(){

	$("#sifrenote").hide();

	}

	$("#sifredegistir").click(function(){

	$("#sifrenote").show();

	$.ajax({ 

		type: "POST",

		url: "sifreguncelle.php",

		data: $('#sifreform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#sifrenote').html(veri);

				setTimeout(sifreGizle,4000);

				document.forms["sifreform"].reset();

			}   

		});

	});

	

	return false;

});

// Bilgi Güncelle

$(function(){

	function bilgiGizle(){

	$("#bilginote").hide();

	}

	$("#bilgiguncelle").click(function(){

	$("#bilginote").show();

	$.ajax({ 

		type: "POST",

		url: "bilgiguncelle.php",

		data: $('#bilgiform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#bilginote').html(veri);

				setTimeout(bilgiGizle,4000);

				document.forms["bilgiform"].reset();

			}   

		});

	});

	

	return false;

});

// Adres Ekle

$(function(){

	function AdresGizle(){

	$("#adresnote").hide();

	}

	$("#adresekle").click(function(){

	$("#adresnote").show();

	$.ajax({ 

		type: "POST",

		url: "adresekle.php",

		data: $('#adresform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#adresnote').html(veri);

				setTimeout(AdresGizle,4000);

				document.forms["adresformform"].reset();

			}   

		});

	});

	

	return false;

});

// İletişim Formu

$(function(){

			function sonucGizlee(){

			$("#iletisimsonuc").hide();

			}

			$("#btn-send-contact").click(function(){

			$("#iletisimsonuc").show();

			$.ajax({ 

				type: "POST",

				url: "mesaj.php",

				data: $('#contact_form').serialize(), 

				error:function(){ 

				alert("Bir hata algılandı."); 

				},

				success: function(veri) { 

					 $('#iletisimsonuc').html(veri);

						setTimeout(sonucGizlee,3000);

						document.forms["contactForm"].reset();

					}   

				});

			});

			return false;

		});

// Adres Güncelle

$(function(){

	function AdresGizle(){

	$("#adresnote").hide();

	}

	$("#adresguncelle").click(function(){

	$("#adresnote").show();

	$.ajax({ 

		type: "POST",

		url: "adresguncelle.php",

		data: $('#adresform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#adresnote').html(veri);

				setTimeout(AdresGizle,4000);

				document.forms["adresformform"].reset();

			}   

		});

	});

	

	return false;

});

// Ticket Oluştur

$(function(){

	function TicketGizle(){

	$("#ticketnote").hide();

	}

	$("#ticketgonder").click(function(){

	$("#ticketnote").show();

	$.ajax({ 

		type: "POST",

		url: "ticketolustur.php",

		data: $('#ticketform').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#ticketnote').html(veri);

				setTimeout(TicketGizle,4000);

				document.forms["ticketform"].reset();

			}   

		});

	});

	

	return false;

});

// Ticket Oluştur

$(function(){

	function TicketCGizle(){

	$("#ticketcnote").hide();

	}

	$("#ticketcevapla").click(function(){

	$("#ticketcnote").show();

	$.ajax({ 

		type: "POST",

		url: "ticketcevapla.php",

		data: $('#ticketformm').serialize(), 

		error:function(){ 

		alert("Bir hata algılandı."); 

		},

		success: function(veri) { 

			 $('#ticketcnote').html(veri);

				setTimeout(TicketCGizle,4000);

				document.forms["ticketformm"].reset();

			}   

		});

	});

	

	return false;

});

// Blog Yorum

	$(function(){

		function sonucGizle(){

		$("#blognote").hide();

		}

		$("#submit").click(function(){

		$("#blognote").show();

		$.ajax({ 

			type: "POST",

			url: "yorum.php",

			data: $('#yorumform').serialize(), 

			error:function(){ 

			alert("Bir hata algılandı."); 

			},

			success: function(veri) { 

				 $('#blognote').html(veri);

					setTimeout(sonucGizle,3000);

					document.forms["yrm"].reset();

				}   

			});

		});

		

		return false;

	});

// Blog Yorum

	$(function(){

		function sonucGizle(){

		$("#ebultennote").hide();

		}

		$("#submit").click(function(){

		$("#ebultennote").show();

		$.ajax({ 

			type: "POST",

			url: "ebulten.php",

			data: $('#ebultenform').serialize(), 

			error:function(){ 

			alert("Bir hata algılandı."); 

			},

			success: function(veri) { 

				 $('#ebultennote').html(veri);

					setTimeout(sonucGizle,3000);

					document.forms["ebulten"].reset();

				}   

			});

		});

		

		return false;

	});



// Ticket Cevapla

$(function(){

	$(".ticketform").css("display","none");

	$(".cevapla").css("display","none");

	$("#baslik").css("display","none");

	$("#yanit").click(function(){

		$(".ticketform").css("display","block");

		$(".cevapla").css("display","block");

		$(".gizle").css("display","none");

		$("#bgizle").css("display","none");

		$("#baslik").css("display","block");

	});

	$("#iptal").click(function(){

		$(".ticketform").css("display","none");

		$(".cevapla").css("display","none");

		$(".gizle").css("display","block");

		$("#bgizle").css("display","block");

		$("#baslik").css("display","none");

	});

});

// il ilçe seçimi

$(function(){

	$("#il").change(function(){

		var id = $(this).val();

		if(id != 0){

			$.post("iller.php", {"id":id}, function(sonuc){

				$("#ilce").html(sonuc);

			});

		}else{

			$("#ilce").html('<option value="0">İlçe Seçiniz</option>');

		}

	});



});

    $('#il').ready(function(){

            var id = $("#il").val();

        if(id != 0){

            $.post("iller.php", {"id":id}, function(sonuc){

                $("#ilce").html(sonuc);

            });

        }else{

            $("#ilce").html('<option value="0">İlçe Seçiniz</option>');

        }

    });

$( document ).ready(function() {



    $("#firma_adi").attr('disabled', true);

    $("#vd").attr('disabled', true);

    $("#vn").attr('disabled', true);

    $("#ad").attr('disabled', false);

    $("#soyad").attr('disabled', false);

    $("#tc").attr('disabled', false);

            var id = $('input:radio[name=adrestipi]:checked').val();

        if(id == "bireysel"){

            $("#firma_adi").attr('disabled', true);

            $("#firma_adi").val('');

            $("#vd").attr('disabled', true);

            $("#vd").val('');

            $("#vn").attr('disabled', true);

            $("#vn").val('');

            $("#ad").attr('disabled', false);

            $("#soyad").attr('disabled', false);

            $("#tc").attr('disabled', false);

        }else if(id == "kurumsal"){

            $("#ad").attr('disabled', true);

            $("#ad").val('');

            $("#soyad").attr('disabled', true);

            $("#soyad").val('');

            $("#tc").attr('disabled', true);

            $("#tc").val('');

            $("#firma_adi").attr('disabled', false);

            $("#vd").attr('disabled', false);

            $("#vn").attr('disabled', false);

        }

    $("input:radio[name=adrestipi]").change(function(){

        var id = $('input:radio[name=adrestipi]:checked').val();

        if(id == "bireysel"){

            $("#firma_adi").attr('disabled', true);

            $("#firma_adi").val('');

            $("#vd").attr('disabled', true);

            $("#vd").val('');

            $("#vn").attr('disabled', true);

            $("#vn").val('');

            $("#ad").attr('disabled', false);

            $("#soyad").attr('disabled', false);

            $("#tc").attr('disabled', false);

        }else if(id == "kurumsal"){

            $("#ad").attr('disabled', true);

            $("#ad").val('');

            $("#soyad").attr('disabled', true);

            $("#soyad").val('');

            $("#tc").attr('disabled', true);

            $("#tc").val('');

            $("#firma_adi").attr('disabled', false);

            $("#vd").attr('disabled', false);

            $("#vn").attr('disabled', false);

        }

    });

});

$(function(){

	$(".kisalt").pKisalt({limit: 32, goster: false});

	$(".yazikisalt").pKisalt({limit: 350, goster: false});

});