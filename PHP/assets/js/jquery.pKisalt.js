/*
	jQuery Yazý Kýsaltma Eklentisi (pKisalt)
	Author - Tayfun Erbilen
	Web - prototurk.com / erbilen.net
	Mail - erbilen@outlook.com
*/
(function($){

	$.fn.pKisalt = function(ayarlar){
		var ayar = $.extend({
			'limit'	: 20,
			'nokta' : true,
			'goster' : true,
			'gizle' : true,
			'text'  : 'göster',
			'text2' : 'gizle'
		}, ayarlar);
		return this.each(function(){
			var diger = '';
			var gizle = '';
			var nesne = $(this);
			var length = nesne.text().length;
			if (length > ayar.limit){
				nesne.wrap('<div class="pKisalt_kisaltilmis"></div>');
				if (ayar.gizle == true){
					gizle = ' <a href="#" class="pKisalt_gizle">'+ayar.text2+'</a>';
				}
				nesne.after('<div class="pKisalt_orjinal" style="display: none">'+nesne.text() + gizle +'</div>');
				if (ayar.nokta == true){
					diger = '..';
				}
				if  (ayar.goster == true){
					diger += ' <a href="#" class="pKisalt_goster">'+ayar.text+'</a>';
				}
				var text = nesne.text();
				var kisaltilmis = text.substr(0, ayar.limit) + diger;
				$(this).html(kisaltilmis);
			}
			
			$("a.pKisalt_goster").click(function(){
				$(this).parent().hide().next(".pKisalt_orjinal").show();
				return false
			});
			$("a.pKisalt_gizle").click(function(){
				$(this).parent().hide().prev().show();
				return false
			});
			
		});
	
	}

})(jQuery);