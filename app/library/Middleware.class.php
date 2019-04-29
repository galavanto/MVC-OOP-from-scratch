<?php

class Middleware{

    private static $url;
    public static $middlewares = [];

    public function __construct($url){
        self::$url = $url;
    }

    static public function middleware($middlewares){

        if(is_array($middlewares)){
            // Loop over all middleware noted in web.php
            self::$middlewares[self::$url] = $middlewares;
        }else{
            die('Only arrays are allowed.');
        }

    }

}