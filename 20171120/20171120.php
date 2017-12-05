<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$data=array(
	    array("Volvo",22,18),
	    array("BMW",15,13),
	    array("Saab",5,2),
	    array("Land Rover",17,15)
		);
		echo "<table border=1>";
			echo"<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>";		
			for ($i=0; $i < 4 ; $i++) { 
				echo "<tr>";
				for($j=0; $j < 3;$j++) {
					$value = $data[$i][$j];
					echo "<td>
					 	  $value
						  </td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	?>

	<?php
		$data=array(
	    array("Volvo",22,18),
	    array("BMW",15,13),
	    array("Saab",5,2),
	    array("Land Rover",17,15)
		);
		echo "<table border=1>";
			echo"<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>";		
			foreach ($data as $value1) {
				echo "<tr>";
				foreach ($value1 as $value2) {
					echo "<td>
						  $value2
						  </td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	?>

	<?php
		$data=array(
	    array("Volvo",22,18),
	    array("BMW",15,13),
	    array("Saab",5,2),
	    array("Land Rover",17,15)
		);
		function trtd($x){
			echo "<tr>";
			echo "<td>$x[0]</td>";
			echo "<td>$x[1]</td>";
			echo "<td>$x[2]</td>";
			echo "</tr>";
		}
	?>	
		<table border=1>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
		<?php
			$trtdData = array_map("trtd", $data);
			$result=join("",$trtdData);
			echo $result;
		?>
		</table>

</body>
</html>
