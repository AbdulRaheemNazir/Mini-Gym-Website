<?php include("NavBar.php");

$db = new SQLite3('C:\\xampp\minigym_database\\miniGym_database.db');

$sql = "SELECT * FROM customer WHERE username=:username";

$stmt = $db->prepare($sql);

$stmt->bindParam(':username', $_GET['username'], SQLITE3_TEXT);

$result= $stmt->execute();

while($row=$result->fetchArray(SQLITE3_NUM)){

$arrayResult [] = $row;

}

if (isset($_POST['submit'])){

$db = new SQLite3('C:\\xampp\minigym_database\\miniGym_database.db');

$sql = "UPDATE customer SET username = :username, fname = :fname, lname = :lname, datebirth = :datebirth, email = :email, postcode = :postcode, password = :password, WHERE username = :username";

$stmt = $db->prepare($sql);

$stmt->bindParam(':username',$_GET['username'], SQLITE3_TEXT); //discuss this!

$stmt->bindParam(':fname',$_POST['firstname'], SQLITE3_TEXT);

$stmt->bindParam(':lname',$_POST['lastname'], SQLITE3_TEXT); //discuss this!

$stmt->bindParam(':datebirth',$_POST['datebirth'], SQLITE3_TEXT);

$stmt->bindParam(':email',$_POST['email'], SQLITE3_TEXT);

$stmt->bindParam(':postcode',$_POST['postcode'], SQLITE3_TEXT);

$stmt->bindParam(':password',$_POST['password'], SQLITE3_TEXT);

$stmt->execute();

header('Location: viewUser.php');

}


 ?>


<div class="container pb-5">
        <main role="main" class="pb-3">


<div class="row">

<div class="col-11">

<form method="post">

<div class="form-group col-md-3">

<label class="control-label labelFont">First Name</label>

<input class="form-control" type="text" name = "fname" value="<?php echo $arrayResult[0][2]; ?>">

</div>

<div class="form-group col-md-3">

<label class="control-label labelFont">Last Name</label>

<input class="form-control" type="text" name = "lname" value="<?php echo $arrayResult[0][3]; ?>">

</div>

<div class="form-group col-md-3">

<label class="control-label labelFont">Date of Birth</label>

<input class="form-control" type="text" name = "datebirth" value="<?php echo $arrayResult[0][4]; ?>">

</div>

<div class="form-group col-md-3">

<label class="control-label labelFont">Email</label>

<input class="form-control" type="text" name = "email" value="<?php echo $arrayResult[0][5]; ?>">

</div>


<div class="form-group col-md-3">

<label class="control-label labelFont">Postcode</label>

<input class="form-control" type="text" name = "postcode" value="<?php echo $arrayResult[0][6]; ?>">

</div>

<div class="form-group col-md-3">

<label class="control-label labelFont">Password</label>

<input class="form-control" type="text" name = "password" value="<?php echo $arrayResult[0][7]; ?>">

</div>

<div class="form-group col-md-3">

<input type="submit" name="submit" value="Update" class="btn btn-primary">

</div>

<div class="form-group col-md-3"><a href="viewUser.php">Back</a></div>

</form>

</div>

</div>








</div>

<?php
    include("Footer.php"); 
?>
