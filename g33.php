<?php
session_start();
$con = mysqli_connect('localhost', 'root', '','homedecor');

$emailid = $_SESSION['lol'];
	$a = 2;
	$price = 400;
	
 
	
	$sql ="INSERT INTO cart (emailid,itemno,price) VALUES('$emailid','$a','$price')";
	$rs=mysqli_query($con, $sql);
if($rs){
header('location:buy.php');
}
?>