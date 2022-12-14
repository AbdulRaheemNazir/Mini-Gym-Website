<?php 
include_once("viewPersonalDetailsSQL.php");
$user = getUsers ();

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Mini Gym</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="site.css" />
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  
  </head>

<body class="bgColor">
	<header>
			<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
				<div class="container">
					<a class="navbar-brand" href="/MiniGym_Website_C2010722/Index.php">Mini Gym</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
						<ul class="navbar-nav flex-grow-1">
							<li class="nav-item">
								<a class="nav-link text-dark" href="/MiniGym_Website_C2010722/">
									<img border="0" alt="User Icon" src="/MiniGym_Website_C2010722/homeicon.png" width="30" height="30">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="/MiniGym_Website_C2010722/login.php">My Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="/MiniGym_Website_C2010722/customerforgotpassword.php">My Modules</a>
							</li>

							<li class="nav-item">
								<a class="nav-link text-dark" href="/MiniGym_Website_C2010722/createUserPage.php">Register Module</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="/MiniGym_Website_C2010722/staffandmanagerlogin.php">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	</header>


	<div class="container">
        	<main role="main" class="pb-3">
		

        	<h2>View and Update Details</h2>


        	            <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                    <thead class="table-dark">       <!--from boostrap gives headidng of table color--> 
                                    <td>Username</td>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Date of Birth</td>
                                    <td>Email</td>
                                    <td>Postcode</td>
                                    <td>Password</td>
                                    <td>Update your Details</td>
                                </thead>
                                	<?php 
                                	$user
                                	?>
                                <tr>
                                    <td><?php echo $user[0]['username']?></td>
                                    <td><?php echo $user[0]['fname']?></td>
                                    <td><?php echo $user[0]['lname']?></td>
                                    <td><?php echo $user[0]['datebirth']?></td>
                                    <td><?php echo $user[0]['email']?></td>
                                    <td><?php echo $user[0]['postcode']?></td>
                                    <td><?php echo $user[0]['password']?></td>
                                    <td><a href="updatecustomer.php?username=<?php echo $user[0]['username']; ?>">Update</a></td>
                                </tr>
                            </table>    
                        </div>
                     </div>



		</main>
	</div>

<?php require("Footer.php");?>
