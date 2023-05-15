<!DOCTYPE html>
<html>
<head>
    <title>Formulaire </title>
</head>
<body>
    <form method="GET" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br>
        
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="age">Âge :</label>
        <input type="text" name="age" id="age"><br>
        
        <label for="adresse">Adresse mail :</label>
        <input type="text" name="adresse" id="adresse"><br>

        <input type="submit" value="Envoyer">
    </form>
    
    <?php
        
        $nombreArguments = count($_GET);
    
        
        echo "Le nombre d'arguments GET envoyé est : " . $nombreArguments;
    ?>
</body>
</html>
