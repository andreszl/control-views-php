<?php

    class UserController{

        public function dashboard(){
            $title = "Panel";
            if(isset($_SESSION['user'])){
                require_once 'views/include/header.php';
                require_once 'views/include/nav.php';
                require_once 'views/modules/user/dashboard.php';
                require_once 'views/include/footer.php';
            }else{ 
                header('Location: iniciar-sesion');
            }

        }

        public function logout(){
            if(isset($_SESSION['user'])){
                session_destroy();
                header('location: iniciar-sesion');
            }else{
                header('Location: iniciar-sesion');
            }
        }
    
    }

?>