<?php
class Libro
{
    public $código;
    public $titulo;
    public $autor;

    function __construct(int $vr_código, String $vr_titulo, $vr_autor)
    {
        $this->código = $vr_código;
        $this->titulo = $vr_titulo;
        $this->autor = $vr_autor;
    } //end constructor 

    public function getDatospersonales()
    {
        $arrayDatospersonales = array(
            'Código: ' => $this->código,
            'Titulo: ' => $this->titulo,
            'Autor: ' => $this->autor,
        );
        return $arrayDatospersonales;
    }
}
?>