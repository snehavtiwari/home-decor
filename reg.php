<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','real');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//$repassword = $_POST['repassword'];

	$sql = "INSERT INTO user (Name,Email Id, Password) VALUES ( '$name', '$email', '$password')";
	//$sql1 = "INSERT INTO login (slno,emailid,npass) VALUES ('0','$email','$password')";
	
	
}
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script>alert("You have registered successfully! Login to continue.")</script>';
				header('location:new1.php');
}
?>