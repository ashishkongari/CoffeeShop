<?php 
error_reporting(0);
session_start();


if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {

?>

<html>
	<head>
		<title>Admin Panel</title>
	
	<link rel="stylesheet" href="admin_style.css" />
	</head>
	
<body>




<div id="welcome"> 

<div id="sidebar">
<ul>
Welcome:<li><h2><?php echo $_SESSION['user_name']; ?></h2></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="view_posts.php">View Posts</a></li>
<li><a href="../admin/index.php?insert=insert">Insert New Post</a></li>



</div>


</div>
<?php 
	
	if(isset($_GET['insert'])){
	
	include("insert_post.php");
	
	}


?>

</body>
</html>

<?php } ?>