<?php require("NavBar.php");

require_once("checkstaffLogin.php");

require_once("checkstaffandmanagerstatus.php");
$idErr = $pwderr = $invalidMesg = "";
$allField = True;


if (isset($_POST['submit'])) {

    if ($_POST["id"]=="") {
        $nameErr = "ID is required";
        $allField = FALSE;
    } 
      
    if ($_POST["pwd"]==null) {
        $pwderr = "Password is required";
        $allField = FALSE;
    }



    if($allField == True)
    {
        $array_auth = verifyUsers(); //calling this function from SelectUser.php. The function returns an array
        $array_staff = verifystatus(); //calling this function from SelectUser.php. The      
        if (!empty($array_auth)){

            $id = $array_auth[0][0];
            $pwd = $array_auth[0][1];



            $status = $array_staff[0][4];
            $role = $array_staff[0][5];


            if($status != "active"){
                $invalidMesg = "Invalid Acount has been blocked";
            }

            else{

                if($role == "staff"){
                    header("Location: staffindex.php?user=".$array_auth[0][0]); 
                }
                else{
                    header("Location: managerindex.php?user=".$array_auth[0][0]); 
                }

            }

        }
        else{
            $invalidMesg = "Invalid Username and password";
        }
    }

}



?>

	<div class="container">
        	<main role="main" class="pb-3">
		

        	<h2>Staff/Manager Login</h2>



<div class="row">
            <div class="col-6">
                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">ID</label>
                        <input class="form-control" type="text" name = "id">
                        <span class="text-danger"><?php echo $idErr; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Password</label>
                        <input class="form-control" type="text" name = "pwd">
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


