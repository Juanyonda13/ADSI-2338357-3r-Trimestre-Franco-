<?php
require_once("05_Class_Persona.php");
class Contador extends Persona
{
    private $diaslaborados;
    public function __construct($vrnombre, $vredad)
    {
        parent::__construct($vrnombre, $vredad);
    }

    public function setDiasLaborados($diaslaborados)
    {
        $this->diaslaborados = $diaslaborados;
    }
    public function getDiasLaborados()
    {
        return $this->diaslaborados;
    }
    public function getPago($sueldototal)
    {
        $dias_laborados = $this->diaslaborados;
        $sueldo = $sueldototal / 30;
        $sueldofinal = $sueldo * $dias_laborados;
        echo "El sueldo por los " . $dias_laborados . " dias trabajados es de: " . $sueldofinal . " pesos ";
    }
}
?>