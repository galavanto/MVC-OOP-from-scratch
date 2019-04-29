<?php



class User extends Model{
    public $username,$email,$password;
    public static $protected_columns = ['password'];


    
    public static function checkEmail($email){
        return self::where('email',$email);
    }
    public static function checkUsername($username){
        return self::where('username',$username);
    }

    public static function checkCredentials($username,$password){
        $primary_table = self::getTableName();

        $db = new Database();
        $query = $db->pdo->prepare("SELECT * FROM users where username='".$username."'");
        $query->execute();

        $results = $query->fetch();
        if(password_verify($password,$results['password'])){
            Auth::login($results);
            unset($db);
            return true;
        }else{
            // Make sure session is running
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            unset($_SESSION['user']);
            unset($db);
            return false;
        }
    }
}