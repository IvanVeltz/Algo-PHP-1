<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :</p>

<h2>Résultat</h2>

<?php

$nombre = 8;

echo "Table de $nombre :<br>";
for ($i = 1; $i <= 10;$i++){
    echo "$i * $nombre = ".$i*$nombre."<br>";
}

echo "Table de $nombre :<br>";
$i = 1;
while ($i <= 10) {
    echo "$i * $nombre = ".$i*$nombre."<br>";
    $i++;
}