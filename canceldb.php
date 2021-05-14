<?php
$con = mysqli_connect('localhost', 'root', '','homedecor');
$email=$_POST['email'];

$a = "SELECT * FROM signup WHERE emailid = '$email' ";

if ($a) {
 
    $del = "DELETE FROM signup WHERE emailid = '$email' ";
	$dell = "DELETE FROM login WHERE emailid = '$email' ";
  } 
else {
    header('location:signup1.php');
  }

$rs2 = mysqli_query($con, $del);
	$rs3 = mysqli_query($con, $dell);
if($rs2){
	if($rs3){

	
	header('location:index1.php');
}
}
?>