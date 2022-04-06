<?php 
    require_once("../Modelo/Comprador.php");

    if (isset($_REQUEST["btn_enviar"])) {
        $modeloPasajero = new Comprador();
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $modeloPasajero->insertarComprador($nombre, $email, $password);

    }else{
        header('Location: ../Vista/add.php');
    }

?>