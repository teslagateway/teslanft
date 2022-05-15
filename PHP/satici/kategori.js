// JavaScript Document
$(document).ready(function(e) {
    $('#kategori').bind('change', altKategoriGetir);
    $('#altkategori').bind('change',secenekGetir);
});

function altKategoriGetir(){
	
	if($('#kategori').val() !=0){
			$.post('altkategori.php',{kategoriId: $('#kategori').val() }, function(output){
			$("#xxx").empty();
				$("#xxx").append(output);
				});
			setTimeout(function(){ secenekGetir(); }, 200);
		}
		else
		{
			$('#altkategori option').remove();
			$('#altkategori option').append('<option value="0">Önce Kategoriyi Seçiniz</option>');
			alert("boş");
			}
	
	}
function secenekGetir(){
	
	if($('#altkategori').val() !=0){
			$.post('secenekler.php',{kategoriId: $('#altkategori').val() }, function(output){
			$("#xnxx").empty();
				$("#xnxx").append(output);
				});
		}
		else
		{
			$('#xnxx').remove();
			alert("boş");
			}
			console.log("Aldım ve idsi "+$('#altkategori').val());
	
	}