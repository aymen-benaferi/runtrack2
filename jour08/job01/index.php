<?php
  session_start();

  // Vérifier si la variable de session "nbvisites" existe
  if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
  }

  // Augmenter le compteur à chaque visite
  $_SESSION['nbvisites']++;

  // Réinitialiser le compteur si le bouton "reset" est cliqué
  if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Compteur de visites avec session</title>
</head>
<body>
  <h1>Compteur de visites</h1>
  <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

  <form method="POST" action="">
    <input type="submit" name="reset" value="Réinitialiser">
  </form>
</body>
</html>
