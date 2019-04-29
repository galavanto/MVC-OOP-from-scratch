<?php


class Router{
  public $sanitizedUrl;
  private $controllerName;
  private $functionName;

  public function __construct($url){
    // $endUrl = rtrim($url, '/');
    $filteredUrl = filter_var($url, FILTER_SANITIZE_URL);
    // $endUrl = explode('/', $endUrl);
    $endUrl = strtok($filteredUrl, '?');

    $this->sanitizedUrl = $endUrl;
    
    return $this->sanitizedUrl;
  }



  public function goToController(){
    // define('__ROOT__', dirname(dirname(__FILE__))); 
    require_once  ''.__APP__.'/controllers/'.$this->controllerName.'.php';

    // call_user_func($this->controllerName,this->functionName);
    $controller = new $this->controllerName();
    call_user_func_array(array($controller,$this->functionName), array());
    // $controller = new HomepageController();
    // $controller->''.$this->functionName.''();
  }
  public function figureOutController(){



    if($_SERVER['REQUEST_METHOD'] === 'GET'){

      if(array_key_exists($this->sanitizedUrl, Route::$getRoutes)){
        
        $tempArray = explode('@',Route::$getRoutes[$this->sanitizedUrl]);

        $this->controllerName = $tempArray[0];
        $this->functionName = $tempArray[1];
        $this->goToController();
      }else{
        die('ROUTING:: something went wrong. '.$this->sanitizedUrl.' is not configured');
      }


    }elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
      if(array_key_exists($this->sanitizedUrl, Route::$postRoutes)){
        $tempArray = explode('@',Route::$postRoutes[$this->sanitizedUrl]);
        $this->controllerName = $tempArray[0];
        $this->functionName = $tempArray[1];
        $this->goToController();
      }else{
        die('something went wrong. '.$this->sanitizedUrl.' is not configured');
      }
    }else{
      die('figureOutController went wrong');
    }
  }
} 