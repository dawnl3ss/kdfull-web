<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/Autoloader.php";
__load_all_classes();

class AppController {

    public static function __views(){
        
        /**
         * @route => /
         */
        create_route(METHOD_GET, '/', function (){
            require_once "view/home.view.php";
        });

        /**
         * @route => /tutoriels
         */
        create_route(METHOD_GET, '/tutoriels', function (){
            echo "page";
        });
        
        return load_routes();
    }
}
