<?php
 include('pass.php');
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['fname'])!=null&&isset($_POST['lname'])!=null
  &&isset($_POST['email'])!=null&&isset($_POST['password'])!=null
  &&isset($_POST['phoneno'])!=null&&isset($_POST['interest'])!=null
  &&isset($_POST['address'])!=null&&isset($_POST['organisation'])!=null
  &&isset($_POST['department'])!=null&&isset($_POST['designation'])!=null
  &&isset($_POST['pin'])!=null &&isset($_POST['gender'])!=null
   &&isset($_POST['theme'])!=null &&isset($_POST['qualification'])!=null
    )
{
$fname=mysqli_real_escape_string($conn,stripslashes($_POST['fname']));
$lname=mysqli_real_escape_string($conn,stripslashes($_POST['lname']));
$email=mysqli_real_escape_string($conn,stripslashes($_POST['email']));
$password=md5(mysqli_real_escape_string($conn,stripslashes($_POST['password'])));
$phoneno=mysqli_real_escape_string($conn,stripslashes($_POST['phoneno']));
$interest=mysqli_real_escape_string($conn,stripslashes($_POST['interest']));
$address=mysqli_real_escape_string($conn,stripslashes($_POST['address']));
$organisation=mysqli_real_escape_string($conn,stripslashes($_POST['organisation']));
$department=mysqli_real_escape_string($conn,stripslashes($_POST['department']));
$designation=mysqli_real_escape_string($conn,stripslashes($_POST['designation']));
$pin=mysqli_real_escape_string($conn,stripslashes($_POST['pin']));
$gender=mysqli_real_escape_string($conn,stripslashes($_POST['gender']));
$theme=mysqli_real_escape_string($conn,stripslashes($_POST['theme']));
$qualification=mysqli_real_escape_string($conn,stripslashes($_POST['qualification']));
if(isset($_POST["isca"]))
$isca=mysqli_real_escape_string($conn,stripslashes($_POST['isca']));
else
$isca=0;
$sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `designation`, `department`, `organisation`, `interest`, `address`,`pin`, `phone`,`gender`,`isca`,`qualification`,`theme`)
                      VALUES ('$fname', '$lname', '$email', '$password', '$designation','$department','$organisation','$interest' ,'$address', '$pin','$phoneno','$gender','$isca','$qualification','$theme');";
if ($conn->query($sql) === TRUE) {
//echo("Student Data Entered");
session_start();
$_SESSION['login_user']=$email;
header("location: user.php?msg=Success");
}
else {
    //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: register.php?err=errorReg");
}
}
else {
	//echo "missing data";
  header("location: register.php?err=incompleteForm");
}
?>
