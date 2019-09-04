$(document).ready(function() {

	$('#delete-author').click(function(event) {
		event.preventDefault();
		var id_quote = $(this).attr('id_autor');
		var agree = confirm('Вы действительно хотите удалить автора?');
		if (agree) location.href = '/author/delete?id_author=' + id_autor;
	});


});