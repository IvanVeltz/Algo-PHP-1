<h1>Exercice 3</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
function palindrome($phrase) {
    // Enlever les espaces et mettres en minuscule
    $phrTest = strtolower(str_replace(" ","",$phrase));

    // Comparer $phrTest avec son inverse
    if ($phrTest == strrev($phrTest)) {
        echo 'La phrase "'.$phrase.'" est un palidrome"'; 
    } else {
        echo 'La phrase "'.$phrase.'" n\'est un palidrome"';
    }

}

$phrase = 'Engage le jeu que je le gagne';

echo palindrome($phrase);
