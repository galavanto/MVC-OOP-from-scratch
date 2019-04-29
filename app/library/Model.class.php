<?php

abstract class Model
{

    protected static function getTableName()
    {
        $extendedClass = get_called_class();
        $lowerCaseClass = strtolower($extendedClass);
        return $lowerCaseClass . 's';
    }

    public static function all()
    {
        $primary_table = self::getTableName();

        $db = new Database();

        $query = $db->pdo->prepare('SELECT * FROM ' . $primary_table);
        unset($db);
        return self::execute($query);
    }

    public static function find($id)
    {
        $primary_table = self::getTableName();

        $db = new Database();

        $query = $db->pdo->prepare('SELECT * FROM ' . $primary_table . ' where id=' . $id);
        // check if execute went okay.
        unset($db);
        return self::execute($query);
    }

    public function save()
    {
        $primary_table = self::getTableName();
        $columns = "";
        $values = "";

        foreach ($this as $key => $value) {
            $columns .= $key . ",";
            if(gettype($value) === "string"){
                $values .= '"'.$value.'"'. ",";
            }else{
                $values .= $value . ",";
            } 
        }

        $columns = substr_replace($columns, "", -1);
        $values = substr_replace($values, "", -1);

        $queryString = "INSERT INTO " . $primary_table . " (" . $columns . ")
        VALUES (" . $values . ");";
        
        $db = new Database();
        $query = $db->pdo->prepare($queryString);



        if($query->execute()){
            unset($db);
            return true;
        }else{
            if(__ENV__ == "DEBUG"){
                print_r($query->errorInfo());
            }
        }
    
    }

    
    /**
     * where function on the model - returns where
     *
     * @param colum of database $firstParam
     * @param value of database $secondParam
     * @return all results
     */
    
    public static function where($firstParam, $secondParam)
    {
        $primary_table = self::getTableName();

        $db = new Database();
        // check if integer
        if (is_numeric($secondParam)) {
            $query = $db->pdo->prepare("SELECT * FROM " . $primary_table . " where " . $firstParam . "='" . (int) $secondParam . "' ");
        } else {
            $query = $db->pdo->prepare("SELECT * FROM " . $primary_table . " where " . $firstParam . " LIKE '%" . $secondParam . "%'");
        }
  
        // return "SELECT * FROM ".$primary_table." where ".$firstParam."= '%".$secondParam."%'";
        unset($db);
        return self::execute($query);
    }


    protected static function execute($query){
        // check if execute went okay.
        if($query->execute()){
            if(isset(get_called_class()::$protected_columns)){
                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($results) ; $i++) { 
                        foreach(get_called_class()::$protected_columns as $column){
                            unset($results[$i][$column]);
                        }
                    }
                    return $results;
            }else{// Get rid of all the protected colums before returning
            return $query->fetchAll(PDO::FETCH_ASSOC);
            }
        }else{
            // If env is debug, show errors
            if(__ENV__ == "DEBUG"){
                print_r($query->errorInfo());
            }
            // print_r($query->errorCode());
            echo "Something went wrong. Our apologies.";
        }
    }
}
