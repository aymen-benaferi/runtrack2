<?php

$host = "localhost";
$dbname = "jour09";
$username = "root";
$password = "azerty";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DESCRIBE salles";

    $stmt = $pdo->query($query);
    

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    if (count($results) > 0) {
        foreach ($results as $row) {
            echo $row['Field'] . "<br>";
        }
    } else {
        echo "La table 'salles' ne contient aucune colonne.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
