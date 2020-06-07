<?php
require ("CoffeeModel.php");
class CoffeeController
{
	function CreateCoffeeDropdownList()
	{
		$coffeeModel=new CoffeeModel();
		$result="<form action='' method='post' width='200px'>
		Please Select a type:
		<select name='type'>
		<option value='%'>All</option>
		".$this->CreateOptionValues($coffeeModel->GetCoffeeTypes()). 
		"</select>
		<input type='submit' name='types' value='search'/>
		</form>";
		
		return $result;
	} 
	function CreateOptionValues(array $valueArray)
	{
		$result="";
		foreach($valueArray as $value)
		{
			$result=$result   ."<option value='$value'>$value</option>";
		}
		return $result;
	}
	function CreateCoffeeTables($types)
	{
		$coffeeModel=new CoffeeModel();
		$coffeeArray=$coffeeModel->GetCoffeeByType($types);
		
		$result="";
		for($i=0; $i<count($coffeeArray); $i++){
			$str=$coffeeArray[$i];
			$array1=explode(",",$str);
			for($x=0; $x<1; $x++){
			$result=$result."<table class='coffeeTable'>
			<tr> 
			<th rowspan='6' width='150px'><img runat='server' src='$array1[6]'/></th>
			<th width='75px'>Name:</th>
			<td>$array1[1]</td>
			</tr>
			
			<tr>
			<th>Type:</th>
			<td>$array1[2]</td>
			</tr>
			
			<tr>
			<th>Price:</th>
			<td>$array1[3]</td>
			</tr>
			
			<tr>
			<th>Roast:</th>
			<td>$array1[4]</td>
			</tr>
			
			<tr>
			<th>Origin:</th>
			<td>$array1[5]</td>
			</tr>
			<tr>
			<th>Overview:</th>
			<td>$array1[7]</td>
			</tr>
			";
			
			}
			
		}
		$result="<table>".$result."</table>";
		return $result;
	}
	function InsertCoffee()
	{
		
	}
	function UpdateCoffee($id)
	{
		
	}
	function DeleteCoffee($id)
	{
		
	}
	function GetCoffeeById($id)
	{
		
	}
	function GetCoffeeByType($type)
	{
		
	}
	function GetCoffeeTypes()
	{
		
	}
	
}

?>