<h1>Exercice 10</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

// Retourne le nombre de billet/pièces de 10, 5, 2 et 1 € selon le montant à payer, et le montant versé
function rendreMonnaie($aPayer, $verse){
    if ($verse < $aPayer){
        return "Il manque ".$aPayer-$verse." €";
    } else {
        $aRendre = $verse - $aPayer;
        $dix = intdiv($aRendre,10);
        // intdiv permet de garder la partie entiere d'une division
        $aRendre = $aRendre - 10 *$dix;
        $cinq = intdiv($aRendre,5);
        $aRendre = $aRendre - 5 * $cinq;
        $deux = intdiv($aRendre,2);
        $aRendre = $aRendre - 2 * $deux;
        return "$dix billets de 10 € - $cinq billet de 5€ - $deux pièce de 2€ - $aRendre pièce de 1 €";
    }
}

$aPayer = 152;
$verse = 200;

echo "Montant à payer : $aPayer €<br>";
echo "Montant versé : $verse €<br>";
echo "Reste à payer : ".$verse - $aPayer." €<br>";
echo "**********************<br>";
echo "Rendu de monnaie :<br>";
echo  rendreMonnaie($aPayer,$verse);