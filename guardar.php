<?php


include('comm/datab.php');


foreach ($_POST['valor'] as $item => $value){


     echo $item.": ".$value."<br>";

}

?>