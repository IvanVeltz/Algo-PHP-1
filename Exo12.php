<h1>Exercice 11</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Résultat</h2>

<?php


function bonjour($prenom, $langue){
    switch ($langue) {
        case 'FRA':
            return "Bonjour $prenom";
            break;
        case 'ESP':
            return "Hola $prenom";
            break;
        case 'ENG':
            return "Hello $prenom";
            break;
        default:
            break;
    }   
}


$tableau = [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Maric-Claire" => "ENG"
];

ksort($tableau);

foreach($tableau as $prenom => $langue){
    echor bonjour($prenom, $langue)."\n";
}