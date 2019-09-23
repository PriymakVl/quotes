$(document).ready(function() {
	$('a[href="#rating-edit"]').click(function(){
		var id_quote = $(this).attr('id_quote');
		$('input[name="id_quote"]').val(id_quote);
	});
});