<?php 
    require_once("../Modelo/Comprador.php");
    
    if (isset($_REQUEST["btn_enviar"])) {
        $email      = $_POST["email"];
        $password   = $_POST["password"];
        $modeloComprador = new Comprador();
        $modeloComprador->login($email, $password);

        if (isset($modeloComprador)) {
            header('Location: ../Vista/perfil.php');
        }else{
            header('Location: ../../Index.php');
        }

    }
?>