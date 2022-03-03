<?php

require_once("05_Class_Persona.php");
$ObjPersona = new Persona("Marcos",21);
echo "<h2> Llamado a la clase Persona </h2><br>";
echo "Nombre: " . $ObjPersona->getNombre() . "<br>";
echo "Edad: " . $ObjPersona->getEdad() . "<br>";

?>