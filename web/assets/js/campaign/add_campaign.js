$('form').submit(function(e){
	e.preventDefault();
});

$('button[type=submit]').click(function(){

	var formdata = $('form').serialize();

	$.ajax ({
		method : 'POST',
		url : '/campaign/create',
		data : formdata,
		async: true,
		success: function() {
			console.log('success');
		}
	});
});
