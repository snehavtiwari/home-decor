<?php
session_start();
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','homedecor');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($password!=$repassword)
{
	echo '<script>alert("Passwords do not match,Retype password")</script>';
}
else
{
	$sql = "INSERT INTO signup (slno, fname, lname, phno, emailid, npass, repass) VALUES ('0', '$fname', '$lname', '$number', '$email', '$password', '$repassword')";
	
	//$sql2 = "INSERT INTO cart (emailid,itemno,price) VALUES ('$email','0','0')";
	
}
//$username=$fname;
$_SESSION['fname']=$fname;
$rs = mysqli_query($con, $sql);


if($rs)
{
	header('location:loginpage2.php');
}
?>