<?php



class UserController{
    
    public function insert(){
        session_start();
        if(!isset($_SESSION['user'])){
            $view = new View('register','register');
        }else{
            $view = new View('homepage', 'Home');
        }
        // $view->assign('houses', $houses);
    }

    public function save(){

        $_POST = $trimmed_array=array_map('trim',$_POST);

        $username = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['psw'];
        $rpwd = $_POST['psw-repeat'];
        
        // trim all data
        

        if($pwd !== $rpwd || strlen($pwd) < 2){
            $session['error'] = array('danger','Password check didn\'t pass. sorry');
            die('Password check didn\'t pass. sorry');
        }else{
 
            if(count(User::checkEmail($email)) > 0 || count(User::checkUsername($username)) > 0){
                $session['error'] = array('danger','Looks like you\'ve already have an account.');
                die('Looks like you\'ve already have an account.');
            }else{
                $user = new User();
                $user->username = $username;
                $user->email = $email;

                $user->password = password_hash($pwd, PASSWORD_BCRYPT, BcryptCost);
                if($user->save()){

                    session_start();

                   

                    // login user
                    if(User::checkCredentials(filter_var($_POST['username'],FILTER_SANITIZE_STRING),filter_var($_POST['psw'],FILTER_SANITIZE_STRING))){
                        $view = new View('homepage', 'Home');
                    }else{
                        die('logging in went wrong');
                    };
                }else{
                    die('something went wrong with signing up');
                };
                
            };
        
        }
    }


    public function indexLogin(){
        Auth::start();
        if(!isset($_SESSION['user'])){
            $view = new View('login','login');
        }else{
            $view = new View('homepage','Home');
        }
    }

    public function login(){
        // the trimmer needs to be made into a helper function eventually.
        
        $_POST = $trimmed_array=array_map('trim',$_POST);

        
        if(User::checkCredentials(filter_var($_POST['username'],FILTER_SANITIZE_STRING),filter_var($_POST['psw'],FILTER_SANITIZE_STRING))){
            $view = new View('homepage', 'Home');
        }else{
            die('logging in went wrong');
        };

    }

    public function logout(){
        if(Auth::logout()){
            $houses = House::all();
            $view = new View('homepage', 'Home');
        }else{
            die('something went wrong');
        };
    }

    private static function trim($value) 
    { 
        function trim_value(&$value)
        {
            $value = trim($value);    // this removes whitespace and related characters from the beginning and end of the string
        }
        return array_filter($value, 'trim_value');
    }
}