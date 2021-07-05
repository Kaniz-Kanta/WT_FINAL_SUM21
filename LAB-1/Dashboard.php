<?php
session_start();
if(!isset($_SESSION["loggedUser"])){
	header("Location: LogIn.php");
}
?>
<html>
	<body>
			<table align="center">
				<tr>
					<td colspan="2" align="center"><h1> WELCOME <?php echo $_SESSION["loggedUser"];?> </h1></td>
				</tr>
				<tr>
					<td><a href="AllCouses.php">ALL Courses</a></td>
				</tr>
			</table>
	</body>
</html>