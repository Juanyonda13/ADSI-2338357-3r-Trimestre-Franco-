<?php
    require_once("../../Templete/templeteFormulario.php");
    require_once("../Modelo/Comprador.php");
    //session_start();
    $modeloUsuario = new Comprador();
    $modeloUsuario->validarsesionComprador();
    $vernombreUsuario = $modeloUsuario->getnombreComprador();
    
?>

<div>
    <h2>Bienvenido <?= print_r($vernombreUsuario); ?> </h2>
    <h2><a href="../Controlador/salir.php"> Salir </a> </h2>
</div>