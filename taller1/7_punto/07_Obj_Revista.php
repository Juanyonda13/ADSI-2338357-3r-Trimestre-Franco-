<?php
require_once("07_Class_Libro.php");
require_once("07_Class_Revista.php");
$ObjLibro = new Libro(001, "Viaje al fin de la noche", "Louis-Ferdinand Céline");
echo "<h2> Llamado a la clase Libro </h2><br>";
echo "Código: " . $ObjLibro->código . "<br>";
echo "Titulo: " . $ObjLibro->titulo . "<br>";
echo "Autor: " . $ObjLibro->autor . "<br>";

$ObjRevista1 = new Revista(002, "Don Quijote de la Mancha", "Miguel de Cervantes");
$ObjRevista1->setEdición("1605 y 1614");
$ObjRevista1->setNumero_de_paginas(1.967);
echo "<h2> Llamado a la clase Revista 1 </h2><br>";
echo "Código: " . $ObjRevista1->código . "<br>";
echo "Titulo: " . $ObjRevista1->titulo . "<br>";
echo "Autor: " . $ObjRevista1->autor . "<br>";
echo "Edición entre los años: " . $ObjRevista1->getEdición() . "<br>";
echo "Número de paginas: " . $ObjRevista1->getNumero_de_paginas() . "<br>";

$ObjRevista2 = new Revista(003, "Los cuentos de Canterbury", "Geoffrey Chaucer");
$ObjRevista2->setEdición("1387 y 1400");
$ObjRevista2->setNumero_de_paginas(639);
echo "<h2> Llamado a la clase Revista 2 </h2><br>";
echo "Código: " . $ObjRevista2->código . "<br>";
echo "Titulo: " . $ObjRevista2->titulo . "<br>";
echo "Autor: " . $ObjRevista2->autor . "<br>";
echo "Edición entre los años: " . $ObjRevista2->getEdición() . "<br>";
echo "Número de paginas: " . $ObjRevista2->getNumero_de_paginas() . "<br>";

$ObjRevista3 = new Revista(004, "Los cuentos de Raymond Carver", "Raymond Carver");
$ObjRevista3->setEdición(1983);
$ObjRevista3->setNumero_de_paginas(240);
echo "<h2> Llamado a la clase Revista 3 </h2><br>";
echo "Código: " . $ObjRevista3->código . "<br>";
echo "Titulo: " . $ObjRevista3->titulo . "<br>";
echo "Autor: " . $ObjRevista3->autor . "<br>";
echo "Edición año: " . $ObjRevista3->getEdición() . "<br>";
echo "Número de paginas: " . $ObjRevista3->getNumero_de_paginas() . "<br>";
?>