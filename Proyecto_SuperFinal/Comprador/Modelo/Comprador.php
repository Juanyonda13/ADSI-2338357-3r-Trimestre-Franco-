<?php 
    require_once("../../Conexion/conexion.php");
    session_start();
    class Comprador extends Conexion{

        public function __construct()
        {
            $this->db = parent::__construct();
        }

        public function insertarComprador($nombre, $email, $password){
            $tabla = $this->db->prepare("INSERT INTO registro(nombre,  email, password)
            VALUES(:nombre,  :email, :password)");
            $tabla->bindParam(':nombre', $nombre);          
            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);

            if ($tabla->execute()) {
                header('Location: ../Vista/add.php');
            }else{
                header('Location:../Vista/add.php');
            }
        }

        public function getComprador(){
            $rows = null;
            $tabla = $this->db->prepare("SELECT id_registro, nombre,  email FROM registro");
            $tabla->execute();
            while ($result = $tabla->fetch()) {
                $rows[] = $result;
            }
            return $rows;
        }

        public function login($email, $password){
            $tabla = $this->db->prepare("SELECT nombre, email, password FROM registro
            WHERE email = :email AND password = :password ");

            $tabla->bindParam(':email', $email);
            $tabla->bindParam(':password', $password);
            $tabla->execute();
            //rowCount metodo me encuentra al menos 1 registro
            if ($tabla->rowCount()==1) {
                //$ingresoUsuario traera los datos de tabla
                $ingresoUsuario = $tabla->fetch();
                $_SESSION['email'] = $ingresoUsuario["email"];
                $_SESSION["nombre"] = $ingresoUsuario["nombre"];
                //echo $_SESSION['email'];
                //die();
                echo "Ingreso de sesion Satisfactorio!!";
            }else{
                echo "Fallo al ingresar a sesión de usuario";
            }

        }//end login
         public function validarsesionComprador(){
            if ($_SESSION['email']==Null) {
               header('Location: ../../index.php');
            }
        } 

       public function getnombreComprador(){
            return $_SESSION['email'];
        } 

        public function salirComprador(){
            
            //session_start();
            unset($_SESSION["email"]);
            session_destroy();
            header('refresh:3 url=../../index.php');
            //header("refresh:3; url=../");
            echo "Terminando ...";
        
        }

    }//end clase

?>