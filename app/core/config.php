<?php


// Database
define('DBHOST','127.0.0.1');
define('DBNAME','oop_php_mvc');
define('DBUNAME','root');
define('DBPASS','');


// Online DB - Example.bosweb
// define('DBHOST', getenv("MYSQL_HOST"));
// define('DBNAME',getenv("MYSQL_DATABASE"));
// define('DBUNAME',getenv("MYSQL_USERNAME"));
// define('DBPASS',getenv("MYSQL_PASSWORD"));
// define('DBPORT',getenv("MYSQL_PORT"));


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