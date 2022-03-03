<?php
require_once("04_clasePeluqueria.php");
$objPeluqueria =  new peluqueria("Dario ","CUT","Popayan calle 73 bn 5a", 8234567, "8:00 AM","6:00 PM", "10000", "largo");
print_r('<pre>');
print_r($objPeluqueria);
print_r('</pre>');


?>