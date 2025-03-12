<h1>Exercice 10</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

function rendreMonnaie($apayer, $verse){
    if ($verse < $apayer){
        return "Il manque ".$apayer-$verse." €";
    } else {
        $arendre = $verse - $apayer;
        $dix = intdiv($arendre,10);
        $arendre = $arendre - 10 *$dix;
        $cinq = intdiv($arendre,5);
        $arendre = $arendre - 5 * $cinq;
        $deux = intdiv($arendre,2);
        $arendre = $arendre - 2 * $deux;
        return "$dix billets de 10 € - $cinq billet de 5€ - $deux pièce de 2€ - $arendre pièce de 1 €";
    }
}

$apayer = 152;
$verse = 200;

echo "Montant à payer : $apayer €<br>";
echo "Montant versé : $verse €<br>";
echo "Reste à payer : ".$verse - $apayer." €<br>";
echo "**********************<br>";
echo "Rendu de monnaie :<br>";
echo  rendreMonnaie($apayer,$verse);