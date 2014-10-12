;
$(document).on('ready',function() {
	var extensiones = [{ext: 'doc'},{ext: 'docx'},{ext:'pdf'}];
	var ban = 0;
	var file;
	var Nombre;
	var formData;
	var Descripcion;

	$(':file').change(function(){
		ban = 0;
		file = $('#archivo')[0].files[0];
		var nombreFile = file.name;
		var extension = nombreFile.substring(nombreFile.lastIndexOf('.') + 1);
		$.each(extensiones, function(i, val) {
			if (extension==val.ext){
				ban = 1;			
			}
			
		});
		if (ban==0){
			$('#archivo').val('');
			$('#Arc').fadeIn('slow/400/fast','linear');
		}else{
			$('#Arc').fadeOut('slow/400/fast','linear');
		}
	});

	$(':button').click(function() {
 		Nombre = $('#Nom').val();
		if (Nombre!='') {
			$('#NomS').fadeOut('slow/400/fast','linear');
			Descripcion = $('#descripcion').val();
			if (Descripcion!=''){
				$('#DesS').fadeOut('slow/400/fast','linear');
				if ($('#archivo').val()!=''){
					formData =new FormData($('#FormularioListar')[0]);
					$.ajax({
			            url: 'php/upload.php',  
			            type: 'POST',
			            data: formData,
			            cache: false,
			            contentType: false,
			            processData: false,
			            //si ha ocurrido un error
			            success: function(){
			            	alert("Insertado");
                            },
			            error: function(){
			                alert("Ha ocurrido un error");
			            }
			        });

					var Destino = "files/"+file.name;
					var idPrograma = $('#sel_programa').val();
					var opcion = GetURLParameter('op');
					if (opcion=='subiregistro'){
						var idCaracteristica = $('#sel_caracteristicarc').val();
						//console.log(Nombre+" "+Descripcion+" "+Destino+" "+idPrograma+" "+idCaracteristica+" "+ 1)
				        $.post('/Trabajo/php/consultas.php', {op: 8, opI: 1 , nombre: Nombre, Descripcion: Descripcion , ubicacion: Destino, idP: idPrograma, idC: idCaracteristica,subio: 1 });
				    }else{
				    	var idIndicador = $('#sel_indicador').val();
				    	$.post('/Trabajo/php/consultas.php', {op: 8,opI: 2 ,nombre: Nombre, Descripcion: Descripcion , ubicacion: Destino, idP: idPrograma, idI: idIndicador ,subio: 1 });
				    }
				}
			}else{
				$('#DesS').fadeIn('slow/400/fast','linear');
			}
		}else{
			$('#NomS').fadeIn('slow/400/fast','linear');
		}
	});


	function GetURLParameter(sParam)
	{
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	};

 });