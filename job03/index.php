<?php
$Boolean = true;
$Integer = 10;
$String = "LaPlateforme";
$Float = 5.5;

echo "Contenu de la variable myBoolean : " . $Boolean . "<br>";
echo "Contenu de la variable myInteger : " . $Integer . "<br>";
echo "Contenu de la variable myString : " . $String . "<br>";
echo "Contenu de la variable myFloat : " . $Float . "<br>";
?>

<?php
// Variables à afficher
$myBool = true;
$myInt = 10;
$myString = "LaPlateforme";
$myFloat = 5.5;

// Création du tableau
echo "<table>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>boolean</td><td>myBool</td><td>" . ($myBool ? "true" : "false") . "</td></tr>";
echo "<tr><td>integer</td><td>myInt</td><td>$myInt</td></tr>";
echo "<tr><td>string</td><td>myString</td><td>$myString</td></tr>";
echo "<tr><td>float</td><td>myFloat</td><td>$myFloat</td></tr>";
echo "</tbody></table>";
?>
