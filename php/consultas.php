<?php  
 	include ("Conexion.php");
	$cons = new Consultas();


	$op = $_POST["op"];
	
	if ($op==0){
		$cons->facultad();
	}elseif ($op==1) {
		$cons->programa();
	}elseif ($op==2){
		$cons->factor();
	}elseif ($op==3){
		$cons->caracteristicarc();
	}elseif($op==4){
		$cons->mostrarTablaRegistro();
	}elseif($op==5){
		$cons->caracteristica();
	}elseif($op==6){
		$cons->indicador();
	}elseif($op==7){
		$cons->mostrarTablaAuto();
	}elseif($op==8){
		$cons->InsertarArchivoRegistro();
	}
	
	class Consultas {
			function facultad (){
				$result=ConsultarSql('SELECT * FROM sorca_facultad');
			    echo '<option value="0" selected>Seleccione Facultad</option>';
			    while($registro = mysqli_fetch_array($result)){
			        echo "<option value='".$registro["idFacultad"]."'>".utf8_encode($registro["nombre"])."</option>";
			    } 
			    mysqli_free_result($result);
			}
			function programa (){
				$idF = $_POST["id"];
				$result=ConsultarSql('SELECT * FROM sorca_programa WHERE idFacultad = '.$idF);
				echo '<option value="0" selected>Seleccione Programa</option>';
				while($registro = mysqli_fetch_array($result)){
					echo "<option value='".$registro["idPrograma"]."'>".utf8_encode($registro["nombre"])."</option>";
				} 
				mysqli_free_result($result);
			}

			function factor (){
				$result=ConsultarSql("SELECT * FROM sorca_factor ");
				echo '<option value="0" selected>Seleccione Factor</option>';
				while($registro = mysqli_fetch_array($result)){
					echo "<option value='".$registro["idFactor"]."'>".utf8_encode($registro["nombre"])."</option>";
				} 
				mysqli_free_result($result);
			}

			function caracteristicarc (){
				$result=ConsultarSql("SELECT * FROM sorca_caracteristicarc ");
				echo '<option value="0" selected>Seleccione Caracteristica</option>';
				while($registro = mysqli_fetch_array($result)){
					echo "<option value='".$registro["idCaracteristicarc"]."'>".utf8_encode($registro["nombre"])."</option>";
				} 
				mysqli_free_result($result);
			}

			function mostrarTablaRegistro(){
				$idC = $_POST["id"];
				$result=ConsultarSql('SELECT * FROM sorca_soporte WHERE idCaracteristicarc = '.$idC);
				while($registro = mysqli_fetch_array($result)){
					 echo "<tr><td><a href=".$registro['ubicacion']." target='_blank'>".$registro['nombre']."</a>
			                            </td><td>".$registro['descripcion']."</td><td>".$registro['subio']."</td></tr>";
				}
			}

			function caracteristica(){
				$idFactor = $_POST["id"];
				$result = ConsultarSql("SELECT * FROM sorca_caracteristica WHERE idFactor='$idFactor'");
				echo '<option value="0" selected>Seleccione Caracteristica</option>';
				while($registro = mysqli_fetch_array($result)){
					echo "<option value='".$registro["idCaracteristica"]."'>".utf8_encode($registro["nombre"])."</option>";
				} 
				mysqli_free_result($result);	
			}

			function indicador(){
				$idCar = $_POST["id"];
				$result = ConsultarSql("SELECT * FROM sorca_indicador WHERE idcaracteristica='$idCar'");
				echo '<option value="0" selected>Seleccione Indicador</option>';
				while($registro = mysqli_fetch_array($result)){
					echo "<option value='".$registro["idIndicador"]."'>".utf8_encode($registro["nombre"])."</option>";
				} 
				mysqli_free_result($result);
			}

			function mostrarTablaAuto(){
				$idI = $_POST["id"];
				$result = ConsultarSql("SELECT * FROM sorca_soporte WHERE idIndicador='$idI'");
				while($registro = mysqli_fetch_array($result)){
					 echo "<tr><td><a href=".$registro['ubicacion']." target='_blank'>".$registro['nombre']."</a>
			                     </td><td>".$registro['descripcion']."</td><td>".$registro['subio']."</td></tr>";
				}
			}

			function InsertarArchivoRegistro(){
				$opcionInsertar = $_POST['opI'];
				if ($opcionInsertar==1){
					$result=Insertar("INSERT INTO sorca_soporte (nombre,descripcion,ubicacion,idprograma,idcaracteristicarc,subio)
                                    VALUES ('".$_POST['nombre']."','".$_POST['Descripcion']."','".$_POST['ubicacion']."',".$_POST['idP'].",".$_POST['idC'].",".$_POST['subio'].")");
				}else{
					$result=Insertar('INSERT INTO sorca_soporte (nombre, descripcion, ubicacion, idPrograma, idIndicador, subio) 
							VALUES ("'.$_POST['nombre'].'", "'.$_POST['Descripcion'].'", "'.$_POST['ubicacion'].'",'.$_POST['idP'].',"'.$_POST['idI'].'" ,'.$_POST['subio'].')');
				}
			}
	}
?>