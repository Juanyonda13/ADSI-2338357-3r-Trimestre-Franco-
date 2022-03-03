<?php
require_once("05_Class_Persona.php");
require_once("05_Class_Contador.php");

$ObjContador = new Contador("Asensio" ,26);
echo "<h2> Llamado a la clase Contador </h2><br>";
echo "Nombre: " . $ObjContador->getnombre() . "<br>";
echo "Edad: " . $ObjContador->getEdad() . "<br>";
$ObjContador->setDiasLaborados(23);
$ObjContador->getPago(1000000);

?>