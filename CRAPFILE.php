
<?php include("NavBar.php");

$db = new SQLite3('C:\\xampp\minigym_database\\miniGym_database.db');
$sql = "SELECT * FROM customer WHERE username=:username";
$stmt = $db->prepare($sql);
$stmt->bindParam(':username', $_GET['username'], SQLITE3_TEXT);
$result= $stmt->execute();


if (isset($_POST['submit'])){
$db = new SQLite3('C:\\xampp\minigym_database\\miniGym_database.db');
$sql = "UPDATE customer SET password = :password" WHERE username=:username;
$stmt = $db->prepare($sql);
$stmt->bindParam(':password',$_POST['password'], SQLITE3_TEXT);
$stmt->execute();
header('Location: passwordhasbeenchanged.php');
}
 ?>


<div class="container pb-5">
        <main role="main" class="pb-3">
<div class="row">
<div class="col-11">
<form method="post">
<div class="form-group col-md-3">
<label class="control-label labelFont">New Password</label>
<input class="form-control" type="text" name = "password" value="<?php echo [0][0]; ?>">
</div>
<div class="form-group col-md-3">
<input type="submit" name="submit" value="Update" class="btn btn-primary">
</div>
</form>
</div>
</div>

<?php
    include("Footer.php"); 
?>
