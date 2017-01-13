<?php


include('datab.php');
//Sacamos la informacion de las cookies
session_start();

	$auditoria = $_SESSION['auditoria']; 
	$ctrl      = $_SESSION['ctrl'];  
	$carrera  = $_SESSION['consulta']; 
	$semestre  = $_SESSION['semestre'];  
	$sexo      = $_SESSION['sexo'];
// Registramos primero al alumno para despues guardar sus respuestas.

    $queryalumno = "INSERT INTO alumnos (ctrl_alu, alu_carrera, semestre, sexo) VALUES (".$ctrl.", ".$carrera.", ".$semestre.", ".$sexo.")";

    $agregar = $db->query($queryalumno);
	if ($agregar) {
		
		$alumnocreado = "true";
	} else {
		$alumnocreado = "false";	
	}

	$_SESSION['alumnoCreado']= $alumnocreado;

//Alumno creado!!!!!
//
//Agregar resultado de su test.

    $datosInsert ="";
    $i=0;
foreach ($_POST['valor'] as $item => $value){
	$i++;
	if ($i <> 1) {
		$datosInsert .= ", ";
	}	

	$datosInsert .= "(".$item.", ".$ctrl.", ".$auditoria.", ".$value.")";
     //echo $item.": ".$value."<br>";

}

	//echo $datosInsert;

	$query= "INSERT INTO encuesta (id_item, alumno, no_auditoria, resultado) VALUES ".$datosInsert;
	//echo $query;
	$insert = $db->query($query);
	if ($insert) {
		
		$resltadoTest = "True";
	} else {
		$resltadoTest = "false";	
	}

	$_SESSION['resultadoTest']= $resltadoTest;

	header('Location: ../grxs.php');

?>