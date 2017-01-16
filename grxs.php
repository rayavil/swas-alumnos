<?php
session_start();
if (!isset($_SESSION['alumnoCreado'])) {
	header('Location: index.php');
}
header("Content-Type: text/html;charset=utf-8");

?>

<!DOCTYPE html>
<html lang="es" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Auditoria de Servicios - Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap_3.3.2.min.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/personalizado.css"/>

        <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
        
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
    	<div class="container-fluid animated fadeInDown">
    		
    		<div class="row ">
    			<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 caja">
    				<div class="logo-gracias">
    				<h2>¡Perfecto!</h2>
    					<img class="img-responsive" width="100px" src="img/stars.png" alt="Gracias">
					</div>
			
	    			<div class="texto-gracias ">
	    				<img class="estrella" class="img-responsive" width="200px" src="img/logotipo.png" alt="Star">
	    				
	    				<p class="text-center parrafo">Estudiante con no. de control <strong><?php echo $_SESSION['ctrl']; ?></strong>, la informacion que nos proporcionas es muy importante y gracias a tu participación podremos ofrecerte un mejor servicio.
	    				<br> 
						<a href="index.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>  Regresar</a>
	    				</p>
					</div>
			</div>
			</div>
			<footer class="text-center piefin">
                      © <?php echo date('Y'); ?> - Software de Auditoria de Servicios para el ITSF <br> Desarrollado por <strong>I.S.C. <span class="nom">Ramón AG<span></strong>
                    </footer>
		</div>

	
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    </body>

</html>
<?php 
$_SESSION = array();
session_destroy();

?>