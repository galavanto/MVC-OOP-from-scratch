<?php



class HouseController{
    public function listing(){
        $view = new View('listing', 'Add new listing');
    }
    public function newListing(){
        $city = htmlspecialchars($_POST['city']);
        $housenumber = htmlspecialchars($_POST['housenumber']);
        $rooms = htmlspecialchars($_POST['rooms']);
        $streetname = htmlspecialchars($_POST['streetname']);
        $toilets = htmlspecialchars($_POST['toilets']);
        $propertysquaremeter = htmlspecialchars($_POST['propertysquaremeter']);
        $livesquaremeter = htmlspecialchars($_POST['livesquaremeter']);
        if($heatingtype != "none"){
            $heating = 1;
            $heatingtype = htmlspecialchars($_POST['heatingtype']);
        }else{
            $heating = 0;
            $heatingstype = "";
        }

        if($toilets >= 0 && $rooms >= 0 && $propertysquaremeter >= 0  && $livesquaremeter >= 0&& is_numeric($toilets) && is_numeric($toilets) && is_numeric($propertysquaremeter) && is_numeric($livesquaremeter) ){
            echo "yeey";
        }else{
            die('Number error. Please fill in form again...');
        }
    }
}
    