<?php 
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
<div id="header">
<a href="index.php">
<h1>Welcome to the Admin Panel</h1></a>

</div> 

<div id="sidebar">
<h2><a href="logout.php">Logout</a></h2>
<h2><a href="view_posts.php">View Posts</a></h2>
<h2><a href="index.php?insert=insert">Insert New Item</a></h2>

</div>

<div class="posts">
<table width="1000" border="2" align="center" bgcolor="white"> 
	<tr>
		<td colspan="10" align="center" bgcolor="white"><h1>View All Items</h1></td>
	</tr>
	
	<tr bgcolor="white">
		<th>Item id</th>
		<th>Item Date</th>
		<th>Item image:</th>
		<th>Item content:</th>
		<th>Item categories</th>
		<th>Item subcategories</th>
		<th>Item price</th>
		<th>Item name</th>
		<th>Delete Item</th>
		<th>Edit Item</th>
	</tr>
<?php 
include("includes/connect.php");

$query = "select * from posts"; 

$run = mysql_query($query);

while($row=mysql_fetch_array($run)){

	$post_id = $row['post_id'];
	$post_date = $row['post_date'];
	$post_image = $row['post_image'];
	$post_content= substr($row['post_content'],0,100);
	$post_categories = $row['post_categories'];
	$post_subcategories = $row['post_subcategories'];
	$post_price = $row['post_price'];
	$post_name = $row['post_name'];
?>
<tr align="center">
		<td><?php echo $post_id; ?></td>
		<td><?php echo $post_date; ?></td>
		<td><img src="../images/<?php echo $post_image; ?>" width="100" height="100"></td>
		<td><?php echo $post_content; ?></td>
		<td><?php echo $post_categories; ?></td>
		<td><?php echo $post_subcategories; ?></td>
		<td><?php echo $post_price; ?></td>
		<td><?php echo $post_name; ?></td>
		<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
		<td><a href="edit_posts.php?edit=<?php echo $post_id; ?>">Edit</a></td>
	</tr>
<?php } ?>

</table>

</div>
</body>
</html>

<?php } ?>