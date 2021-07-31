<?php
		//session_start();
		if(!isset($_COOKIE["loggeduser"])){
			header("Location: Login.php");
		}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?> </h1>
		<a href="Allstudents.php">All Students</a>
		<a href="Addstudent.php">Add Student</a>
		<a href="Editstudent.php">Edit Student</a>
		<a href="">Department</a>
	</body>
</html>