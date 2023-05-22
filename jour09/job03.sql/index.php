<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "azerty";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Requête SQL pour sélectionner tous les champs de la table "etudiants"
$sql = "SELECT * FROM etudiants";

// Exécuter la requête
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Ouvrir le fichier "job03.sql" en mode écriture
    $file = fopen("job03.sql", "w");

    // Écrire la requête dans le fichier
    fwrite($file, $sql);

    // Fermer le fichier
    fclose($file);

    echo "La requête a été écrite dans le fichier 'job03.sql'.\n";
} else {
    echo "Aucun résultat trouvé pour la requête.\n";
}

// Fermer la connexion à la base de données
$conn->close();

?>
