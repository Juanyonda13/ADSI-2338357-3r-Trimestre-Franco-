<?php
require_once("07_Class_Libro.php");
class Revista extends Libro
{
    private $edición;
    private $numero_de_paginas;

    public function __construct(int $vr_código, String $vr_titulo, $vr_autor)
    {
        parent::__construct($vr_código, $vr_titulo, $vr_autor);
    }
    public function setEdición($edición)
    {
        $this->edición = $edición;
        return $this->edición;
    }
    public function getEdición()
    {
        return $this->edición;
    }
    public function setNumero_de_paginas($numero_de_paginas)
    {
        $this->numero_de_paginas = $numero_de_paginas;
        return $this->numero_de_paginas;
    }
    public function getNumero_de_paginas()
    {
        return $this->numero_de_paginas;
    }
}
?>