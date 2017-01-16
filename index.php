<!DOCTYPE html>
<html lang="es" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Auditoria de Servicios - Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/personalizado.css"/>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>


        
        <div class="login-container login-v2">
            
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div class="login-title"><strong>AUDITORÍA DE SERVICIOS</strong> </div>
                    <form id="login" class="form-horizontal" method="post" false;>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="load ">
                              
                            </div>
                            <div class="input-group">
                                  <p class="bg-info informacion">
                                    Tu opinión nos es de suma importancia, por lo que solicitamos de la manera más atenta, respondas con sinceridad este cuestionario.<br>

Se agradece tu atención y seriedad para contestar la presente.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input maxlength="11" onkeypress="return soloLetras(event)" type="text" id="noctrl" name="noctrl" class="form-control" placeholder="Numero de Control" required>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="col-md-12">
                            <div id="carreraload" class="col-md-12"></div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                </div>

                                <select id="consulta" name="consulta" class="form-control" required>
                                  <option value="">Selecciona una Carrera.</option>
                                  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-sort"></span>
                                </div>                                
                                <select name="semestre" id="semestre" class="form-control" required>
                                  <option value="">Selecciona un semestre.</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>

                                
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                 <label for="sexo">Sexo:  </label>
                                <div class="radio-inline">
                                  <label>
                                    <input type="radio" name="sexo" id="sexo" value="1" required>
                                   Femenino
                                  </label>
                                </div>
                                <div class="radio-inline">
                                  <label>
                                    <input type="radio" name="sexo" id="sexo" value="2">
                                    Masculino
                                  </label>
                                </div>
                              </div>
                            </div>
                      </div>
                   
                        <div class="col-md-12" id="buscando">
                            
                        </div>

                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input  value="Comenzar Test" id="enviar" type="submit" class="btn btn-primary btn-lg btn-block">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-right">
                        &copy; <?php echo date('Y'); ?> Software de Auditoria de Servicios
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
    <script type="text/javascript" src="../swas/js/conf.js"></script>
    
     <script type="text/javascript" src="js/login.js"></script>  
</html>






