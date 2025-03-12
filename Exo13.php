<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php 

$notes = [10 ,12 ,8 ,19, 3, 16, 11, 13, 9];
echo "Les notes obtenus sont : ".implode(" ",$notes);
$total = array_sum($notes);
$moyenne =  round($total/count($notes),2);
echo "\nSa moyenne générale est donc de : $moyenne";
