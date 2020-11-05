<?php include "auxiliar_functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calendar in PHP</title>
</head>
<body>
	<table border="1">
		<colgroup>
			<col span="7">
		</colgroup>		
		<tr>
		<th scope="col">S</th>
		<th scope="col">M</th>
		<th scope="col">T</th>
		<th scope="col">W</th>
		<th scope="col">T</th>
		<th scope="col">F</th>
		<th scope="col">S</th>
		</tr>

		<?php 
		$d = 1 - initial_day();
		$stop = false;

		while (!$stop) { 
			echo '<tr>';
				for ($i = 0; $i < 7; $i++, $d++) { 
				if ($d > 31) {
					$stop = true;
					break;
				}
				
				echo $d >= 1 ? "<td>$d</td>" : "<td></td>" ;
				}
			echo '</tr>';
		}
		?>
	</table>    
</body>
</html>