<?php


include('comm/datab.php');


foreach ($_POST['valor'] as $item => $value){

	if ($value=="") {
		echo ' <script type="text/javascript">
			var pregunta = '$item';
           	alert("Por favor responda a la pregunta ".pregunta);
  			history.back();
			
           
       </script>';
	}
     echo $item.": ".$value."<br>";
}



?>