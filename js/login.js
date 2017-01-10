$(document).ready(function() {

    var auditoriaNum;


//-------------------Revisar si hay alguna auditoria activa    
 function verificaAuditoria(){
    $.ajax({
                                dataType: "json",
                                url: api+"/auditoriaact",
                                type: 'get',


                            beforeSend: function () {
                                 $(".load").html('<img src="img/loading.gif" class="img-responsive center-block" >');

                            },

                            error: function(xhr) { // if error occured
                              $(".load").html('');
                              $(".login-body").html('<div class="panel panel-danger"><div class="panel-heading"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> ERROR:</div> <div class="panel-body"><p>Tenemos un problema al conectar con el servidor, favor de informar al administrador. <img src="img/emo-triste.png" width="5%"  > </p><a class="btn btn-default" href="http://www.itsf.edu.mx"  role="button">Atentamente ITSF.</a></div></div> ');
                            },
                            success: function(data)
                           {   
                                $(".load").html('');
                                if (data == "") {
                                    //alert("Nada por aqui");
                                    $(".login-body").html('<div class="panel panel-info"><div class="panel-heading"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> INFORMACIÓN:</div> <div class="panel-body"><p>Agradecemos la intención de realizar la auditoria de servicios, pero en este momento no se encuentra en curso.</p><a class="btn btn-default" href="http://www.itsf.edu.mx"  role="button">Atentamente ITSF.</a></div></div>');
                                } else {

                                        //var json = JSON.parse(data);
                                        
                                       $.each(data, function(i,item){
                                            auditoriaNum = data.data[0].no_auditoria;
                                           // auditoriaNum = data.no_auditoria;


                                            //auditoriaNum = data[i].no_auditoria;
                                           // alert(auditoriaNum);
                                            //alert("siii entroooo");
                                            
                                           
                                             
                                        });
                                       }



                           }
                       });

 }

 verificaAuditoria();


//-------------------Revisar si hay alguna auditoria activa    

//------------------------Cargar selects
    function cargarSelect(){

        $.ajax({
                                dataType: "json",
                                url: api+"/carrerasactivas",
                                type: 'get',


                            beforeSend: function () {
                                 $("#carreraload").html('<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Cargando carreras...</span></div></div>');
                            },

                            error: function(xhr) { // if error occured
                               $("#carreraload").html('');
                               $("#carreraload").html('<span class="label label-danger">No se pudo conectar a la Base de datos.. :(</span> ');
                            },
                            success: function(data)
                           {    
                                $("#carreraload").html('');

                                //var result = JSON.parse(data);
                               //alert(data);
                                for(carreras in data.data){ 
                                    $("#consulta").append("<option value='"+data.data[carreras].id_carrera+"'>"+data.data[carreras].descripcion+"</option>"); 
                                } 

                           }
                       });

    }


cargarSelect();
    //------------------------Cargar selects end

function redireccionar(){
    var ctrl = $("#noctrl").val();
    var consulta = $("#consulta").val();
    var semestre = $("#semestre").val();
    var sexo = $("#sexo").val();

    $.ajax({
                                     type: "post",
                                     data: {'auditoria': auditoriaNum, 'ctrl':ctrl, 'consulta':consulta, 'semestre':semestre, 'sexo':sexo },
                                     url: "comm/verif.php",

                                     beforeSend: function () {
                                        $(".loading").html(" <div class='progress'><div class='progress-bar progress-bar-striped active'  role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>Comprobando acceso, espere porfavor!.. </div></div>");
                                      },

                                      error: function(xhr) { // if error occured
                                          
                                         // $("#respuesta").html("Ocurrio un error al guardar los datos, intente de nuevo.");
                                         // $(placeholder).append(xhr.statusText + xhr.responseText);
                                         // $(placeholder).removeClass('loading');
                                          $(".loading").html(' ');
                                        $.alert({
                                                        title: 'Error!!',
                                                        icon: 'fa fa-frown-o',
                                                        content: 'No pudimos contactar con el servido, contacte al administrador. :/',
                                                        confirmButton: 'Ok'
                                                        
                                                    });
                                        
                                      },

                                     success: function(data)
                                     {      
                                              $(".loading").html(" ");
                                              
                                             window.location = "test.php";

                                     }
                                   });
}



$("#login").bind("submit",function(){

        // Capturamnos el boton de envío
        var btnEnviar = $("#enviar");
        var ctrl = $("#noctrl").val();
        $.ajax({
            type: "get",
            url: api+"/alumnos/"+ctrl,
            data: "json",

            beforeSend: function(){
                /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */
                // btnEnviar.text("Enviando"); Para button <button></button>
                $("#buscando").html('<div class="progress"><div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Espere</span></div></div>');
                btnEnviar.val("Buscando Alumno..."); // Para input de tipo button
                //
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
                $("#buscando").html('');

                btnEnviar.val("Comenzar Test");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
                /*
                * Se ejecuta cuando termina la petición y esta ha sido
                * correcta
                * */

                     var result = JSON.parse(data);
                     //alert(result);

                    if (result == 'true') {
                            $(".login-body").html('<div class="panel panel-info"><div class="panel-heading"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> INFORMACIÓN:</div> <div class="panel-body"><p>El numero de control <strong>'+ctrl+'</strong> ya ha realizado la auditoria de servicios. Gracias por su valiosa aportación.</p><a class="btn btn-default" href="#" onclick="location.reload();" role="button">Ingresa con nuevos datos.</a></div></div>');
                      } else if (result == 'false') {
                           //$(".login-body").html(result);
                           //alert("siii");
                           redireccionar();
                           //ENVIAR A ARCHIVO PHP PARA CREAR LAS VARIABLES DE SESION CON NO DE AUDITORIA Y DATOS DEL ALUMNO
                    }

            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
                $("#buscando").html('');
                alert("Problemas al tratar conectar a la base de datos.");
            }
        });

        // Nos permite cancelar el envio del formulario
        return false;

    });





})
