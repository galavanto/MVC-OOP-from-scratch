<?php


    class Database{
        public $pdo;


        public function __construct(){
            // Het aanmaken van een PDO object -> database verbinding.
            try
            {
                $this->pdo = new PDO('mysql:host='. DBHOST .':'.DBPORT.';dbname=' . DBNAME, DBUNAME, DBPASS);
                
            }
            catch (PDOException $e)
            {
                exit('Error Connecting To database');
            }
        }



        public function close_connection(){
            $this->pdo = null;
        }
    }

?>