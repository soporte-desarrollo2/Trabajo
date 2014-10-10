<?php
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
	    //obtenemos el archivo a subir
	    $file = $_FILES['archivo']['name'];
	    ECHO $file;
	    //comprobamos si existe un directorio para subir el archivo
	    //si no es así, lo creamos
	    if(!is_dir("")) 
	        mkdir("../files/", 0777);
	     
	    //comprobamos si el archivo ha subido
	    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"../files/".utf8_encode($file)))
	    {
	       sleep(3);//retrasamos la petición 3 segundos
	    }
	}else{
	    throw new Exception("Error Processing Request", 1);   
	}
?>