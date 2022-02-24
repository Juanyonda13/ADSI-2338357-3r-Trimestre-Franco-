<?php
require_once("Netflix.php");
$objNetflix=new Netflix("EL AGUA MOJA",221,true,4);
echo "Nombre de la pelicula : ".$objNetflix->getFilm_Namet();
echo "<br>";

echo $objNetflix->setRental_Cost(4);
?>