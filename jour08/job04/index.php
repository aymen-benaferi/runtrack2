<?php
if ($_SERVER['REQUEST_METODH'] === 'POST') {
  if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    setcookie("prenom", $prenom, time() + (86400 * 30));
    header("Location: index.php"); 
    exit();
  }
}

if (isset($_COOKIE['prenom'])) {
  $prenom = $_COOKIE['prenom'];
  $isConnected = true;
} else {
  $isConnected = false;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de connexion</title>
</head>
<body>
  <?php if ($isConnected): ?>
    <h1>Bonjour <?php echo $prenom; ?> !</h1>
    <form method="GET">
      <button type="submit" name="deco" value="true">Déconnexion</button>
    </form>
  <?php else: ?>
    <h1>Formulaire de connexion</h1>
    <form method="POST">
      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required>
      <button type="submit" name="connexion">Connexion</button>
    </form>
  <?php endif; ?>

  <?php
  if (isset($_GET['deco'])) {
    setcookie("prenom", "", time() - 3600); // Supprime le cookie en définissant une date d'expiration passée
    header("Location: index.php"); // Redirection pour actualiser la page
    exit();
  }
  ?>
</body>
</html>
