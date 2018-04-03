<?php

    class RegisterController{

        public function index(){
            $title = "Registrate ";
            if(isset($_SESSION['user'])){
                header('Location: panel');
            }else{
                require_once 'views/include/header.php';
                require_once 'views/include/nav.php';
                require_once 'views/modules/auth/register.php';
                require_once 'views/include/footer.php';
            }
        }

        public function create(){
            if(isset($_SESSION['user'])){
                header('Location: panel');
            }else{
                 echo "usuario creado correctamente!<br>";
                echo "<a href='iniciar-sesion'>Iniciar sesion </a>";
            }
        }
    
    }

?>