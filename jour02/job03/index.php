<!DOCTYPE html>
<html>
<head>
	<title>Nombres de 0 à 100 avec style</title>
</head>
<body>
	<?php
		for ($i=0; $i<=100; $i++) {
			if ($i == 42) {
				echo "La Plateforme <br />";
			} else if ($i >= 0 && $i <= 20) {
				echo "<i>$i</i><br />";
			} else if ($i >= 25 && $i <= 50) {
				echo "<u>$i</u><br />";
			} else {
				echo "$i<br />";
			}
		}
	?>
</body>
</html>
