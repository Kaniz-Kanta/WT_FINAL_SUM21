<?php
	include 'Controller/Category_Controller.php';
	$id=$_GET["CategoryId"];
	$c= getCategoryById($id);
?>


<html>
	<body>
		<form action="" method="post">
			<table align="center">
			    <tr>
					<td colspan="2"><h1> Edit Category </h1></td>
				</tr>
				<tr>
					<td colspan="2"><h5><?php echo $err_db; ?></h5></td>
				</tr>
				<tr>
					<td align="right">Category name</td>
					<td>:<input name="CategoryName" type="text" value="<?php echo $c["CategoryName"];?>"><br>
					<span><?php echo $err_CategoryName;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td align="left"><input type="submit" name="bt_Edit" value="Edit"></td>
					
				</tr>
			</table>
		</form>
	</body>
</html>