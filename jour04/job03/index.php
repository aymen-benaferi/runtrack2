<!DOCTYPE html>
<html>
<head>
  <title>Formulaire </title>
</head>
<body>
  <form method="POST" action="">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom">
    <br>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom">
    <br>
    <input type="submit" value="Envoyer">
  </form>

  <?php
    $count = count($_POST);
    echo "Le nombre d'arguments POST envoyé est : " . $count;
  ?>
</body>
</html>
