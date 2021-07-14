<?php
	include 'Controller/User_Controller.php';
?>


<html>
	<body>
		<form action="" method="post">
			<table align="center">
			    <tr>
					<td colspan="2" align="center"><h1> Log In </h1></td>
				</tr>
				<tr>
					<td colspan="2"><h5><?php echo $err_db; ?></h5></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text" value="<?php echo $email;?>">
					    <br><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="pass" type="password" value="<?php echo $password;?>">
					<br><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" name="Log_In" value="Log In"></td>	
				</tr>
				<tr>
					<td></td>
					<td align="left"><a href="SignUp.php">Not registared yet?? Sign Up</a></td>	
				</tr>
			</table>
		</form>
	</body>
</html>