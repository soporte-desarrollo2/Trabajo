;
$(document).on('ready',function() {
	var extensiones = [{ext: 'doc'},{ext: 'docx'},{ext:'pdf'}];
	var ban = 0;
	var nombreFile;
	var extension;
	var file;
	/*var Nombre = $('#Nom').val();
	var Descripcion = $('#descripcion').val();
	var idPrograma = $('#sel_programa').val();
	var idCaracteristica = $('#sel_caracteristicarc').val();
	var Destino = "files/"+nombreFile;
*/
	$(':file').change(function(){
		ban = 0;
		file = $('#archivo')[0].files[0];
		nombreFile = file.name;
		extension = nombreFile.substring(nombreFile.lastIndexOf('.') + 1);
		$.each(extensiones, function(i, val) {
			if (extension==val.ext){
				ban = 1;			
			}
		});

		if (ban==0){
			$('#archivo').val('');
		}
	});

	//$("form").submit(function(){
		$(':button').click(function(){
			var formData=new FormData($('#formulario')[0]);
			//subir archivo
			console.log(formData);
			$.ajax({
	            url: 'upload.php',  
	            type: 'POST',
	            // Form data
	            //datos del formulario
	            data: formData,
	            //necesario para subir archivos via ajax
	            cache: false,
	            contentType: false,
	            processData: false,
	            //mientras enviamos el archivo
	           // beforeSend: function(){
	                //message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
	                //showMessage(message)        
	           // },
	            //una vez finalizado correctamente
	            success: function(data){
	                alert("subido con exito");
	            },
	            //si ha ocurrido un error
	            error: function(){
	                alert("Ha ocurrido un error");
	            }
	        });
	        /*
	        $.post('/Trabajo/php/consultas.php', {op: 8, nombre: Nombre, Descripcion: Descripcion , ubicacion: Destino, idP: idPrograma, idC: idCaracteristica,subio: 1 })
	        .done(function(data){
	        	console.log(data);
	        	alert("archivo insertado correctamente");
	        });*/
        });
   // });

 });