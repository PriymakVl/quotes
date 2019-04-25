$(document).ready(function() {

	$('#delete-quote').click(function() {
		
		var id_quote = $(this).attr('id_quote');
		var agree = confirm('Вы действительно хотите удалить цитату?');
		if (agree) location.href = 'test/delete?id_quote=' + id_quote;
	});


});