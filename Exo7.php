<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser</p>

<h2>Résultat</h2>

<?php

// Retourne l'age et la categorie suivant l'age d'une personne, retourne un messaged d'erreur si l'age n'est pas un entier
function categorie($age){
    if(gettype($age) == "integer"){
        switch(true){
            case(12 <= $age): 
                return "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
                break;
            case(10 <= $age): 
                return "L'enfant qui a $age ans appartient à la catégorie « Minime »";
                break;
            case(8 <= $age): 
                return "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
                break;
            case(6 <= $age): 
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