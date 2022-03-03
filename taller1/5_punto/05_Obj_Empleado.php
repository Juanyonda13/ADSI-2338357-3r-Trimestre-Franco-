<?php
require_once("05_Class_Persona.php");
require_once("05_Class_Empleado.php");
$ObjEmpleado = new Empleado("Marco", 24);
echo "<h2> Llamado a la clase Empleado </h2><br>";
echo "Nombre: " . $ObjEmpleado->getNombre() . "<br>";
echo "Edad: " . $ObjEmpleado->getEdad() . "<br>";
$ObjEmpleado->setSueldo(1000000); 
echo "Sueldo: " . $ObjEmpleado->getSueldo() . "<br>";

?>