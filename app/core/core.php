<?php

    // Before executing, check if not from other source. 
    // Only allowing access from the server this application is running on.
    if ($_SERVER['SERVER_ADDR'] != $_SERVER['REMOTE_ADDR']){
        $this->output->set_status_header(400, 'No Remote Access Allowed');
        exit; //just for good measure
    }


    // include config
    include 'config.php';

    //Defining the autoloader
    include __APP__.'/core/autoloader.php';

    spl_autoload_register('MyAutoloader::LibraryLoader');
    spl_autoload_register('MyAutoloader::ClassLoader');

    // register all routing
    include __APP__.'/routing/web.php';



    // Initiating router
    $router = new Router($_SERVER['REQUEST_URI']);
 
    $router->figureOutController();
    

?>