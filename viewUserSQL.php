
<?php

function getUsers (){
    $db = new SQLITE3('C:\\xampp\minigym_database\\miniGym_database.db');
    $sql = "SELECT * FROM customer";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach
        $arrayResult [] = $row; //adding a record until end of records
    }
    return $arrayResult;
}
