<?php

 function verifyUsers () {

        if (!isset($_POST['username']) or !isset($_POST['postcode']) or !isset($_POST['email']))  {
            return;  // <-- return null;  
        }

        $db = new SQLite3('C:\xampp\minigym_database\miniGym_database.db');
        $stmt = $db->prepare('SELECT username, fname, lname, datebirth, email, postcode, password FROM customer WHERE username=:username AND postcode=:postcode AND email=:email');
        $stmt->bindParam(':username', $_POST['username'], SQLITE3_TEXT);
        $stmt->bindParam(':postcode', $_POST['postcode'], SQLITE3_TEXT);
        $stmt->bindParam(':email', $_POST['email'], SQLITE3_TEXT);

        $result = $stmt->execute();

        $rows_array = [];
        while ($row=$result->fetchArray())
        {
            $rows_array[]=$row;
        }
        return $rows_array;
    }


?>