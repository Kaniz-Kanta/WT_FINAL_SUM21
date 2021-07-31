<?php
	include 'models/db_config.php';
	
	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$password="";
	$err_password="";
	$err_db="";
	
	$hasError=false;
	
	
	if(isset($_POST["btn_login"])){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		elseif (is_numeric($_POST["name"]))
		{
			$hasError = true;
			$err_name = "Name can't be numeric!!";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["userName"])){
			$hasError=true;
			$err_userName="UserName Required";
		}
		elseif (!strlen($_POST["userName"]) >6){
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
					$hasError=true;
					$err_password="Password Required";
				}
			    elseif(!strlen($_POST["password"])>= 5) 
				 {
					 $hasError = true;
					 $err_password = "Password must have atleast 5 character";
				 }
				elseif(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?"))
				{
					$hasError = true;
					$err_password = "Password must have atleast one special character(# or ?)";
				}
				else
				{
					$password=$_POST["password"];
				}
				
		if(!$hasError)	
			{
				$rs = insertUser($name,$userName,$_POST["password"]);
				if($rs === true){
					header("Location: Dashboard.php");
				}
				$err_db = $rs;
			}
	}
	function insertUser($name,$userName,$password){
		$query = "insert into admin values ('$name','$userName','$password')";
		return execute ($query);
	}
	
?>