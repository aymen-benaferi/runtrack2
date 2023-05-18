<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro!";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur invalide!";
    }
}
$resultat = calcule(21, '+', 21);
echo "Résultat : " . $resultat;
?>
