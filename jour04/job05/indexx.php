<!DOCTYPE html>
<html>
<head>
  <title>Formulaire </title>
</head>
<body>
  <form method="POST" action="">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Mot de passe:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Se connecter">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];

      if ($username === "John" && $password === "Rambo") {
        echo "C'est pas ma guerre";
      } else {
        echo "Votre pire cauchemar";
      }
    }
  ?>
</body>
</html>
