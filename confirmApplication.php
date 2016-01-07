<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['id']))
{
$id=$_POST['id'];

$sql="UPDATE `users` SET `applicationstatus` = '1' WHERE `id` = '$id';";
		if ($conn->query($sql) === TRUE) {
		header("location: confadmin.php?msg=actSuccess");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else
{
   header("location: confAdmin.php?msg=ErrorAct");
}

}


else
{
   header("location: confAdmin.php?msg=ErrorAct");
}


$conn->close();
?>
