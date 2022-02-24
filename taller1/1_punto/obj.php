<?php

require_once("employee.php");
$employee = new employee("pepe2",1235423,"diler",1500,30);
$employee->Personal_Information();
print_r("<pre>");
print_r($employee);
print_r("</pre>");
?>
