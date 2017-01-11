<?php 
session_start();

 if (!isset($_SESSION['ctrl']) ) {
   header("Location: index.php");
 }
$semestre = $_SESSION['semestre'];

 ?>

<!DOCTYPE html>
<html lang="es">
    <head>        
        <!-- META SECTION -->
        <title>Bienvenido Auditoria de Servicios</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initia   l-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->


            <!-- Themes -->
    <link rel="stylesheet" href="js/rating/themes/bars-1to10.css">
    <link rel="stylesheet" href="js/rating/themes/bars-movie.css">
    <link rel="stylesheet" href="js/rating/themes/bars-square.css">
    <link rel="stylesheet" href="js/rating/themes/bars-pill.css">
    <link rel="stylesheet" href="js/rating/themes/bars-reversed.css">
    <link rel="stylesheet" href="js/rating/themes/bars-horizontal.css">

    <link rel="stylesheet" href="js/rating/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="js/rating/themes/css-stars.css">
    <link rel="stylesheet" href="js/rating/themes/bootstrap-stars.css">
    <link rel="stylesheet" href="js/rating/themes/fontawesome-stars-o.css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->


    </head>
    <body>

    <!--[if lt IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-toggled page-container-wide">
            
            <!-- START PAGE SIDEBAR -->
            
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    
                    
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Salir</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->
                   
                    <!-- LANG BAR -->
                    <li class="xn-logo">
                        <a href="#">SAS</a>
                     
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
              
                <!-- END BREADCRUMB -->                                                
                                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-columns"></span> ENCUESTA DE AUDITORÍA DE SERVICIOS</h2>
                </div>
                <!-- END PAGE TITLE -->                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-9">
                            
                                
                            <div class="panel panel-default">                                
                                <div class="panel-body">
                                    <h3>Instrucciones:</h3>
                                    <p>Este cuestionario consta de una serie de afirmaciones sobre el servicio que ofrece el ITSF. Califica según la experiencia que tengas respecto a lo que se dice.</p>

                                    <div class="panel panel-warning">
                                      <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-12 ">
                                                <strong>1. </strong> En el cuadro correspondiente de la columna SERVICIO indica la calificación que le asignas, según tu experiencia con el servicio de que se trata, con base en la siguiente escala:
                                            </div>
                                            <div class="col-md-3 col-sm-10 center-block">

                                               
                                                    <select id="example-1to10" name="rating" autocomplete="off">
                                                      <option value="1" >MUY MALO</option>
                                                      <option value="2">MALO</option>
                                                      <option value="3" selected="selected">REGULAR</option>
                                                      <option value="4">BUENO</option>
                                                      <option value="5">EXCELENTE</option>
                                                    </select>
                                                  

                                            </div>
                                        </div>
                                        <div >
                                           <strong>2. </strong> Si deseas expresar algún comentario, sugerencia o recomendación utiliza el espacio destinado para ello.
                                        </div>              
                                      </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-3" style="position: relative;">
                            <div id="tocify"></div>
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body">                            
                                    <div class="tocify-content">
                                    <!-- CATEGORIAS DE ITEMS -->
                                    <form id="prueba" action="guardar.php" method="POST" onsubmit="return enviar();">

                                        <?php
                                         include('comm/conect.php');
                                        ?>


                                    </div> 
                                </div>
                                <div class="row">
                                  <div class="col-sm-12 ">
                                    <button class="btn btn-success btn-lg btn-block" id="save">GUARDAR</button>
                                  </div>
                                  
                                </div>
                            </div>
                            </form>
                        </div>
                        
                    </div>

                    <footer class="text-center pie">
                      © <?php echo date('Y'); ?> - Software de Auditoria de Servicios para el ITSF <br> Desarrollado por I.S.C. Ramón AG
                    </footer>
            
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                 
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Salir? <strong></strong> </div>
                    <div class="mb-content">
                        <p>Realmente deseas salir?</p>                    
                        <p>Por favor no cierres la sesión, si aun no terminas el test, y no quedará registrado.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="comm/logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>

        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
        <script>
            $(function() {  
                var toc = $("#tocify").tocify({context: ".tocify-content", showEffect: "fadeIn",extendPage:false,selectors: "h2, h3, h4" });
            });

            function enviar(){
                event.preventDefault();
                //alert("Si entra a la funcion"); 
            
                var tamanio = document.getElementsByTagName('select');
                var bandera = true;
                 for (var i=0; i<tamanio.length; i++) {
                    var elementos = document.getElementsByTagName('select')[i].value;
                    
                    

                    if (elementos == ""){
                        var categoria = document.getElementsByTagName('select')[i].parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[1].childNodes[2].innerHTML;
                        //alert(categoria);
                        alert("No respondiste la pregunta ►"+i+" en la categoria ►"+categoria);
                        return false;
                        break;
                    }
                    else{
                        bandera = true;
                   }
                }

                if (bandera == true) {
                    prueba.submit();
                    return true;
                } else{
                    return false;
                }
    
            }


              

              
        </script>

        <script src="js/rating/jquery.barrating.min.js"></script>
        <script src="js/rating/examples.js"></script>



        
    <!-- END SCRIPTS -->         
    </body>
</html>






