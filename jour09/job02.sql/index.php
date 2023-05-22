<?php

$servername = "localhost";
$username = "root";
$password = "azerty";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}


$sqlCreateEtudiants = "CREATE TABLE IF NOT EXISTS etudiants (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255) NOT NULL,
    nom VARCHAR(255) NOT NULL,
    naissance DATE,
    sexe VARCHAR(10),
    email VARCHAR(255)
)";

if ($conn->query($sqlCreateEtudiants) === TRUE) {
    echo "La table 'etudiants' a été créée ou existe déjà.\n";
} else {
    echo "Erreur lors de la création de la table 'etudiants': " . $conn->error;
}

$sqlInsertEtudiants = "INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
    ('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
    ('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
    ('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
    ('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
    ('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
    ('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
    ('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io')
";

if ($conn->query($sqlInsertEtudiants) === TRUE) {
    echo "Les étudiants ont été ajoutés avec succès.\n";
} else {
    echo "Erreur lors de l'ajout des étudiants : " . $conn->error;
}

$sqlCreateEtages = "CREATE TABLE IF NOT EXISTS etages (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    numero INT(11),
    superficie INT(11)
)";

if ($conn->query($sqlCreateEtages) === TRUE) {
    echo "La table 'etages' a été créée ou existe déjà.\n";
} else {
    echo "Erreur lors de la création de la table 'etages': " . $conn->error;
}


$sqlInsertEtages = "INSERT INTO etages (id, nom, numero, superficie) VALUES
    (1, 'RDC', 0, 500),
    (2, 'R+1', 1, 500)
";

if ($conn->query($sqlInsertEtages) === TRUE) {
    echo "Les étages ont été ajoutés avec succès.\n";
} else {
    echo "Erreur lors de l'ajout des étages : " . $conn->error;
}

$sqlCreateSalles = "CREATE TABLE IF NOT EXISTS salles (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    etage INT(11),
    capacite INT(11)
)";

if ($conn->query($sqlCreateSalles) === TRUE) {
    echo "La table 'salles' a été créée ou existe déjà.\n";
} else {
    echo "Erreur lors de la création de la table 'salles': " . $conn->error;
}


$sqlInsertSalles = "INSERT INTO salles (id, nom, etage, capacite) VALUES
    (1, 'Lounge', 1, 100),
    (2, 'Studio Son', 1, 5),
    (3, 'Broadcasting', 2, 50),
    (4, 'Bocal Peda', 2, 4),
    (5, 'Coworking', 2, 80),
    (6, 'Studio Video', 2, 5)
";

if ($conn->query($sqlInsertSalles) === TRUE) {
    echo "Les salles ont été ajoutées avec succès.\n";
} else {
    echo "Erreur lors de l'ajout des salles : " . $conn->error;
}

$conn->close();

?>
