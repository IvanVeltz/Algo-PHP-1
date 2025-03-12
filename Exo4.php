<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
function palindrome($phrase) {
    // Enlever les espaces et mettres en minuscule
    $phrTest = strtolower(str_replace(" ","",$phrase));

    // Comparer $phrTest avec son inverse
    if ($phrTest == strrev($phrTest)) {
        return "La phrase « $phrase » est un palindrome"; 
    } else {
        return "La phrase « $phrase » n'est un palindrome";
    }

}

$phrase = 'Engage le jeu que je le gagne';

echo palindrome($phrase);
