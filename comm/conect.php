<form id="prueba" action="comm/guardar.php" method="POST" onsubmit="return enviar();">
<?php 

include('datab.php');



		$query = $db->query("Select * from servicios where serv_act = 1 AND serv_semest <= ".$semestre);
		$servicios= array();
		$j = 0;
		while ($fila = $query->fetch_assoc()) {
			
			?>
			<div class="panel panel-info">
			<div class="panel-heading">
                 <h2 class="panel-title descripcion" ><?php echo $fila['serv_descripcion']; ?></h2>
                 </div>
                 <div class="panel-body">
                 

			<?php

				$query2 = $db->query ("Select servicios.serv_descripcion, item.item_descripcion, item.item_activo, item.id_item from item INNER JOIN servicios ON item.id_servicio = servicios.id_servicio where item_activo = 1 AND servicios.id_servicio = ".$fila['id_servicio']);
				$item= array();
				$i =0;
				while ($fila2 = $query2->fetch_assoc()) {
					$i++;
					$j++;
					$etiqueta="";
					if ($i%2==0 ) {
						$etiqueta = 'lineastabla';
					}
					?>
	                 <!--  ITEMS -->
	                  <div class="row cursorefect <?php echo $etiqueta; ?>">
					
						
	                  <div class="col-xs-12 col-sm-9 lead col-md-9 col-md-offset-0 ">
					<?php
					echo $j.".- ".$fila2['item_descripcion'];
					?>
					 </div>
                       <div class="col-xs-9 col-xs-offset-2 col-sm-3 col-md-3 col-md-offset-0 alinear">
                           <div class="box box-blue box-example-1to10 center-block ">
                              <div class="box-body ">
                                <select  class="selector" name="valor[<?php echo $fila2['id_item']; ?>]" autocomplete="off" >
                               	  <option value="">ELIGE UNO</option>
                                  <option value="1" >MUY MALO</option>
                                  <option value="2">MALO</option>
                                  <option value="3">REGULAR</option>
                                  <option value="4">BUENO</option>
                                  <option value="5">EXCELENTE</option>
                                </select>
                              </div>
                            </div>
                       </div>
                       </table>
                   </div>
				 <?php
				}
				echo '</div> </div>';
		}

 ?>