<?php require("NavBar.php");

include_once("viewUserSQL.php");
$user = getUsers ();

?>


<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>View User</h2><br>

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
                                    <td>Passwor</td>
                                </thead>

                                <?php
                                    for ($i=0; $i<count($user); $i++):
                                ?>
                                <tr>
                                    <td><?php echo $user[$i]['username']?></td>
                                    <td><?php echo $user[$i]['fname']?></td>
                                    <td><?php echo $user[$i]['lname']?></td>
                                    <td><?php echo $user[$i]['datebirth']?></td>
                                    <td><?php echo $user[$i]['email']?></td>
                                    <td><?php echo $user[$i]['postcode']?></td>
                                    <td><?php echo $user[$i]['password']?></td>
                                </tr>
                                <?php endfor;?>
                            </table>    
                        </div>
                    </div>






    </main>
</div>
<?php require("Footer.php");?>




