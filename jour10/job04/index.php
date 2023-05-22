<?php

$host = "localhost";
$dbname = "jour09";
$username = "root";
$password = "azerty";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $query = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";


    $stmt = $pdo->query($query);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (count($results) > 0) {

        echo "<table>";

 
        echo "<thead><tr>";
        foreach ($results[0] as $field => $value) {
            echo "<th>$field</th>";
        }
        echo "</tr></thead>";

        echo "<tbody>";
        foreach ($results as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
