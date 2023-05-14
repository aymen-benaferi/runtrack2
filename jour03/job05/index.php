<?php
// Créer la variable $str et lui affecter la chaîne de caractères
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Créer le dictionnaire $dic avec des clés "voyelles" et "consonnes"
$dic = array("voyelles" => 0, "consonnes" => 0);

// Parcourir la chaîne et compter le nombre d'occurrences de consonnes et de voyelles
for ($i = 0; $i < strlen($str); $i++) {
  $char = strtolower($str[$i]); // Convertir le caractère en minuscule pour la comparaison
  if (preg_match("/[aeiouy]/i", $char)) { // Vérifier si le caractère est une voyelle
    $dic["voyelles"]++;
  } elseif (preg_match("/[a-z]/i", $char)) { // Vérifier si le caractère est une consonne
    $dic["consonnes"]++;
  }
}

// Afficher les résultats dans un tableau HTML
echo "<table><thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead><tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody></table>";
?>
