<?php
	include 'Model/DB_Config.php';



	$CategoryName="";
	$err_CategoryName="";
	$err_db="";
	
	
	$hasError=false;
	
	
	if(isset($_POST["bt_Add"])){
		
		
		if(empty($_POST["CategoryName"])){
			$hasError=true;
			$err_CategoryName="CategoryName Required";
		}
		elseif (strlen($_POST["CategoryName"]) <5){
			$hasError = true;
			$err_CategoryName = "CategoryName must be greater than 6 characters";
		}
		elseif (strpos($_POST["CategoryName"]," ")){
			$hasError = true;
			$err_CategoryName = "CategoryName can't take space!!!";
		}
		else
		{
			$CategoryName = $_POST["CategoryName"];
		}
		
		if(!$hasError){
			$rs= insertCategory($CategoryName);
			if($rs === true)
			{
				header("Location: AllCategory.php");
			}
			$err_db= $rs;
		}
		
	}
	
	else if(isset($_POST["bt_Edit"])){
		
		
		if(empty($_POST["CategoryName"])){
			$hasError=true;
			$err_CategoryName="CategoryName Required";
		}
		elseif (strlen($_POST["CategoryName"]) <5){
			$hasError = true;
			$err_CategoryName = "CategoryName must be greater than 6 characters";
		}
		elseif (strpos($_POST["CategoryName"]," ")){
			$hasError = true;
			$err_CategoryName = "CategoryName can't take space!!!";
		}
		else
		{
			$CategoryName = $_POST["CategoryName"];
		}
		
		if(!$hasError){
			$rs= updateCategory($CategoryName,$id);
			if($rs === true)
			{
				header("Location: AllCategory.php");
			}
			$err_db= $rs;
		}
		
	}
	function insertCategory($CategoryName)
	{
		$query= "insert into categories values(Null,'$CategoryName')";
		return execute($query);
	}
	
	function getAllCategories()
	{
		$query= "select * from categories";
		$rs= get($query);
		return $rs;
	}
	
	function getCategoriesById($id)
	{
		$query= "select * from categories where CategoryId='$id'";
		$rs= get($query);
		return $rs[0];
	}
	
	function updateCategory($CategoryName,$id)
	{
		$query= "update categories set CategoryName='$CategoryName' where CategoryId='$id'";
		return execute($query);
	}

?>