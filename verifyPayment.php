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

$sql="UPDATE `users` SET `feeconfirm` = '1' WHERE `id` = '$id';";
		if ($conn->query($sql) === TRUE) {
		header("location: confadmin.php?msg=actSuccessPay");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else
{
   header("location: confadmin.php?msg=ErrorActPay");
}

}


else
{
   header("location: confadmin.php?msg=ErrorActPay");
}


$conn->close();
?>
