<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];

    if (!isset($_SESSION['prenoms'])) {
      $_SESSION['prenoms'] = array();
    }

    array_push($_SESSION['prenoms'], $prenom);
  }
}

if (isset($_GET['reset'])) {
  unset($_SESSION['prenoms']);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Liste des prénoms</title>
</head>
<body>
  <h1>Liste des prénoms</h1>

  <form method="POST">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>
    <button type="submit">Ajouter</button>
  </form>

  <h2>Prénoms enregistrés :</h2>
  <ul>
    <?php
    if (isset($_SESSION['prenoms'])) {
      foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>$prenom</li>";
      }
    }
    ?>
  </ul>

  <form method="GET">
    <button type="submit" name="reset" value="true">Réinitialiser</button>
  </form>
</body>
</html>
