<?php
$servername = "localhost";
$username = "root";
$password = "azerty";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS jour09";
if ($conn->query($sql) === TRUE) {
    echo "La base de données jour09 a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

$conn->select_db("jour09");


$sql = "CREATE TABLE IF NOT EXISTS etudiants (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "La table etudiants a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la table etudiants : " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS etage (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    numero INT(11),
    superficie INT(11)
)";
if ($conn->query($sql) === TRUE) {
    echo "La table etage a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la table etage : " . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS salles (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    id_etage INT(11),
    capacite INT(11)
)";
if ($conn->query($sql) === TRUE) {
    echo "La table salles a été créée avec succès.<br>";
} else {
    echo "Erreur lors de la création de la table salles : " . $conn->error;
}


$conn->close();
?>

