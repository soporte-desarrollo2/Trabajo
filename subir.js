$(document).on('ready',function() {
	$('#mensaje').hide();
	var extensiones = [{ext: 'doc'},{ext: 'docx'},{ext:'pdf'}];
	var ban = 0;
	var nombre;
	var extension;
	$(':file').change(function(){
		$('#mensaje').hide();
		ban = 0;
		var file = $('#archivo')[0].files[0];
		nombre = file.name;
		extension = nombre.substring(nombre.lastIndexOf('.') + 1);
		$.each(extensiones, function(i, val) {
			if (extension==val.ext){
				ban = 1;			
			}
		});

		if (ban==0){
			$('#archivo').val('');
			$('#mensaje').show();
			$('#mensaje').append(' No da')
		}
		//console.log(nombre);
		///console.log(ban)

	});
	$(':button').click(function(){
		var formData = new FormData($('#formulario')[0]);
		console.log(formData);
	});
 	
	//if (ban==1)

});