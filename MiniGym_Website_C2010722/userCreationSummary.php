<?php include("NavBar.php"); 

$result = $_GET['createcustomer']; //you can also use $_REQUEST[''] do reseach whats the difference!

include_once("createUserSQL.php");


?>

<div class="container pb-5">
        <main role="main" class="pb-3">
        <h2>User Creation Result</h2><br>

        <div>
            <?php
                if($result){
                echo "Here is your autogenerated Username - make sure to note this down as you will need this to login to your account to access our facilities: " . $_SESSION['username'];

                }
                else{
                    echo "Error";
                }
            ?>





            <div><a href="createUserPage.php">Back</a></div>
        </div>
</div>

<?php
    include("Footer.php"); 
?>