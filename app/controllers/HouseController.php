<?php



class HouseController{
    public function listing(){
        $view = new View('listing', 'Add new listing');
    }
    public function newListing(){
        var_dump($_POST);
    }
}
    