<?php

    session_start();
    function getUsers (){
    $db = new SQLITE3('C:\\xampp\minigym_database\\miniGym_database.db');
    $sql = "SELECT * FROM customer WHERE username = 'a'";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    while ($column = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach
        $arrayResult [] = $column; //adding a record until end of records
    }
    return $arrayResult;

}



