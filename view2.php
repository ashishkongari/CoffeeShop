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
            <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
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
          <a href="index.html" class="logo pull-left"><img src="" class="site_logo" alt=""></a>
          <nav id="menu" class="pull-right">
            <ul>
              <li><a href="./products.html">Coffee Maker</a>          
                <ul>
                  <li><a href="automaticstove.php">Automatic Coffee Maker</a></li>                  
                  <li><a href="stovetop.php">Stovetop Espresso Maker</a></li>
                  <li><a href="./products.html">French Press Plunger</a></li>                 
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
        

		 <?php
			  $con=mysql_connect("localhost","root","");
				  mysql_select_db("admin");
					?>
			<?php
			 $a=$_GET['Get_id'];
			  $result=mysql_query("SELECT * FROM posts WHERE post_id='$a'");
			 $row=mysql_fetch_array($result)
						?>

						
					
		<div  style="width:100%; height:300px;">	
		<div class="act"> 
		<div class="box12" style="width:15%; margin-left:30%; margin-top:3%; float:left; height:250px;">	
		
		<img src="images/<?php echo $row['post_image'];?>" style="width:100%; border:2px solid black; ">
			</div>

		<div class="box123" style="width:15%; margin-left:25%; margin-top:10%; float:left; height:250px;">
		 
		 <h5><?php echo $row['post_content'];?></h5>
	     <h5><?php echo 'Rs.'.$row['post_price'];?></h5>
				      <!-- <h5><?php echo $row['post_quantity'];?></h5> -->
				     <label>Quantity:</label>
			         <input type="text" name="span1" placeholder="1">
				   <input type="button" name="Add to Cart" value="Add to Cart" class="def"  style="width:100%; height:15%;margin-top:10%">
					<a href="index.php"><input type="button" name="Buy now" value="Buy now" class="def" style="width:100%; height:15%;margin-top:10%">
            </a>
					</div>
					
				</div>
				      
				</div>

			

<style type="text/css">
	.act:hover
	
{
	border:none;
	background-color: red;
	/*width: 100%;
	height: 500px;*/
}
.def:hover
{
background-color: #263238;
color: orange;
}

</style>
</div>
		
		<div class="information">
    <div class="container">
      <div class="infor-top">
        <div class="col-md-3 infor-left">
          <h3>Follow Us</h3>
          <ul>
            <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
            <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
            <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
          </ul>
        </div>
        <div class="col-md-3 infor-left">
          <h3>Information</h3>
          <ul>
            <li><a href="#"><p>About Us</p></a></li>
            <li><a href="contact.html"><p>Contact Us</p></a></li>
           
          </ul>
        </div>
        
        <div class="col-md-3 infor-left">
          <h3>Store Information</h3>
          <h4>The company name,
            <span>ShopNow,</span>
            Lpu Jalandhar.</h4>
          <h5>+8699558731</h5>  
          <p>Email:<a href="mailto:example@email.com">sravish900@gmail.com</a></p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--information-end-->
  <!--footer-starts-->
  <div class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="col-md-6 footer-left">
          <form>
            <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
            <input type="submit" value="Subscribe">
          </form>
        </div>
        <div class="col-md-6 footer-right">         
          <p>© 2016 Grocery Store. All Rights Reserved </p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
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
  <!--footer-end--> 
    </body>
</html>