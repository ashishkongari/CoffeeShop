<!DOCTYPE html>
<html lang="en">
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
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Search" style="color:#000000;">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="shoppingcart.php">Your Cart</a></li>
							<li><a href="billing.php">Checkout</a></li>					
							<li><a href="Login-Register/index1.php">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Coffee Maker</a>					
								<ul>
									<li><a href="automaticstove.php">Automatic Coffee Maker</a></li>									
									<li><a href="stovetop.php">Stovetop Espresso Maker</a></li>
									<li><a href="">French Press Plunger</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Mugs & Cups</a>
							<ul>
									<li><a href="mugs&cups.php">Cups & Saucers</a></li>									
									<li><a href="frenchpress.php">Cool Mugs</a></li>
									<li><a href="sippers.php">Sippers</a></li>	
							</ul>
							</li>			
							<li><a href="./products.html">Coffee Powder</a>
								<ul>									
									<li><a href="coffeeonthego.php">Coffee on the go</a></li>
									<li><a href="singleint.php">Single origin-International</a></li>
									<li><a href="singleindia.php">Single origin-India</a></li>
								</ul>
							</li>							
							<li><a href="./Coffee.php">Coffee</a></li>
							<li><a href="./admin/login.php">Managment</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/slider-1-final.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/slider-toper-roll-mill-2623-turkish-coffee-grind.jpg" alt="" />
							<div class="intro">
								<h1>Best Coffees Ever</h1>
								<p><span>Fine Roasted Beans</span></p>
								<p><span></span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	



								 <?php
								  $con=mysql_connect("localhost","root","");
								  mysql_select_db("admin");
								?>
								<?php
								    $result=mysql_query("SELECT * FROM posts WHERE post_categories='mugs_cups' and  post_subcategories='cups_saucers' order by 1 DESC LIMIT 0,4");
								    while ($row=mysql_fetch_array($result)) {
								?>


												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="view1.php?Get_id=<?php echo $row['post_id'];?>"><img src="images/<?php echo $row['post_image'];?>" alt="" /></a></p>
														<a href="../view1.php" class="title"><?php echo $row['post_name'];?></a><br/>
														<a href="../view1.php" class="category"><?php echo $row['post_subcategories'];?></a>
														<p class="price"><?php echo $x='Rs.'.$row['post_price'];?></p>
													</div>
												</li>
												<?php
												}
												?>

												<!-- <li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="productdetails1.php"><img src="themes/images/ladies/kl.jpg" alt="" /></a></p>
														<a href="productdetails1.php" class="title">Stovetop Espresso </a><br/>
														<a href="productdetails1.php" class="category">Stovetop Espresso Coffee Maker</a>
														<p class="price">Rs.499</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/ladies/milk_frother_white_for_web.jpg" alt="" /></a></p>
														<a href="" class="title">Milk Frother</a><br/>
														<a href="" class="category">Automatic Coffee Maker</a>
														<p class="price">Rs.1999</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/ladies/mysore_royal_for_web.jpg" alt="" /></a></p>
														<a href="" class="title">Mysore Royal Coffee</a><br/>
														<a href="" class="category">Coffee on the go</a>
														<p class="price">Rs.199</p>
													</div>
												</li> -->
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">

											<?php
												  $con=mysql_connect("localhost","root","");
								  mysql_select_db("admin");
								?>
								<?php
								    $result=mysql_query("SELECT * FROM posts WHERE post_categories='mugs_cups' and  post_subcategories='cool_mugs' order by 1 DESC LIMIT 0,4");
								    while ($row=mysql_fetch_array($result)) {
								?>

												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="productdetails.php"><img src="images/<?php echo $row['post_image'];?>" alt="" /></a></p>
														<a href="productdetails.php" class="title"><?php echo $row['post_name'];?></a><br/>
														<a href="view.php" class="category"><?php echo $row['post_subcategories'];?></a>
														<p class="price"><?php echo $x='Rs.'.$row['post_price'];?></p>
													</div>
												</li>
												<?php
												}
												?>
												<!-- <li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/ccd-mysore-nuggets_1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Mysore Nuggets Extra Bold</a><br/>
														<a href="products.html" class="category">Single Origin-India</a>
														<p class="price">Rs.200</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/ccd-indian-kathlekhan_1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Indian Kathlekhan Superior</a><br/>
														<a href="products.html" class="category">Single Origin-India</a>
														<p class="price">Rs.200</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/so_-_costa_rican-web.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Costa Rican Tarrazu</a><br/>
														<a href="products.html" class="category">Single Origin-International</a>
														<p class="price">Rs.200</p>
													</div>
												</li>	 -->																																
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?php
												  $con=mysql_connect("localhost","root","");
								  				mysql_select_db("admin");
												?>
								<?php
								    $result=mysql_query("SELECT * FROM posts WHERE post_categories='mugs_cups' and  post_subcategories='sippers' order by 1 DESC LIMIT 0,4");
								    if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

								    while ($row=mysql_fetch_array($result)) {
								?>

												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="productdetails.php"><img src="images/<?php echo $row['post_image'];?>" alt="" /></a></p>
														<a href="productdetails.php" class="title"><?php echo $row['post_name'];?></a><br/>
														<a href="view.php" class="category"><?php echo $row['post_subcategories'];?></a>
														<p class="price"><?php echo $x='Rs.'.$row['post_price'];?></p>
													</div>
												</li>
												<?php
												}
												?>

												<!--<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/coffee_times_-_7_bean_-_1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Coffee Times Cup-Black</a><br/>
														<a href="products.html" class="category">Cups & Saucers</a>
														<p class="price">Rs.349</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/coffee_times_-_7_bean_-_white_1_web_3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Coffee Times Cup-White</a><br/>
														<a href="products.html" class="category">Cups & Saucers</a>
														<p class="price">Rs.198</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/espresso_cup_new_-_front.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Espresso Cup</a><br/>
														<a href="products.html" class="category">Cups & Saucers</a>
														<p class="price">Rs.299</p>
													</div>
												</li>-->
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
											<?php
												  $con=mysql_connect("localhost","root","");
								  				mysql_select_db("admin");
												?>
								<?php
								    $result=mysql_query("SELECT * FROM posts WHERE post_categories='coffeepowder' and  post_subcategories='single_origin_india' order by 1 DESC LIMIT 0,4");
								    while ($row=mysql_fetch_array($result)) {
								?>

												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="productdetails.php"><img src="images/<?php echo $row['post_image'];?>" alt="" /></a></p>
														<a href="productdetails.php" class="title"><?php echo $row['post_name'];?></a><br/>
														<a href="view.php" class="category"><?php echo $row['post_subcategories'];?></a>
														<p class="price"><?php echo $x='Rs.'.$row['post_price'];?></p>
													</div>
												</li>
												<?php
												}
												?>
												<!--<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/indian_-_web.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Cool Mugs-Indian</a><br/>
														<a href="products.html" class="category">Cool Mugs</a>
														<p class="price">Rs.199</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/tall_mug_3_-_web.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Tall Mug-Quirky India</a><br/>
														<a href="products.html" class="category">Cool Mugs</a>
														<p class="price">Rs.299</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/ceramic_mug_-_festive_1_1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ceramic Mug-Festive</a><br/>
														<a href="products.html" class="category">Sippers</a>
														<p class="price">Rs.299</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/mason_sipper_combo_-_web.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Mighty Mason Sipper</a><br/>
														<a href="products.html" class="category">Sippers</a>
														<p class="price">Rs.398</p>
													</div>
												</li>-->																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="login.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo1.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span></span>
			</section>
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