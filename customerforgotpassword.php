<?php require("NavBar.php");

require_once("checkforgotpassword.php");

$errorusername = $erroremail = $errorpostcode = $invalidMesg = "";

if (isset($_POST['submit'])) {

     if ($_POST["username"]=="") {
        $errorusername = "Username is required";
      } 
      
     if ($_POST["postcode"]==null) {
        $errorpostcode = "Postcode is required";
      }

     if ($_POST["email"]==null) {
        $erroremail = "Email is required";
      }


    if($_POST['username'] != null && $_POST["postcode"] !=null && $_POST["email"] !=null)
    {
        $array_customer = verifyUsers(); //calling this function from SelectUser.php. The function returns an array
        if ($array_customer != null) {

      
            if ($array_customer[0])
            {
                session_start();
                $_SESSION['username'] = $array_customer[0]['username'];
                $_SESSION['postcode'] = $array_customer[0]['postcode'];
                $_SESSION['email'] = $array_customer[0]['email'];
               
                header("Location: changeyourpassword.php"); 
                exit();
            }


        }
        else{
            $invalidMesg = "Invalid details. Please try again.";
        }
    }
}


?>

     <div class="container">
          <main role="main" class="pb-3">
          

          <h2>Customer Forgot Password</h2>



<div class="row">
            <div class="col-6">
                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Username</label>
                        <input class="form-control" type="text" name = "username">
                        <span class="text-danger"><?php echo $errorusername; ?></span>
                   </div>

                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Postcode</label>
                        <input class="form-control" type="text" name = "postcode">
                        <span class="text-danger"><?php echo $errorpostcode; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Email</label>
                        <input class="form-control" type="text" name = "email">
                        <span class="text-danger"><?php echo $erroremail; ?></span>
                   </div>


                   <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit" value="Reset Password" name ="submit">
                   </div>
                </form>
            </div>
        </div>




          </main>
     </div>

<?php require("Footer.php");?>

