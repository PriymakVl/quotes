$(document).ready(function() {

	$('.quote-rating').click(function(event) {
		event.preventDefault();
		var id_quote = $(this).attr('id_quote');
		if (!id_quote) {
			alert('Вы не выбрали цитату'); 
			return;
		}
		var id_cat = $(this).attr('id_cat');
		var rating = prompt('Укажите новый рейтинг');
		if (+rating) location.href = '/quote/edit_rating?id_quote=' + id_quote + '&rating=' + rating + '&id_cat=' + id_cat;
		else alert('Вы указали рейтинг неверно');
	});


});