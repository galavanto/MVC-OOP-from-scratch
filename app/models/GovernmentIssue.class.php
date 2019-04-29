<?php



class GovernmentIssue{
    static protected $tax;
    static public function determineTax(House $house){
        if($house->wozwaarde != null){
            switch($house->wozwaarde){
                case ($house->wozwaarde <= 100000):
                    self::$tax += 600;
                break;
                case ($house->wozwaarde <= 200000):
                    self::$tax += 2000;
                break;
                case ($house->wozwaarde >= 200000):
                    self::$tax += 6000;
                break;
            }
        }else{
            return "wozwaarde niet aanwezig";
        }

        if($house->rooms != null){
            switch($house->rooms){
                case 1:
                    self::$tax += 100;
                break;
                case 2:
                    self::$tax += 300;
                break;
                case ($house->rooms >= 3):
                    self::$tax += 800;
                break;
            }
        }else{
            return "kamer aantal niet aanwezig";
        }
        $city = strtolower($house->city);
        if($city != null){
            switch($city){
                case "amsterdam":
                    self::$tax += 1000;
                break;
                case "groningen":
                    self::$tax += 1000;
                break;
                case "rotterdam":
                    self::$tax += 1000;
                break;
            }
        }else{
            return "stad niet aanwezig";
        }
        return self::$tax;
    }

}