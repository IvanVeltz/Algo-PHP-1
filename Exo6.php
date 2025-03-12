<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

function facture($quantite, $prixHT, $tva){
    return $quantite*$prixHT * (1 + $tva);
}

$prix = 9.99;
$quantite = 5;
$tva = 0.2;

echo "Prix unitaire de l'article : $prix €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : ".facture($quantite, $prix, $tva)." €";
