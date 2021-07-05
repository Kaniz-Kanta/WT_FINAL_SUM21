<?php
	session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users= array("arifulIslam"=>"123456789","karimAhmed"=>"4567891011");
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="UserName Required";
		}
		elseif (strlen($_POST["uname"]) <6){
			$hasError = true;
			$err_uname = "UserName must be greater than 6 characters";
		}
		elseif (strpos($_POST["uname"]," ")){
			$hasError = true;
			$err_uname = "UserName can't take space!!!";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="Password Required!!";
		}
		elseif (strlen($_POST["pass"]) <8 ){
			$hasError = true;
			$err_pass = "Password must have atleast 8 characters!!";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		
		
		if(!$hasError){
			foreach($users as $u=>$p){
				if($uname==$u && $pass==$p){
					$_SESSION["loggedUser"]=$uname;
					header("Location: Dashboard.php");
				}
				else{
					echo "Invalid User!!";
				}
			}
		}
		
	}
	
?>
<html>
	<body>
		<form action="" method="post">
			<table align="center">
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" type="text" value="<?php echo $uname;?>"><br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" type="password" value="<?php echo $pass;?>">
					<br><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Log In"></td>
				</tr>
			</table>
		</form>
	</body>
</html>