<h1>Exercice 8</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2>Résultat</h2>

<?php

function imposable($age, $sexe){
    if ($sexe == "F" && 18 <= $age && $age < 35 || $sexe == "H" && $age > 20){
        return "La personne est impossable";
    } else{
        return "La personne est non imposable";
    }
}

$age = 32;
$sexe = "F";

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";
echo imposable($age, $sexe);
