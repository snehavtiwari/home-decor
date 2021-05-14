<!DOCTYPE html>
<html>
<head>
<title>Login</title><link rel="stylesheet" type="text/css" href="css/style.css">
<script defer src="C:\Users\acer\Desktop\website\website using css\login.js"></script>
</head>
<body style="background-color:lightgrey;"><!--style="background-color:powderblue;"> -->
	<header>
		<div class="main"> 
		<div class="logo"> 
		<img src="abg.jpg">
		</div>
			<ul>
		<li class="btn">	
		<a href="index.php" >Back</a>
			</li></ul>
		</div>
		<div id="error"></div><div class="lnsp1"><img src="11.jpg" width="850" ></div><h1><p class="lntext"><b>Login</b></p></h1>
		<form id="form" action="logindb.php" method="POST">
			<div class="lnemail">
				<label for="fname"> Username </label><br>
				<input id="fname" name="fname" type="fname" size="30" width="60" height="70" required>
			</div>
			<div class="lnpasswd">
				<label for="password"> Password </label><br>
				<input id="password" name="password" type="password" maxlength="8" size="30" required>
			</div>
			
				<input type="submit" name="Submit" id="Submit" value="Submit" class="loginbtn" >
				<input type="reset" name="Reset" id="reset" value="Reset" class="loginbtn1"><br><br><br>
				<p class="sp"> Don't have an account?    <a href="signup.php" class="btn">Sign up</a>
			
			
		</form>

</body>
</html>
