
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>SHOPNOW</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../main.css" type="text/css" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="../js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="../js/simpleCart.min.js"> </script>
<link href="../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script> 
<!--dropdown-->
<script src="../js/jquery.easydropdown.js"></script>  
	</head>
   	
<body> 

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
 
    <div class="cart box_1">
            <a href="shoppingcart/products.php">
               <div class="total">
                <span class="simpleCart_total"></span></div>
                <img src="../images/cart-1.png" alt="" />
            </a>
            </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 
  <!--top-header-->
  <!--start-logo-->

  <!--start-logo-->
  <!--bottom-header-->
  <div class="header-bottom">
    <div class="container">
      <div class="header">
        <div class="col-md-9 header-left">
        <div class="top-nav">
          <ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
            <li class="grid"><a href="#">Categories</a>
              <div class="mepanel">
                <div class="row">
                  <div class="col1 me-one">
                    <h4>Kitchen</h4>
                    <ul>
                      <li><a href="login-registration-system/home.php?content=furveg">Fruit&Vegetable</a></li>
                      <li><a href="products.html">Biscuit&cookie</a></li>
                      <li><a href="products.html">Snack</a></li>
                      <li><a href="products.html">Tea&Coffee</a></li>
                    </ul>
                  </div>
                  <div class="col1 me-one">
                    <h4>Edible Oils & Ghee</h4>
                    <ul>
                      <li><a href="products.html">Refined Oil</a></li>
                      <li><a href="products.html">Soyabean Oil</a></li>
                    </ul> 
                  </div>
                  <div class="col1 me-one">
                    <h4>Cleaning</h4>
                    <ul>
                     <li><a href="#">Home Care</a></li>
                      <li><a href="#">Laundry</a></li>
                      <li><a href="#">Utensil Cleaner</a></li>
                        <li><a href="#">Shoe Care</a></li>
                    </ul>   
                  </div>

                  <div class="col1 me-one">
                    <h4>Bathroom</h4>
                    <ul>
                    <li><a href="#">Personal Care</a></li>
                     <li><a href="#">Hair Care</a></li>
                     <li><a href="#">Dental Care</a></li>
                     <li><a href="#">Face Care</a></li>
                    </ul>   
                  </div>
                  <div class="col1 me-one">
                    <h4>Bedroom</h4>
                    <ul>
                       <li><a href="#">Health &Wellness</a></li>
                       <li><a href="#">Baby &Childcare</a></li>
                       <li><a href="#">Toys</li>
                    </ul>   
                  </div>
                </div>
              </div>
            </li>
            <li class="grid"><a href="typo.html">About US</a>
            </li>
            <li class="grid"><a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-3 header-right"> 
        <div class="search-bar">
          <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
          <input type="submit" value="">
        </div>
      </div>
      <div class="clearfix"> </div>
      </div>
    </div>
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
  <!--footer-end--> 
    </body>
</html>