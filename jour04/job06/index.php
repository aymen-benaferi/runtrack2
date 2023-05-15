<!DOCTYPE html>
<html>
<head>
  <title>Formulaire </title>
</head>
<body>
  <form method="GET" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <input type="submit" value="Valider">
  </form>

  <?php
    if (isset($_GET["nombre"])) {
      $nombre = $_GET["nombre"];

      if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
          echo "Nombre pair";
        } else {
          echo "Nombre impair";
        }
      } else {
        echo "Veuillez entrer une valeur numérique valide";
      }
    }
  ?>
</body>
</html>
