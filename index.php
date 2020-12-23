<?php
echo "<table>";

	$arr = array (
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),
					array (rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50)),

			);
	
		for ($row = 0; $row < 10; $row++) {
			echo "<tr>";
			foreach($arr[$row] as $array1) {
				echo "<td>&nbsp$array1&nbsp</td>";
			}
			echo "</tr>";
		}
	
	echo "</table>";
?>

