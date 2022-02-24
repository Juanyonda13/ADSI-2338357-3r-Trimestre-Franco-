<?php
require_once("polimorfismo.php");
$objEstate=new product("mesa rustica",3500000);

echo "estado : ".product::$state;

$objEstate->getInfoproduct();
print_r("<pre>");
print_r($objEstate);
print_r("</pre>");
?>