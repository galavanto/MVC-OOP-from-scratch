<?php


// Database
define('DBHOST','127.0.0.1');
define('DBNAME','oop_php_mvc');
define('DBUNAME','root');
define('DBPASS','');


// File structure
define('__ROOT__', dirname(dirname(dirname(__FILE__)))   ); 
define('__APP__', dirname(dirname(dirname(__FILE__).'/app'))   ); 
define('__PUBLIC__', dirname(dirname(dirname(__FILE__).'/public'))   ); 

// Possible envs, DEBUG , PRODUCTION , NONE
define('__ENV__','DEBUG');


// Encryption
define('BcryptCost', ['cost' => 11]);


// CSRF

define('tokenexpiry', 3600); // time in seconds
?>