<?php
session_start();
include_once 'dbconnect.php';
include '../includes/functions.php';
if(isset($_SESSION['user'])!="")
{
 header("Location: ../index1.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $upass = mysqli_real_escape_string($con,$_POST['pass']);
 $res=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];

  header("Location: ../index1.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }

 if(isset($_SESSION['user'])) {
 	$u_id = $_SESSION['user'];
 	$que = "Select * from cart where user_id = $u_id order by cart_id desc LIMIT 1";
 	$res=mysqli_query($con,$que);
 	$row1=mysqli_fetch_array($res);
 	$pid = $row1['product_id'];
 	$q = $row1['quantity'];
 	addtocart($pid,$q);
 }
 
}
?>		
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up </a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>