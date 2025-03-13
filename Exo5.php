<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$montantFranc = 10;

// Converti un montant en franc en euro à deux decimal
function convertFrEuro($fr){
    return round($fr * 6.55957,2);
    // round permet d'arrondir à deux décimal
}

echo convertFrEuro($montantFranc);