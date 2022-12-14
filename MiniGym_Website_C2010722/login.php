<?php require("NavBar.php");

require_once("checkUserLogin.php");

$nameErr = $pwderr = $invalidMesg = "";

if (isset($_POST['submit'])) {

    if ($_POST["username"]=="") {
        $nameErr = "Username is required";
      } 
      
      if ($_POST["password"]==null) {
        $pwderr = "Password is required";
      }

    if($_POST['username'] != null && $_POST["password"] !=null)
    {
        $array_customer = verifyUsers(); //calling this function from SelectUser.php. The function returns an array
        if ($array_customer != null) {

      
            if ($array_customer[0])
            {

                $_SESSION['username'] = $array_customer[0]['username'];
                $_SESSION['password'] = $array_customer[0]['password'];
               
                header("Location: userIndex.php"); 
                exit();
            }


        }
        else{
            $invalidMesg = "Invalid username and password!";
        }
    }
}


?>

	<div class="container">
        	<main role="main" class="pb-3">
		

        	<h2>Customer Login</h2>



<div class="row">
            <div class="col-6">
                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">User Name</label>
                        <input class="form-control" type="text" name = "username" id = "username">
                        <span class="text-danger"><?php echo $nameErr; ?></span>


                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Password</label>
                        <input class="form-control" type="password" name = "password">
                        <span class="text-danger"><?php echo $pwderr; ?></span>
                   </div>


                   <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit" value="Login" name ="submit">
                   </div>
                </form>
            </div>
        </div>




		</main>
	</div>

<?php require("Footer.php");?>