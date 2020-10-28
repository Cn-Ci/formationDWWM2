<?php 

include_once ('Personne.php');
include_once ('Utilisateur.php');
include_once ('Profil.php');

$profil1 = new Profil( 1, "CP", "Chef de projet");
$profil2 = new Profil( 2, "MN", "Manager");
$profil3 = new Profil( 3, "DP", "Directeur de projet");
$profil4 = new Profil( 4, "DRH", "directeur des ressources humaines");
$profil5 = new Profil( 5, "DG", "Directeur general");

$personne1= new Personne(1, "Par", "Rane", "a@a.fr", 612, 1000);
$personne2= new Personne(2, "Per", "Rene", "e@e.fr", 623, 1001);
$personne3= new Personne(3, "Pir", "Rine", "i@i.fr", 634, 1002);

$utilisateur1 = new Utilisateur($personne1, $profil1,"bab", "***", "informatique");
$utilisateur2 = new Utilisateur($personne2, $profil2,"beb", "***", "logisitique");
$utilisateur3 = new Utilisateur($personne3, $profil5,"bib", "***", "Manutention");




echo $utilisateur1->sePresenter(), $utilisateur1 ;
echo $utilisateur2->sePresenter(), $utilisateur2 ;
echo $utilisateur3->sePresenter(), $utilisateur3 ;

echo $utilisateur1->calculerSalaire() . "\n" ;
echo $utilisateur2->calculerSalaire() . "\n" ;
echo $utilisateur3->calculerSalaire() . "\n" ;











