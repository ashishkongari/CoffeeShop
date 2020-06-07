<?php
require ("CoffeeEntity.php");
class CoffeeModel
{
	function GetCoffeeTypes()
	{
		require 'Credentials.php';
		mysql_connect($host,$user,$passwd) or die(mysql_error());
		mysql_select_db($database);
		$result=mysql_query("SELECT DISTINCT type FROM coffe1") or die(mysql_error());
		$types=array();
		while($row=mysql_fetch_array($result))
		{
			array_push($types,$row[0]);
		}
		mysql_close();
		return $types;
		
	}
	function GetCoffeeByType($type) 
	{
		require 'Credentials.php';
		mysql_connect($host,$user,$passwd) or die(mysql_error());
		mysql_select_db($database);
		if($type!="%"){
		$query="SELECT * FROM coffe1 WHERE type LIKE '%".$type."%' ";			
		}else{
		$query="SELECT * FROM coffe1";			
		}
		$result=mysql_query($query) or die(mysql_error());
		$coffeeArray=array();
		
		while($row=mysql_fetch_array($result))
		{
			$id=$row['id'];
			$name=$row[1];
			$type=$row[2];
			$price=$row[3];
			$roast=$row[4];
			$country=$row[5];
			$image=$row[6];
			$review=$row[7];
			$coffee="$id,$name,$type,$price,$roast,$country,$image,$review";
			array_push($coffeeArray,$coffee);
		}
		mysql_close();
		return $coffeeArray;
	}
	function GetCoffeeById($id)
	{
		require 'Credentials.php';
		mysql_connect($host,$user,$passwd) or die(mysql_error());
		mysql_select_db($database);
		
		$query="SELECT * FROM coffe1 WHERE id=$id";
		$result=mysql_query($query) or die(mysql_error());
		
		while($row=mysql_fetch_array($result))
		{
			$id=$row['id'];
			$name=$row[1];
			$type=$row[2];
			$price=$row[3];
			$roast=$row[4];
			$country=$row[5];
			$image=$row[6];
			$review=$row[7];
			$coffee="$id,$name,$type,$price,$roast,$country,$image,$review";
		}
		mysql_close();
		return $coffee;
	}
	function InsertCoffee($coffee)
	{
		$query=sprintf("INSERT INTO coffe1 (name,type,price,roast,country,image,review) VALUES ('%s','%s','%s','%s','%s','%s','%s')",
		mysql_real_escape_string($coffee->name),
		mysql_real_escape_string($coffee->type),
		mysql_real_escape_string($coffee->price),
		mysql_real_escape_string($coffee->roast),
		mysql_real_escape_string($coffee->country),
		mysql_real_escape_string("coffewebsites/images/".$coffee->image),
		mysql_real_escape_string($coffee->review));
		$this->PerformQuery($query);
	}
	function UpdateCoffee($id,  $coffee)
	{
		$query=sprintf("UPDATE coffe1 SET name='%s' , type='%s' , price='%s' , roast='%s' , country='%s' , image='%s', review='%s'
		WHERE is=$id",
		mysql_real_escape_string($coffee->name),
		mysql_real_escape_string($coffee->type),
		mysql_real_escape_string($coffee->price),
		mysql_real_escape_string($coffee->roast),
		mysql_real_escape_string($coffee->country),
		mysql_real_escape_string("coffewebsites/images/".$coffee->image),
		mysql_real_escape_string($coffee->review));
		$this->PerformQuery($query);
	}
	function DeleteCoffee($id)
	{
		$query="DELETE  FROM coffe1 WHERE id=$id";
		$this->PerformQuery($query);
	}
	function PerformQuery($query)
	{
		require 'Credentials.php';
		mysql_connect($host,$user,$passwd) or die(mysql_error());
		mysql_select_db($database);
		
		mysql_query($query) or die(mysql_error());
		mysql_close();
	}
} 
?>