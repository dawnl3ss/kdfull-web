<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/app/Autoloader.php";
__load_all_classes();

class AppController {

    public static function __views(){
        create_routes(
            [
                [
                    "method" => METHOD_GET,
                    "name" => "/",
                    "callback" => function(){
                        require_once "view/home.view.php";
                    }
                ]
            ]
        );
        
        return load_routes();
    }
}
