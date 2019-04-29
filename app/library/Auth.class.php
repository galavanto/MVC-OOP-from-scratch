<?php



class Auth{

    public static function id(){
        // Getting id from logged in user
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['user'])){
            return $_SESSION['user']['id'];
        }else{
            die('Auth went wrong');
        }
    }
    public static function username(){
        // Getting username of logged in user
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['user'])){
            return (string)$_SESSION['user']['username'];
        }else{
            die('Auth went wrong');
        }
    }
    public static function loggedIn(){
        // Check if user is logged in or not
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['user']['logged_in'])){
            return true;
        }else{
            return false;
        }
    }

    public static function logout(){
        // Log out a user
        session_start();
        $_SESSION = array();
        if (session_status() == PHP_SESSION_ACTIVE){ 
            session_destroy(); 
        }
        return true;
    }
    public static function login($results){
        // Make sure session is running
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Settings user information in session. Array named user
        $user = array('logged_in' => true, 'id' => $results['id'], 'username' => $results['username']);
        $_SESSION['user'] = $user;

        // Generate an CSRF TOKEN
        $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 32); 
        $_SESSION['token-expire'] = time() + tokenexpiry;
        
        return true;
    }

    public static function start(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
}