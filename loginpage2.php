<!DOCTYPE html>
<html>
<head>
<title>Login</title><link rel="stylesheet" type="text/css" href="css/style.css">
<script defer src="C:\Users\acer\Desktop\website\website using css\login.js"></script>
</head>
<body style="background-color:lightgrey;"><!--style="background-color:powderblue;"> -->
	<script>alert("Login to continue!")</script>
	<div class="title">
			<h1 style="background-color:BF9755;"> Home Decor </h1>				
		</div><!-- ------------------------------------------- ALERT MSG ------------------>
	<header>
		<div class="main"> 
		<div class="logo"> 
		<img src="abg.jpg">
		</div>
			<ul>
		<li>	
		<a href="index.php" class="btn">Back</a>
			</li></ul>
		</div>
		<div id="error"></div><div class="lnsp1"><img src="lnsp1.jpg" width="850" ></div><h1><p class="lntext"><b>Login</b></p></h1>
		<form id="form" action="logindb.php" method="POST">
			<div class="lnemail">
				<label for="email"> Email Id </label><br>
				<input id="email" name="email" type="email" size="30" width="60" height="70" required>
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
