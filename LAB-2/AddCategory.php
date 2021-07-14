<?php
	include 'Controller/Category_Controller.php';
?>


<html>
	<body>
		<form action="" method="post">
			<table align="center">
			    <tr>
					<td colspan="2"><h1> Add Category </h1></td>
				</tr>
				<tr>
					<td colspan="2"><h5><?php echo $err_db; ?></h5></td>
				</tr>
				<tr>
					<td align="right">Category name</td>
					<td>:<input name="CategoryName" type="text" value="<?php echo $CategoryName;?>"><br>
					<span><?php echo $err_CategoryName;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" name="bt_Add" value="Add Category"></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>