<?php



class HouseController{
    public function listing(){
        $view = new View('listing', 'Add new listing');
    }
    public function newListing(){
        if(!isset($_POST['city']) || !isset($_POST['housenumber']) || !isset($_POST['rooms']) || !isset($_POST['streetname']) || !isset($_POST['toilets']) || !isset($_POST['propertysquaremeter']) || !isset($_POST['livesquaremeter']) || !isset($_POST['heatingtype']) && !isset($_POST['saleprice']) && !isset($_POST['description'])){
            die('please fill all in');
        }
        $city = htmlspecialchars($_POST['city']);
        $housenumber = htmlspecialchars($_POST['housenumber']);
        $rooms = htmlspecialchars($_POST['rooms']);
        $streetname = htmlspecialchars($_POST['streetname']);
        $toilets = htmlspecialchars($_POST['toilets']);
        $propertysquaremeter = htmlspecialchars($_POST['propertysquaremeter']);
        $livesquaremeter = htmlspecialchars($_POST['livesquaremeter']);
        $description = htmlspecialchars($_POST['description']);
        $saleprice = htmlspecialchars($_POST['saleprice']);
        if($_POST['heatingtype'] != "none"){
            $heating = 1;
            $heatingtype = htmlspecialchars($_POST['heatingtype']);
        }else{
            $heating = 0;
            $heatingstype = "";
        }

        if($toilets >= 0 && $rooms >= 0 && $propertysquaremeter >= 0 && $saleprice >= 0 && $livesquaremeter >= 0&& is_numeric($toilets) && is_numeric($toilets) && is_numeric($propertysquaremeter) && is_numeric($livesquaremeter) && is_numeric($_POST['saleprice'])){
            $listing = new Listing();
            $listing->houseNumber = $housenumber;
            $listing->streetName = $streetname;
            $listing->rooms = $rooms;
            $listing->city = $city;
            $listing->toilets = $toilets;
            $listing->private = 0;
            $listing->livesquaremeter = $livesquaremeter;
            $listing->propertysquaremeter = $propertysquaremeter;
            $listing->heating = $heating;
            $listing->heatingType = $heatingtype;
            $listing->user_id = Auth::id();
            $listing->saleprice = $saleprice;
            $listing->description = $description;
            if($listing->save()){
                header('Location: /');
            }
        }else{
            die('Number error. Please fill in form again...');
        }
    }
}
    