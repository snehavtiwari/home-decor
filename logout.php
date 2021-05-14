<?php
session_start();
$con = mysqli_connect('localhost', 'root', '','homedecor');
$email=$_SESSION['lol'];
if(isset($_SESSION['email'])){
	session_destroy();
	echo "<script>location.href='loginpage.php'</script>";
}
else{
	//echo "hi".$_SESSION['lol'];
	$a = "delete from login where emailid='$email'";
	$rs=mysqli_query($con, $a);
	if($rs)
        {
            echo "<script>location.href='index.php'</script>";
            
        }
	
}


?>