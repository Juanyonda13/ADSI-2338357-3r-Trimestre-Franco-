<?php
require_once("persona.php");
$objPersona= new person("pepe",924392439,40);
echo "Cedula del man : ".$objPersona->getCedula();


?>