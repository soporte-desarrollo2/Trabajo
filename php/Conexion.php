<?php  
	function conectar()
	{
		$usuario = "root";
		$servidor = "localhost";
		$pass = "";
		$db = "giraldoj_bd";
		$con = mysqli_connect($servidor,$usuario,$pass,$db) or die ("Error en la conexion");
		return $con;
	}

	function ConsultarSql($StrSql){
		$conexion = conectar();
        $Res = mysqli_query($conexion,$StrSql) or die(mysql_error());
        return $Res;
    }
?>