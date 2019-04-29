<?php

class Route{
    // Arrays filled with url + controller->function in controller 
    // Controller and function are seperated by @ symbol.
    
    static $getRoutes = [];
    static $postRoutes = [];
    static $middleware = [];

    // Static call in web.php. pushing all routes + corresponding controller into the getRoutes variable
    static public function get($url,$controller){
        self::$getRoutes[$url] = $controller;

        return new Middleware($url);
    }
    // Static call in web.php. pushing all routes + corresponding controller into the postRoutes variable
    static public function post($url,$controller){
        self::$postRoutes[$url] = $controller;

        return new Middleware($url);
    }


    static public function middleware($middlewares){

        if(is_array($middlewares)){
            
        }else{
            die('Only arrays are allowed.');
        }

    }
}