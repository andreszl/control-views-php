<?php

    class LoginController{

        public function index(){
            $title = "Iniciar Sesion";
            if(isset($_SESSION['user'])){
                header('Location: panel');
            }else{
                require_once 'views/include/header.php';
                require_once 'views/include/nav.php';
                require_once 'views/modules/auth/login.php';
                require_once 'views/include/footer.php';
            }
            
        }

        public function auth(){
            if(isset($_SESSION['user'])){
                header('Location: panel');
            }else{
                $_SESSION['user'] = true;
                 header("Location: panel");
            }

        }
    
    }

?>