<?php 

include_once ('Personne.php');
include_once ('Developpeur.php');
include_once ('Manager.php');


$developpeur1 = new Developpeur(1, "Par", "Rane", "a@a.fr", 6123, 1500, "front");
echo $developpeur1->sePresenter(), $developpeur1 ;
echo $developpeur1->calculerSalaire() . "\n" ;

$developpeur2 = new Developpeur(2, "Per", "Rene", "e@e.fr", 6234,  2500, "back");
echo $developpeur2->sePresenter(), $developpeur2 ;
echo $developpeur2->calculerSalaire() . "\n" ;

$manager1 = new Manager(3, "Pir", "Rine", "i@i.fr", 6345, 3500, "Informatique");
echo $manager1->sePresenter(), $manager1 ;
echo $developpeur2->calculerSalaire() . "\n" ;

$manager2 = new Manager(4, "Por", "Rone", "o@o.fr", 6456, 4500, "Direction");
echo $manager2->sePresenter(), $manager2 ;
echo $manager2->calculerSalaire() . "\n" ;

