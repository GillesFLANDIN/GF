<?php

//déclaration d'une variable
$mavariable = "Je suis une variable";
//déclaration d'une constante
const MA_CONST = "Je suis une constante!";

//équivalent du document.write
echo($mavariable.'<br>');
echo(MA_CONST);
//une concaténation en php c'est avec des points et non des +

//un tableau
$tableau = ["Pierre", "Paul", "Jack"];
//il n'y a pas de console.log() pour tester dans le PHP on utilise var_dump();
var_dump($tableau);



for($index = 0; $index < 3; $index++) {
    echo $tableau[$index].'<br>';
}

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 10)
{
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

$age = 8;

if ($age <= 12)
{
    echo "Salut gamin !";
}

$animal = [
        "animal" => "chien",
        "nom" => "medor",
        "race" => "labrador"
    ];
    
var_dump($animal);

$array = array( 'premier' => 'N° 1', 'deuxieme' => 'N° 2', 'troisieme' => 'N° 3');

//boucle foreach pour les tableaux
foreach( $array as $key => $value ) {
  echo 'Cet élément a pour clé "' . $key . '" et pour valeur "' . $value . '"<br />';
}
//ici on peut récupéré la valeur que l'utilisateur à rentré par le name
//pour récupérer une donnée dans une base et l'affiche on va utiliser un $_GET et pour intéragir entre un formulaire phtml et la page php on récupère les valeurs entrées dans le formulaire avec $_POST

//condition si il y'a bien une valeur rentrée dans le formulaire on récup et affiche les valeurs que l'utilisateur à entré
//empty() = vide
//isset() = une valeur non null
if(empty($_POST)){
   //normalement on lui dit qu'il affiche le formulaire
}else{
    //il affichera le resultat
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    
}
//ICI ON DIRA QU ON AGIT SUR NOTRE PHTML
include 'test.phtml';//il gère l'affichage de du HTML
?>