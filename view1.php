<?php
  include "includes/db.php" ;
  include "includes/functions.php";
  
  if(isset($_REQUEST['command'])) {
  if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    $pid=$_REQUEST['productid'];
    $q=$_REQUEST['quan'];
    addtocart($pid,$q);
    header("location:shoppingcart.php");
    exit();
  }
  }
?>


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
   <script language="javascript">
  function addtocart(pid){
    document.form1.productid.value=pid;
    document.form1.command.value='add';
    document.form1.submit();
  }
</script>
  </head>
    <body>
<form name="form1" id="form1">
  <input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>

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
              <li><a href="shoppingcart.php">Your Cart</a></li>
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
                <h1></h1>
                <p><span></span></p>
                <p><span></span></p>
              </div>
            </li>
          </ul>
        </div>      
      </section>



   	


	

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
		
		<img src="images/<?php echo $row['post_image'];?>" style="width:100%;margin-top:50%; margin-left:-50%">
			</div>

		<div class="box123" style="width:25%; margin-left:30%; margin-top:10%; float:left; height:250px;">
		 <h4 style="margin-left:-60%;margin-top:-5%; color:brown">Name</h4>
		 <h5 style="margin-top:-20%;"><?php echo $row['post_name'];?></h5>
     <h4 style="margin-left:-60%;margin-top:10%; color:brown">Price</h4>
	     <h5 style="margin-top:-15%"><?php echo 'Rs.'.$row['post_price'];?></h5>
				      <!-- <h5><?php echo $row['post_quantity'];?></h5> -->
				     <label>Quantity:</label>
			         <input type="text" name="quan" form="form1" placeholder="1">
                <input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['post_id']?>)" />
				  <!--  <input type="button" name="Add to Cart" value="Add to Cart" class="def"  style="width:100%; height:15%;margin-top:10%"> -->
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
.box12:hover
{
border: 2px solid black;
color: orange;
}

</style>
</div>
		
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
            <p></p>
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



 
    </body>
</html>
