<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php 

$notes = [10 ,12 ,8 ,19, 3, 16, 11, 13, 9];
echo "Les notes obtenus sont : ".implode(" ",$notes);
// implode retourne un string à partir d'un tableau du deuxieme argument, avec comme délimitateur le premier argument

$total = array_sum($notes);
// array_sum retourne la somme d'un tableau
$moyenne =  round($total/count($notes),2);
echo "\nSa moyenne générale est donc de : $moyenne";
