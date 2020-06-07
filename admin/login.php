<?php 
error_reporting(0);
session_start();

?>

<html>
	<head>
		<title>Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"type="text/css" href="admin_style.css">
</head>
<body>
	
	<div id="login-form">
	<form method="post" action="login.php">
	   <table width="600" border="0" align="center">
		
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="user_name" required/></td>
			</tr>
			
			<tr>
				<td align="right">Password:</td>
				<td><input type="password" name="user_pass" required/></td>
			</tr>
			
			<tr>
				<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
    </div>
	</body>
</html>
	
<?php 
include("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt = md5($user_password);

	$admin_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

	$run = mysql_query($admin_query); 
	
	if(mysql_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>