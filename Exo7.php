<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser</p>

<h2>Résultat</h2>

<?php

function categorie($age){
    if(gettype($age) == "integer"){
        switch($true){
            case(6 <= $age && $age <= 7): 
                return "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
                break;
            case(8 <= $age && $age <= 9): 
                return "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
                break;
            case(10 <= $age && $age <= 11): 
                return "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
                break;
            case(12 <= $age): 
                return "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
                break;
            default: return "L'enfant est trop jeune";
            }
    } else {
        return "Indiquez un nombre entier";
    }
}

$age = 10;

echo categorie($age);