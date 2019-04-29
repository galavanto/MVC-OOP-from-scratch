<?php


class Listing extends Model{


    public $wozwaarde;
    public $rooms,$toilets,$heating,$heatingType,$streetName,$houseNumber,$city,$livesquaremeter,$propertysquaremeter;

    
    public function __construct($streetName,$houseNumber,$city){
        $this->streetName = $streetName;
        $this->houseNumber = $houseNumber;
        $this->city = $city;
    }

    protected function _setRooms($rooms){
        if(gettype($rooms) != "integer"){
            die();
        }
        $this->rooms = (int)$rooms;
    }
    
    protected function _setToilets($toilets){
        if(gettype($rooms) != "integer"){
            die();
        }
        $this->toilets = (int)$toilets;
    }

    protected function _setHeating($heating){
        if(gettype($rooms) != "boolean"){
            die();
        }
        $this->heating = (bool)$heating;
    }

    protected function _setHeatingType($heatingType){
        if(gettype($heatingType) != "string"){
            die();
        }
        $this->heatingType = $heatingType;
    }

    protected function _setStreetName($streetName){
        if(gettype($streetname) != "string"){
            die();
        }
        $this->streetName = $streetName;
    }

    protected function _setHouseNumber($houseNumber){
        if(gettype($houseNumber) != "string"){
            die();
        }
        $this->houseNumber = $houseNumber;
    }

    protected function _setCity($city){
        if(gettype($city) != "string"){
            die();
        }
        $this->city = $city;
    }

    protected function setLiveable($liveable){
        if(gettype($liveable) != "integer"){
            die();
        }
        $this->squareMeterCountLiveable = $liveable;
    }

    protected function setLiveableProperty($liveableProperty){
        if(gettype($liveableProperty) != "integer"){
            die();
        }
        $this->squareMeterCountProperty = $liveableProperty;
    }


    public function getStreetName(){
        return $this->streetName;
    }
    public function getCity(){
        return $this->city;
    }
    public function getHouseNumber(){
        return $this->houseNumber;
    }
    public function getToilets(){
        return $this->toilets;
    }
    public function getHeating(){
        return $this->heating;
    }
    public function getLiveable(){
        return $this->squareMeterCountLiveable;
    }
    public function getLiveableProperty(){
        return $this->_squareMeterCountProperty;
    }
    public function getRooms(){
        return $this->rooms;
    }
    public function getWozWaarde(){
        return $this->_WozWaarde;
    }


    static public function fitsCriteria($input){
        if(gettype($input) == "string" || gettype($input) == "integer" ){
            return true;
        }
        return false;
    }


    public static function userListing(){
        session_start();
        if(isset($_SESSION['user'])){
        
            $results = Listing::whereListing('user_id',$_SESSION['user']['id']);
            return $results;
        }else{
            die('something went wrong');
        }
    }
    public static function whereListing($firstParam, $secondParam)
    {
        $primary_table = self::getTableName();

        $db = new Database();
        // check if integer
        $query = $db->pdo->prepare("SELECT *, users.username FROM " . $primary_table . " INNER JOIN users ON listings.user_id = users.id WHERE listings." . $firstParam . "='" . (int) $secondParam . "' ");

        $query->execute();
        unset($db);
        return $query->fetchAll();
    }
}