<?php

class Route{
    static $getRoutes = [];
    static $postRoutes = [];

    static public function get($url,$controller){
        self::$getRoutes[$url] = $controller;
    }
    static public function post($url,$controller){
        self::$postRoutes[$url] = $controller;
    }


}