<!DOCTYPE html>
<html>
<head>
<title>Signup Home Decor</title><link rel="stylesheet" type="text/css" href="css/style.css">
<script defer src="C:\Users\acer\Desktop\website\website using css\login.js"></script>
</head>
	<body ><!--style="background-color:powderblue;"> -->
		<script>alert("No such record")</script><!-- ------------------------------------------- ALERT MSG ------------------>
	<header>
		<div class="main">
		<div class="logo"> 
		<img src="abg.jpg">
		</div>		<div class="titlegal">
<h1 style="background-color:BF9755;"> Home Decor  </h1>				
		</div>
			<ul>
		<li>	
		<a href="index.php" class="btn">Back</a>
			</li></ul>
		</div>
		<div id="error"></div><div class="lnsp1"><img src="lnsp1.jpg" width="850" ></div><h1><p class="sptext"><b>Sign up</b></h1></p>
		<form id="form" method="POST" action="signupdb.php" >
			<div class="fname">
				<label for="name"> New Username </label><br>
				<input id="fname" name="fname" type="text" size="30" width="60" height="70" required>
			</div>
			<div class="lname">
				<label for="lname"> Customer Name </label><br>
				<input id="lname" name="lname" type="text" size="30" width="60" height="70" required>
			</div>
			<div class="number">
				<label for="number"> Phone Number </label><br>
				<input id="number" name="number" type="phone" size="30" width="60" height="70" required>
			</div>
			<div class="email">
				<label for="email"> Email Id </label><br>
				<input id="email" name="email" type="email" size="30" width="60" height="70" required>
			</div>
			<div class="passwd">
				<label for="password"> New Password </label><br>
				<input id="password" name="password" type="password" maxlength="8" size="30" required>
			</div>
			<div class="repasswd">
				<label for="password"> Retype Password </label><br>
				<input id="repassword" name="repassword" type="password" maxlength="8" size="30" required>
			</div>
			<p>&nbsp;</p>
				<input type="submit" name="Submit" id="Submit" value="Submit" class="loginbtn" >
				<input type="reset" name="Reset" id="reset" value="Reset" class="loginbtn1">
				
				<br><br><br>
				<!--<p class="sp"> Already have an account?    <a href="loginpage.php" class="btn"> Login</a></p><br><br><br>-->
				<p class="sp"> Want to cancel your registration?, click here<a href="cancel.php" class="btn">Cancel Registration</a></p>
			</form>
				
		</div>


	</header>
	</body>
</html>