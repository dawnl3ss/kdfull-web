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
            require_once "view/tutoriels/tuto.view.php";
        });

        /**
         * @route => /reseaux
         */
        create_route(METHOD_GET, '/reseaux', function (){
            require_once "view/networks.view.php";
        });

        /**
         * @route => /posts
         */
        create_route(METHOD_GET, '/posts', function (){
            require_once "view/posts.view.php";
        });
        
        return load_routes();
    }
}
