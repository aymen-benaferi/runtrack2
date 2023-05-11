<!DOCTYPE html>
<html>
<head>
	<title>Nombres de 0 à 1337 (sans certains nombres)</title>
</head>
<body>
	<?php
		for ($i=0; $i<=1337; $i++) {
			if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) {
				echo "$i<br />";
			}
		}
	?>
</body>
</html>
