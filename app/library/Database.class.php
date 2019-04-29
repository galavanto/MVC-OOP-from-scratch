<?php


    class Database{
        public $pdo;


        public function __construct(){
            try
            {
                $this->pdo = new PDO('mysql:host='. DBHOST .';dbname=' . DBNAME, DBUNAME, DBPASS);
                
            }
            catch (PDOException $e)
            {
                exit('Error Connecting To d');
            }
        }



        public function close_connection(){
            $this->pdo = null;
        }
    }

?>