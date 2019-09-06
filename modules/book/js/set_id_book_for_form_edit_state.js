$(document).ready(function() {
	$('a[href="#state-edit"]').click(function(){
		var id_book = $(this).attr('id_book');
		$('input[name="id_book"]').val(id_book);
	});
});