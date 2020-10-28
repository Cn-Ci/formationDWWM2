<?php

include_once('Batiment.php');
include_once('Maison.php');

$batiment = new Batiment("Roubaix", 123);
$batiment1 = new Batiment("Tourcoing", 345);
$batiment2 = new Batiment("Lille", 567);
$batiment3 = new Batiment("Paris", 789);


$maison = new Maison(5, $batiment->getAdresse(), $batiment->getSuperficie());
$maison1 = new Maison(10, $batiment1->getAdresse(), $batiment1->getSuperficie());
$maison2 = new Maison(15, $batiment2->getAdresse(), $batiment2->getSuperficie());
$maison3 = new Maison(20, $batiment3->getAdresse(), $batiment3->getSuperficie());

echo $batiment->sePresenter(), $batiment;
echo $batiment1->sePresenter(), $batiment1 ;
echo $batiment2->sePresenter(), $batiment2;
echo $batiment3->sePresenter(), $batiment3;


echo $maison->sePresenter(), $maison;
echo $maison1->sePresenter(), $maison1;
echo $maison2->sePresenter(), $maison2;
echo $maison3->sePresenter(), $maison3;

