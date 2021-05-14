<?php
$con = mysqli_connect('localhost', 'root', '','homedecor');
session_start();
$email = $_POST['fname'];
$password = $_POST['password'];
$_SESSION['lol']=$email;

//$_SESSION['un']=$fnamee;
//$_SESSION['unn']=$_SESSION['un'];
$a="INSERT INTO login (slno,emailid,npass) VALUES ('0','$email','$password')";
/*
$email=stripcslashes($email);
$password=stripcslashes($password);

$email=addslashes($email);
$password=addslashes($password);*/


$rs2=mysqli_query($con, $a);
$result="select * from signup where fname='$email' and npass='$password'";
$run = mysqli_query($con,$result);

    //$row=$result;
    if(mysqli_num_rows($run)>0)
    {
        if($rs2)
        {
            echo '<script>alert("login successful")</script>';
            header('location:buy.php');
        }        
    }
    else
    {
        echo '<script>alert("INCORRECT CREDENTIALS")</script>';
        header('location:loginpage1.php');
    }



?>