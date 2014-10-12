;
$(document).on('ready',function() {
	var extensiones = [{ext: 'doc'},{ext: 'docx'},{ext:'pdf'}];
	var ban = 0;
	var nombreFile;
	var extension;
	var file;
	var formData;
	var Nombre;
	var Descripcion;
	var idPrograma;
	var idCaracteristica;
	var Destino;

	$(':button').click(function() {
 		Nombre = $('#Nom').val();
		if (Nombre!='') {
			$('#NomS').fadeOut('slow/400/fast','linear');
			Descripcion = $('#descripcion').val();
			if (Descripcion!=''){
				$('#DesS').fadeOut('slow/400/fast','linear');
				file = $('#archivo')[0].files[0];
				$(':file').change(function(){
					ban = 0;
					file = $('#archivo')[0].files[0];
					nombreFile = file.name;
					extension = nombreFile.substring(nombreFile.lastIndexOf('.') + 1);
					$.each(extensiones, function(i, val) {
						if (extension==val.ext){
							ban = 1;			
						}
				    })
				if (ban==0){
					$('#archivo').val('');
					$('#Arc').fadeIn('slow/400/fast','linear');
				}else{
					$('#Arc').fadeOut('slow/400/fast','linear');
				}
				});
				if ($('#archivo').val()!=''){
					formData =new FormData($('#FormularioListar')[0]);
					//subir archivo
					//console.log(formData);
					$.ajax({
			            url: 'php/upload.php',  
			            type: 'POST',
			            data: formData,
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
			                alert("Archivo subido con exito");
			            },
			            //si ha ocurrido un error
			            error: function(){
			                alert("Ha ocurrido un error");
			            }
			        });
					Destino = "files/"+file.name;
					idPrograma = $('#sel_programa').val();
					idCaracteristica = $('#sel_caracteristicarc').val();
			        console.log(Nombre+" "+Descripcion+" "+Destino+" "+idPrograma+" "+idCaracteristica);
			        $.post('/Trabajo/php/consultas.php', {op: 8, nombre: Nombre, Descripcion: Descripcion , ubicacion: Destino, idP: idPrograma, idC: idCaracteristica,subio: 1 })
			        .done(function(data){
			        	console.log(data);
			        	alert("archivo insertado correctamente");
			        });
				}
			}else{
				$('#DesS').fadeIn('slow/400/fast','linear');
			}
		}else{
			$('#NomS').fadeIn('slow/400/fast','linear');

	}
	});
 });