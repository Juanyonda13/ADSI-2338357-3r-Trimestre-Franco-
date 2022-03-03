<?php
class Persona
{
    private $nombre;
    private $edad;

    function __construct(String $vr_nombre, $vr_edad)
    {
        $this->nombre = $vr_nombre;
        $this->edad = $vr_edad;
    } //end constructor 
    public function getDatospersonales()
    {
        $arrayDatospersonales = array(
            'Nombre: ' => $this->nombre,
            'Edad: ' => $this->edad,
        );
        return $arrayDatospersonales;
    }
    public function setNombre(){
        $nombre = $this->nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setEdad()
    {
       $edad = $this->edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }
}
?>