<!DOCTYPE html>
<html>
<head>
	<title>Nombres premiers</title>
</head>
<body>
	<?php
		
		function estPremier($nombre) {
			if ($nombre <= 1) {
				return false;
			}

			
			for ($i=2; $i<=$nombre/2; $i++) {
				if ($nombre % $i == 0) {
					return false;
				}
			}

			return true;
		}

		for ($i=2; $i<=1000; $i++) {
			if (estPremier($i)) {
				echo $i . "<br />";
			}
		}
	?>
</body>
</html>
