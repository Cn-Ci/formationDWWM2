<?php

include_once("Voiture.php");

$v1 = new Voiture("RENAULT", "CLIO");
$v2 = new Voiture("RENAULT", "MEGANE");
$v3 = new Voiture("RENAULT", "KANGOO");

$v11 = new Voiture("CITROEN", "C3");
$v22 = new Voiture("CITROEN", "C4");
$v33 = new Voiture("CITROEN", "C5");

$v111 = new Voiture("FORD", "FOCUS");
$v222 = new Voiture("FORD", "FIESTA");
$v333 = new Voiture("FORD", "MONDEO");

$voitures = [$v1, $v2, $v3, $v11, $v22, $v33, $v111, $v222, $v333];
$voituresRetournees = [];
foreach ($voitures as $voiture) {
    if(!empty($_GET) && isset($_GET["marque"]) && $_GET["marque"] == $voiture->marque){
        $voituresRetournees[] = $voiture;
    } 
}
// affichage
echo "<option value=''>-- Sélectionnez un modèle --</option>";
foreach ($voituresRetournees as $voiture) {
    echo "<option value='" . $voiture->modele . "'>" . $voiture->modele . "</option>";
}