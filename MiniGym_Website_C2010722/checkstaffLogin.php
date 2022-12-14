<?php
 function verifyUsers () {

        if (!isset($_POST['id']) or !isset($_POST['pwd'])) {
            return;  // <-- return null;  
        }

        $db = new SQLite3('C:\xampp\minigym_database\miniGym_database.db');
        $stmt = $db->prepare('SELECT id, pwd FROM auth WHERE id=:id AND pwd=:pwd');
        $stmt->bindParam(':id', $_POST['id'], SQLITE3_TEXT);
        $stmt->bindParam(':pwd', $_POST['pwd'], SQLITE3_TEXT);
        $result = $stmt->execute();

        $rows_array = [];
        while ($row=$result->fetchArray(SQLITE3_NUM))
        {
            $rows_array[]=$row;
        }
        return $rows_array;
    }
?>