<?php
require_once("05_Class_Persona.php");
class Empleado extends Persona
{
    private $sueldo;
    public function __construct($vrnombre, $vredad)
    {
        parent::__construct($vrnombre, $vredad);

    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
        return $this->sueldo;
    }
}
