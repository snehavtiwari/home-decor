<!DOCTYPE html>
<html>
<head>
<title>Contact Home Decor</title><link rel="stylesheet" type="text/css" href="css/style.css"><script src="cart.js" asyns></script>
</head>
	<body ><!--style="background-color:powderblue;"> -->
	<header>
		<div class="main">
		<div class="logo"> 
		<img src="abg.jpg">
		</div>		<div class="title">
			<h1 style="background-color:BF9755;"> Home Decor </h1>				
		</div>
			<ul>
			<li ><?php 
			session_start();
			$con = mysqli_connect('localhost', 'root', '','homedecor');

			 echo " Welcome ".$_SESSION['lol']; ?> 
			</li>
			<li >  </li>
			<li >  </li>
			<li ><a href="cart.php" class="btn">My Cart</a></li><li >    </li>
			<li ><a href="logout.php" class="btn">Logout</a></li>
			</ul>
		</div>
				
		</div>
		<div>
			<ul>
				<li >  </li>
</ul>
<div >
	
<div class="g11">
  <a target="_blank" href="g2.jpg">
    <img src="g2.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Price : Rs.350<br></div>
  <div><a href="cartdb.php" class="btn" value="g11cart">Add to cart</a></div>
</div>

<div class="g33">
  <a target="_blank" href="g3.jpg">
    <img src="g3.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Price : Rs.400</div>
  <div><a href="g33.php" class="btn" >Add to cart</a></div>
</div>

<div class="g44">
  <a target="_blank" href="g4.jpg">
    <img src="g4.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Price : Rs.250</div>
  <div><a href="cartdb.php" class="btn" >Add to cart</a></div>
</div>

<div class="g55">
  <a target="_blank" href="g5.jpg">
    <img src="g5.jpg"  width="600" height="400">
  </a>
  <div class="desc">Price : Rs.600</div>
  <div><a href="cartdb.php" class="btn" >Add to cart</a></div>
</div><br><br>



	</header>
	</body>
</html>