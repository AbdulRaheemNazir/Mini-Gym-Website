<?php

 function verifystatus () {



        $db = new SQLite3('C:\xampp\minigym_database\miniGym_database.db');

        $stmt = $db->prepare('SELECT status FROM staff WHERE id=:id AND status=:status');
        $stmt->bindParam(':id', $_POST['id'], SQLITE3_TEXT);

        $result = $stmt->execute();

        $rows_array = [];
        while ($row=$result->fetchArray(SQLITE3_NUM))
        {
            $rows_array[]=$row;
        }
        return $rows_array;
    }

?>