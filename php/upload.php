<?php
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
	    //obtenemos el archivo a subir
	    $file = $_FILES['archivo']['name'];
	    //comprobamos si el archivo ha subido
	    if ($file && move_uploaded_file($_FILES['archivo']['tmp_name'],"../files/".utf8_decode($file)))
	    {
	       sleep(1);//retrasamos la petición 3 segundos
	    }
	}else{
	    throw new Exception("Error Processing Request", 1);  
	}
?>