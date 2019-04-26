$(document).ready(function() {

	$('#delete-quote').click(function(event) {
		event.preventDefault();
		var id_quote = $(this).attr('id_quote');
		var agree = confirm('Вы действительно хотите удалить цитату?');
		if (agree) location.href = '/quote/delete?id_quote=' + id_quote;
	});


});