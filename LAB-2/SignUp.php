<?php
	include 'Controller/User_Controller.php';
?>


<html>
	<body>
		<form action="" method="post">
			<table align="center">
			    <tr>
					<td colspan="2" align="center"><h1> Sign Up </h1></td>
				</tr>
				<tr>
					<td colspan="2"><h5><?php echo $err_db; ?></h5></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="userName" type="text" value="<?php echo $userName;?>"><br>
					<span><?php echo $err_userName;?></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password" value="<?php echo $password;?>">
					<br><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text" value="<?php echo $email;?>">
					    <br><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				<td align="right">Phone Number</td>
				<td>:
					<input name="PhoneNumber" type="text" value="<?php echo $PhoneNumber;?>">
					<br>
					<span><?php echo $err_PhoneNumber;?></span>
				</td>
				</tr>
				<tr>
					<td align="right">Address</td>
					<td>:
					<input name="Address" type="text" value="<?php echo $Address;?>"><br>
					
					<span><?php echo $err_Address;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" name="Sign_Up" value="Register"></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>