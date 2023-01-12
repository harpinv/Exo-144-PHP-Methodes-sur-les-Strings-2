<?php
// exo 1
$chaine = "Aujourd'hui il fait -1000 degrés";
echo addslashes($chaine);

// exo 2
$boite = "Ma boite rouge";
echo strtoupper($boite);
echo ucfirst($boite);
echo ucwords($boite);

// exo 3
$timbre = "UN TIMBRE MULTICOLOR";
echo strtolower($timbre);
echo lcfirst($timbre);

// exo 4
$longht = "Je suis assis sur une chaise jaune en bois qui grince, je fais mes exercice de math et je mange des biscuit et bois un café";
echo str_word_count($longht);

// exo 5
$melange = "J'ai un assiette dans mon sac";
$maPhrase = explode(" ", $melange);
foreach ($maPhrase as $mot) {
    echo "$mot <br>";
}

// exo 6
$mots = ["boisson", "nourrir", "vivre", "poisson", "dormir", "ranger", "monter", "apprendre"];
echo implode(",", $mots);

// exo 7
$table = "tablette";
echo strrev($table);
echo str_shuffle($table);

// exo 8
$hello = "Hello, nous apprenons PHP";
echo $hello;
echo strip_tags($hello);

// exo 9
$pipe = "les meilleurs veux";
$taille = strlen($pipe);
if($taille < 500) {
    echo "|$pipe";
}
else {
    echo $pipe;
}

// exo 10
$ordi = "mon ordinateur";
$tableau = str_split($ordi);
foreach($tableau as $item) {
    echo "$item <br>";
}

// exo 11
$bonbon = "j'adore les bonbon";
$bonbon = str_replace('bonbon', 'world', $chaine);

$test = "j'ai fais un bon test";
$position = strpos($test, "test");
if($position !== false) {
    echo "La chaine 'test' n'est pas présente";
}
else {
    echo "La chaine 'test' est présente";
}

// exo 12
$pain = "vous avais mangé mon pain";
$vie = "vous";
$pose = strpos($pain, $vie);
if($pose === 0) {
    echo "La chaine '$vie' est  présente en début de chaine !";
}

// exo 13
$tarte = "j'ai mangé une tarte au sucre";
$sucre = "sucre";
$piste = strpos($tarte, $sucre);
if($piste === strlen($tarte) - strlen($sucre)) {
    echo "La chaine '$sucre' est présente en fin de chaine !";
}
