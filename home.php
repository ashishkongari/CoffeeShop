<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: ../index1.php");
}
$res=mysqli_query($con,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../themes/css/flexslider.css" rel="stylesheet"/>
		<link href="../themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>CoffeeHouse</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. cappuccino">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="login.php">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="../index.html" class="logo pull-left"><img src="../themes/img/logo.png" class="site_logo" alt="" width="30%" height="30%"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Beans</a>					
								<ul>
									<li><a href="./products.html">Light Roast</a></li>									
									<li><a href="./products.html">Medium Roast</a></li>
									<li><a href="./products.html">Dark Roast</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Equipments</a></li>			
							<li><a href="./products.html">Shop</a>
								<ul>									
									<li><a href="./products.html">Coffee Beans</a></li>
									<li><a href="./products.html">Coffee Powders</a></li>
									<li><a href="./products.html">Equipments</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">About Us</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>			

</body>
</html>