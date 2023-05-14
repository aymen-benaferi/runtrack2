<?php
// Créer la variable $str et lui affecter la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définir un tableau de voyelles
$vowels = array("a", "e", "i", "o", "u", "y");

// Parcourir la chaîne et afficher uniquement les voyelles
for ($i = 0; $i < strlen($str); $i++) {
  $char = strtolower($str[$i]); // Convertir le caractère en minuscule pour la comparaison
  if (in_array($char, $vowels)) { // Vérifier si le caractère est une voyelle
    echo $str[$i];
  }
}
?>
