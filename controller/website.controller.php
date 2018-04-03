<?php
    class WebsiteController{

        public function index(){
            $title = "Inicio";
            require_once 'views/include/header.php';
            require_once 'views/include/nav.php';
            require_once 'views/modules/website/index.php';      
            require_once 'views/include/footer.php';
        }
        
        public function contact(){
            $title = "contacto";
            require_once 'views/include/header.php';
            require_once 'views/include/nav.php';
            require_once 'views/modules/website/contact.php';
            require_once 'views/include/footer.php';
        }

        public function about_us(){
            $title = "Sobre Nosotros";
            require_once 'views/include/header.php';
            require_once 'views/include/nav.php';
            require_once 'views/modules/website/about_us.php';
            require_once 'views/include/footer.php';
        }

        public function services(){
            $title = "Servicios";
            require_once 'views/include/header.php';
            require_once 'views/include/nav.php';
            require_once 'views/modules/website/services.php';
            require_once 'views/include/footer.php';
        }
    }
?>