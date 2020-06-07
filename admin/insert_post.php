<?php 
error_reporting(0);
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>


<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".country").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;

$.ajax
({
type: "POST",
url: "ajax_city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
} 
});

});

});
</script>

<html>
	<head>
		<title>inserting new posts</title>
	</head>
	
<body>
<form method="post" action="insert_post.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="center" bgcolor="white" colspan="6"><h1>Insert New Post Here</h1></td>
		</tr>
		
		<tr>

			<td align="right">Post categories:</td>
			<!--<td><input type="text" name="categories" size="30"></td>-->
			<td>
				<select name="categories" required>
					<option value="">Choose categories</option>
					<option value="coffeemaker">coffeemaker</option>
					<option value="mugs_cups">mugs_cups</option>
					<option value="coffeepowder">coffeepowder</option>
				</select>
			</td>
		</tr>

          <tr>
			<td align="right">Post subcategories:</td>
			<td>
			<select name="subcategories" required>

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
						</select>
						</td>
						</tr>			
		
		<tr>
			<td align="right">Post names:</td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td align="right">Post price:</td>
			<td><input type="text" name="price"></td>
		</tr>
		
		<tr>
			<td align="right">Post Image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		
		<tr>
			<td align="right">Post Comment:</td>
			<td><textarea name="content" cols="30" rows="15"></textarea></td>
		</tr>
		
		<tr>
			<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>

	
	</table>
</form>
</body>
</html>
<?php 
include("includes/connect.php"); 

if(isset($_POST['submit'])){

	 
	 
	  $post_date = date('m-d-y');
	   $post_image= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	  $post_content = $_POST['content'];
	  $post_categories = $_POST['categories'];
	    $post_subcategories = $_POST['subcategories'];
	    $post_price=$_POST['price'];
	     $post_name=$_POST['name'];
	    
	   
	   
	   
	 
	
	if($post_content=='' or $post_categories=='' or $post_subcategories=='' or  $post_price=='' or $post_name=='' or $post_image=='' ){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {
	
	 move_uploaded_file($image_tmp,"../images/$post_image");
	
	  $insert_query = "insert into posts (post_date,post_image,post_content,post_categories,post_subcategories,post_price,post_name) values ('$post_date','$post_image','$post_content','$post_categories','$post_subcategories','$post_price','$post_name')";
	
	if(mysql_query($insert_query)){
	
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('view_posts.php','_self')</script>";
	
	}


}


}

?>

<?php } ?>