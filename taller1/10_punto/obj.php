<?php
require_once ("Sports.php");

$objShoeSports=new Sports(7,"KIKE",4,"es muy bonito messirve",500);
$objSee_Inventary= $objShoeSports->getSee_Inventary(4,500);

print_r("<pre>");
print_r($objSee_Inventary);
print_r("</pre>");

?>