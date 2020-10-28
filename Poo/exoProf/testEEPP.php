<?php 

include_once('Personne.php');
include_once('Etudiant.php');
include_once('Employe.php');
include_once('Professeur.php');

$etudiant1 = new Etudiant(12345, 11, "Macron", "Emma");
$etudiant2 = new Etudiant(56789, 21, "Macronne", "Nuelle");

$employe1 = new Employe(1500, 46, "Norcam", "Amme");
$employe2 = new Employe(2000, 57, "Ennprcam", "Elleun");

$professeur1 = new Professeur("informatique", 1200, 18, "Per", "Rine");
$professeur2 = new Professeur("menage", 1100, 7, "Enir", "Rep");


echo $etudiant1->sePresenter(), $etudiant1;
echo $etudiant2->sePresenter(), $etudiant2;

echo $employe1->sePresenter(), $employe1;
echo $employe2->sePresenter(), $employe2;

echo $professeur1->sePresenter(), $professeur1;
echo $professeur2->sePresenter(), $professeur2;