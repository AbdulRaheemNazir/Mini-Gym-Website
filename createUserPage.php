<?php require("NavBar.php");

include_once("createUserSQL.php");



$errorusername = $errorfname = $errorlname = $errordatebirth = $erroremail = $errorpostcode = $errorpassword = "";
$allFields = "yes";

if (isset($_POST['submit'])){

    if ($_POST['fname']==""){
        $errorfname = "First name is mandatory";
        $allFields = "no";
    }
    if ($_POST['lname']==null){
        $errorlname = "Last name is mandatory";
        $allFields = "no";
    }
    if ($_POST['datebirth']==null){
        $errordatebirth = "Date of Birth is mandatory";
        $allFields = "no";
    }

    if ($_POST['email']==""){
        $erroremail = "Email is mandatory";
        $allFields = "no";
    }
    if ($_POST['postcode']==""){
        $errorpostcode = "Post Code is mandatory";
        $allFields = "no";
    }
    if ($_POST['password']==""){
        $errorpassword = "Password mandatory";
        $allFields = "no";
    }

    if($allFields == "yes")
    {
        $createcustomer = createcustomer();
        header('Location: userCreationSummary.php?createcustomer='.$createcustomer);
    }
}

?>




    <div class="container pb-5">
            <main role="main" class="pb-3">

            <h2>Customer Account Creation</h2>	
		

<div class="row">
            <div class="col-6">


                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">First Name</label>
                        <input class="form-control" type="text" name = "fname">
                        <span class="text-danger"><?php echo $errorfname; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Last Name</label>
                        <input class="form-control" type="text" name = "lname">
                        <span class="text-danger"><?php echo $errorlname; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Date of Birth (DD/MM/YYYY)</label>
                        <input class="form-control" type="text" name = "datebirth">
                        <span class="text-danger"><?php echo $errordatebirth; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Email Address</label>
                        <input class="form-control" type="text" name = "email">
                        <span class="text-danger"><?php echo $erroremail; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Post Code</label>
                        <input class="form-control" type="text" name = "postcode">
                        <span class="text-danger"><?php echo $errorpostcode; ?></span>
                   </div>


                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Password</label>
                        <input class="form-control" type="text" name = "password">
                        <span class="text-danger"><?php echo $errorpassword; ?></span>
                   </div>


                   <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit" value="Become a customer" name ="submit">
                   </div>



                </form>
            </div>
        </div>


        
		</main>
	</div>

<?php require("Footer.php");?>

