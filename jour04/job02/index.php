<!DOCTYPE html>
<html>
<head>
  <title>Formulaire </title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>
  <form method="GET" action="">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom">
    <br>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom">
    <br>
    <input type="submit" value="Envoyer">
  </form>

  <table>
    <tr>
      <th>Argument</th>
      <th>Valeur</th>
    </tr>
    <?php
      foreach ($_GET as $argument => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($argument) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
