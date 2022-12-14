<?php


session_start();


function createcustomer(){

    $created = false;//this variable is used to indicate the creation is successfull or not
    $db = new SQLite3('C:\xampp\minigym_database\miniGym_database.db'); // db connection - get your db file here. Its strongly advised to place your db file outside htdocs. 
    $sql = 'INSERT INTO customer(username, fname, lname, datebirth, email, postcode, password) VALUES (:username, :fname, :lname, :datebirth, :email, :postcode, :password)';
    $stmt = $db->prepare($sql); //prepare the sql statement
        $stmt->bindParam(':fname', $_POST['fname'], SQLITE3_TEXT);
        $stmt->bindParam(':lname', $_POST['lname'], SQLITE3_TEXT);


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $random = mt_rand(10,99); 

        $x = "";
        $x = $fname[0];
        $b = "";
        $b = $fname[1];
        $c = "";
        $c = $fname[2];


        $q = substr($lname,-2);
        $username = $x.$b.$c.$q.$random;


        $_SESSION["username"] = $username;

        $stmt->bindParam(':username', $username, SQLITE3_TEXT);

        $stmt->bindParam(':datebirth', $_POST['datebirth'], SQLITE3_TEXT);
        $stmt->bindParam(':email', $_POST['email'], SQLITE3_TEXT);
        $stmt->bindParam(':postcode', $_POST['postcode'], SQLITE3_TEXT);
        $stmt->bindParam(':password', $_POST['password'], SQLITE3_TEXT);





        //execute the sql statement
        $stmt->execute();

        //the logic
        if($stmt){
            $created = true;
        }

        return $created;
    }
