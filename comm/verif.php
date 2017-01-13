<?php 
	session_start();
	ini_set('session.cookie_lifetime', 1200);

	$_SESSION['auditoria']  = $_POST['auditoria'];
	$_SESSION['ctrl']  =  $_POST['ctrl'];
    $_SESSION['consulta']  =  $_POST['consulta'];
    $_SESSION['semestre']  =  $_POST['semestre'];
    $_SESSION['sexo']  =  $_POST['sexo'];




 ?>