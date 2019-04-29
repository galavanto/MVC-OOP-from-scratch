<?php



class HomepageController{

    public function home(){

        $view = new View('homepage', 'Home');
        $user = User::find(6);
        $view->assign('user',$user);
    }
    


    public function listings(){
        // Getting all listings from user
        $results = Listing::userListing();
        if(count($results) > 0){
            $view = new View('listings', 'Listings');
            $view->assign('listings',$results);
        }else{
            $view = new View('listings', 'Listings');
        }

    }

    public function profile(){
        $view = new View('profile','Profile');
    }
}

?>