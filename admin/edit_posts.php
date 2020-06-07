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

<h2><a href="#">Logout</a></h2>
<h2><a href="view_posts.php">View Item</a></h2>
<h2><a href="#">Insert New Item</a></h2>


</div>
<?php 
error_reporting(0);

include("includes/connect.php");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "select * from posts where post_id='$edit_id'";
	
	$run_edit = mysql_query($edit_query); 
	
	while ($edit_row=mysql_fetch_array($run_edit)){
	
	
		$post_id = $edit_row['post_id'];
		$post_title = $edit_row['post_title'];
		$post_image = $edit_row['post_image'];
		$post_content = $edit_row['post_content'];
		$post_categories=$edit_row['post_subcategories'];
		$post_subcategories=$edit_row['post_categories'];
		$post_price = $edit_row['post_price'];



	}
}
?>

<form method="post" action="edit_posts.php?edit_form=<?php echo $edit_id; ?>" enctype="multipart/form-data">
	
	<table width="600" bgcolor="orange" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="yellow" colspan="6"><h1>Edit The Post Here</h1></td>
		</tr>
		
		<tr>
			<td align="right">Item Name:</td>
			<td><input type="text" name="title" size="30" value="<?php echo $post_title; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Item Price:</td>
			<td><input type="text" name="price" size="30"value="<?php echo $post_price; ?>"></td>
		</tr>
		
		<tr>
			<td align="right">Item Image:</td>
			<td>
			<input type="file" name="image"> 
			<img src="../images/<?php echo $post_image;?>" width="100" height="100"></td>
		</tr>
		
		<tr>
			<td align="right">Post Content:</td>
			<td><textarea name="content" cols="30" rows="15"><?php echo $post_content; ?></textarea></td>
		</tr>

		<tr>
			<td align="right">Item categories:</td>
			<td><select name="categories" required>
					<option value="">Choose categories</option>
					<option value="kitchen">coffeemaker</option>
					<option value="Meat">mugs_cups</option>
					<option value="cleaning">coffeepowder</option>
				</select><?php echo $post_categories; ?></td>
		</tr>

		<tr>
			<td align="right">Item sub_categories:</td>
			<td><select name="subcategories" required>

					<option value="">Choose subcategories</option>
					<option value="automatic_coffeemaker">automatic_coffeemaker</option>
					<option value="stovetop_espressomaker">stovetop_espressomaker</option>
					<option value="frenchpress_plunger">frenchpress_plunger</option>
					<option value="cups_saucers">cups_saucers</option>
					<option value="cool_mugs">cool_mugs</option>
					<option value="sippers">sippers</option>
					<option value="coffee_on_the_go">coffee_on_the_go</option>
						<option value="single_origin_international">single_origin_international</option>
						<option value="single_origin_india">single_origin_india</option>
						</select><?php echo $post_subcategories; ?></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6"><input type="submit" name="update" value="Update Now"></td>
		</tr>		
	</table>

</form>
</body>
</html>
<?php
	
	if(isset($_POST['update'])){
	
	$update_id = $_GET['edit_form'];
	  $post_date1 = date('m-d-y');
	  $post_content1 = $_POST['content'];
	  	$post_categories1=$_POST['post_subcategories'];
		$post_subcategories1=$_POST['post_categories'];
	  $post_image1= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	  $post_price1 = $_POST['price'];
	  $post_name1 = $_POST['name'];
	
	if($post_name1=='' or $post_price1=='' or $post_content1=='' or $post_categories=="" or $post_subcategories=="" or$post_image1==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	 move_uploaded_file($image_tmp,"../images/$post_image1");
		
		$update_query = "update posts set post_name='$post_name1',post_date='$post_date1',post_image='$post_image1',post_price='$post_price1',post_content='$post_content1',post_categories='$post_categories1',post_subcategories='$post_subcategories1' where post_id='$update_id'";
		
		if(mysql_query($update_query)){
		
		echo "<script>alert('Post has been updated')</script>";
		
		echo "<script>window.open('view_posts.php','_self')</script>";
		
		}
	
	}
	}



?>