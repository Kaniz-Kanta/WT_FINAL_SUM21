<?php
	include 'Model/DB_Config.php';

	$userName="";
	$err_userName="";
	$password="";
	$err_password="";
	$email="";
	$err_email="";
	$PhoneNumber="";
	$err_PhoneNumber="";
	$Address="";
	$err_Address="";
	$err_db="";
	
	
	$hasError=false;
	
	
	if(isset($_POST["Sign_Up"])){
		
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (strlen($_POST["userName"]) <6){
			$hasError = true;
			$err_userName = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["userName"]," ")){
			$hasError = true;
			$err_userName = "UserName can't take space!!!";
		}
		else
		{
			$userName = $_POST["userName"];
		}
		if(empty($_POST["password"]))
		{
		$hasError = true;
		$err_password = "Password required";
		}

		else if((strlen($_POST["password"])< 8))
		{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
		}
		if((strlen($_POST["password"])>= 8))
		{
			if(!strpos($_POST["password"],'#') || !strpos($_POST["password"],'?'))
			{
			$hasError = true;
			$err_password = "Password requires minimum 1 '#' and '?'";
			}
			else
			{
			$password = $_POST["password"];
			}
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		elseif(strpos($_POST["email"],"@.")){
			$email = $_POST["email"];	
		}
		else{
			$hasError = true;
			$err_email = "please use an @. !!!";
		}
		
		if(empty($_POST["PhoneNumber"])){
			$hasError = true;
			$err_PhoneNumber = "PhoneNumber Required!!!";
		}
		elseif(is_numeric($_POST["PhoneNumber"])){
			$PhoneNumber = $_POST["PhoneNumber"];
		}
		else{
			$hasError = true;
			$err_PhoneNumber = "Please enter a numeric value!!!";
		}
		if(empty($_POST["Address"])){
			$hasError = true;
			$err_Address= "Address Required!!";
		}
		else{
			$Address = $_POST["Address"];
		}
		
		
		if(!$hasError){
			$rs= insertUser($userName,$email,$PhoneNumber,$password,$Address);
			if($rs === true)
			{
				header("Location: LogIn.php");
			}
			$err_db= "Email or Password Invalid";
		}
		
	}
	
	else if(isset($_POST["Log_In"])){
		
		
		if(empty($_POST["password"]))
		{
		$hasError = true;
		$err_password = "Password required";
		}

		else if((strlen($_POST["password"])< 8))
		{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
		}
		if((strlen($_POST["password"])>= 8))
		{
			if(!strpos($_POST["password"],'#') || !strpos($_POST["password"],'?'))
			{
			$hasError = true;
			$err_password = "Password requires minimum 1 '#' and '?'";
			}
			else
			{
			$password = $_POST["password"];
			}
		}
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email = "Email Required!!!";
		}
		elseif(strpos($_POST["email"],"@.")){
			$email = $_POST["email"];	
		}
		else{
			$hasError = true;
			$err_email = "please use an @. !!!";
		}
	
		
		if(!$hasError){
			$rs= authenticateUser($email,$password);
			if($rs === true)
			{
				header("Location: Dashboard.php");
			}
			$err_db= $rs;
		}
		
	}
	
	function insertUser($userName,$email,$PhoneNumber,$password,$Address)
	{
		$query= "insert into users values(Null,'$userName','$email','$PhoneNumber','$password','$Address')";
		return execute($query);
	}
	
	function authenticateUser($email,$password)
	{
		$query= "select * from users where Email= '$email' and Password= '$password'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	
	function checkUsername($userName)
	{
		$query= "select UserName from users where UserName= '$userName'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}

?>