<!DOCTYPE html>
<head>
<meta charset="utf-8">
		<title>CoffeeWebsites</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>


		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>			
	<div id="wrapper" class="container">
	<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Coffee Maker</a>					
								<ul>
									<li><a href="./products.html">Automatic Coffee Maker</a></li>									
									<li><a href="./products.html">Stovetop Espresso Maker</a></li>
									<li><a href="./products.html">French Press Plunger</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Mugs & Cups</a>
							<ul>
									<li><a href="./products.html">Cups & Saucers</a></li>									
									<li><a href="./products.html">Cool Mugs</a></li>
									<li><a href="./products.html">Sippers</a></li>	
							</ul>
							</li>			
							<li><a href="./products.html">Coffee Powder</a>
								<ul>									
									<li><a href="./products.html">Coffee on the go</a></li>
									<li><a href="./products.html">Single origin-International</a></li>
									<li><a href="./products.html">Single origin-India</a></li>
								</ul>
							</li>							
							<li><a href="./Coffee.php">Coffee</a></li>
							<li><a href="./products.html">Managment</a></li>
						</ul>
					</nav>
				</div>
			</section>

	
				<div id="content_area">
				<?php
				$title='Coffee overview';
				require ("CoffeeController.php");
				$coffeeController=new CoffeeController();
				$content=$coffeeController->CreateCoffeeDropdownList();//.$coffeeTables;
				echo $content;


				if(isset($_POST['types']))
				{
				$coffeeTables=$coffeeController->CreateCoffeeTables($_POST['type']);
				echo $coffeeTables;
				}
				else
				{
					$coffeeTables=$coffeeController->CreateCoffeeTables('%');
					echo $coffeeTables;
				}
				?>
				</div>



				<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
	</body>
</html>
	