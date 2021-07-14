<?php
	include 'Controller/Category_Controller.php';
	$category= getAllCategory();
?>


<html>
	<body>
	<h1 align="center"> All Categories </h1>
			<table align="center">
			    <thead>
					<th>Sl#</th>
					<th>Category Name</th>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<?php
						$i=1;
						foreach($category as $c){
							$id= $c["CategoryId"];
							echo "<tr>";
								echo "<td>$i</td>";
								echo "<td>".$c["CategoryName"]."</td>";
								echo '<td><a href="EditCategory.php?CategoryId='.$id.'">Edit</a></td>';
							echo "</tr>";
							$i++;
						}
					?>
				</tbody>
			</table>
	</body>
</html>