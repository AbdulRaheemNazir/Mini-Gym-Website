<?php

$db = new SQLite3("C:\\xampp\minigym_database\\miniGym_database.db");
.db
if ($db){
    echo "Database is successfully connected";
}
else{
    echo "Fail to connect the database";
}
require("NavBar.php");
?>
	<div class="container bgColor">
        	<main role="main" class="pb-3">	
            <h2>"Database Connection"</h2>	
		</main>
	</div>

<?php require("Footer.php");?>