
<div class="active" style="width:100%; height:auto; border:2px solid white;">
  <?php
  $con=mysql_connect("localhost","root","");
  mysql_select_db("admin");
?>
<?php
    $result=mysql_query("SELECT * FROM posts WHERE post_categories='coffeepowder' and  post_subcategories='coffee_on_the_go'");
    while ($row=mysql_fetch_array($result)) {
?>
  <div class="active1" style="width:20%; margin-left:3%; margin-top:10px; float:left; height:250px; border:2px solid white;">
  <div class="ac1">
<a href="view1.php?Get_id=<?php echo $row['post_id'];?>">  

   <img src="images/<?php echo $row['post_image'];?>" style="width:100%;">
</a>      
<div class="ac">
	<h5 style="margin-left:20%; margin-top:4%"><?php echo $row['post_name'];?></h5>
      <h5 style="margin-left:20%; margin-top:2%"><?php echo $row['post_content'];?></h5>
      <h5 style="margin-left:22%; margin-top:-4%"><?php echo $x='Rs.'.$row['post_price'];?></h5>
      <!-- <h5><?php echo $row['post_quantity'];?></h5> -->
     <!--  <select name="Quantity" required style="margin-left:15%; margin-top:-4%">
        <option>1kg</option>
        <option>5oog</option>
        <option>1.5kg</option>
        <option>2kg</option>
         <option>2.5kg</option>
         <option>3kg</option>
         <option>3.5kg</option>
          <option>4.5kg</option>
           <option>5kg</option>

            </select>-->
            </div>

        <style type="text/css">
  .ac:hover
  
{
  border:none;
  background-color: #D32F2F;
  color: #000000;
  width: 100%;

  /*width: 100%;
  height: 500px;*/
}
.ac1:hover
  
{
 
  background-color: #EEEEEE;
  border: 1px solid #90A4AE;
  display: block;
}
</style>
  </div>
  </div>
     
<?php
}
?>


</div>