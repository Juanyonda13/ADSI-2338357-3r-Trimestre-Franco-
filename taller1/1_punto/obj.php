<?php

require_once("employee.php");
$Employee=new employee("pepe2",1235423,"diler",1500,30);

print_r($Employee->Personal_Information());

?>