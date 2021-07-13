<?php
session_start();
if(!isset($_SESSION["loggedUser"])){
	header("Location: LogIn.php");
}
/*if(!isset($_COOKIE["loggeduser"])){
		header("Location: index.php");
	}*/
?>
<html>
	<body>
			<table align="center">
				<tr>
					<td colspan="2" align="center"><h1> WELCOME <?php echo $_SESSION["loggedUser"];?> </h1></td>
				</tr>
				<tr>
					<td>
						Bangla <br> English <br> Math
					</td>
				</tr>
			</table>
	</body>
</html>