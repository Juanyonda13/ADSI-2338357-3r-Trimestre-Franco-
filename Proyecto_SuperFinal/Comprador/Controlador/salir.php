<?php
    require_once("../Modelo/Comprador.php");
    $modeloUsuario = new Comprador();
    $cerrarsesionComprador =$modeloUsuario->salirComprador();
?>