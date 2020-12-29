<?php

include_once('Service.php');
include_once('Employe.php');

$service = new Service(1, "Royauté", "Dijon");
$service1 = new Service(2, "Principauté", "Rouen");
$service2 = new Service(3, "Monarque", "Orlean");
$service3 = new Service(4, "Classité", "Versaille");

echo $service->sePresenter();
echo $service1->sePresenter();
echo $service2->sePresenter();
echo $service3->sePresenter();

echo $service, $service1, $service2, $service3 ;





$employe = new Employe(2000, "Bicha", "Maurica", "President Americaina", "27/10/2000", 7777.1, 71, $service->getNoserv(), 3001, 103);
$employe1 = new Employe(2001, "Biche", "Maurice", "President Americaine", "27/10/2001", 7777.2, 72, $service1->getNoserv(), 3002, 103);
$employe2 = new Employe(2002, "Bichi", "Maurici", "President Americaini", "27/10/2002", 7777.3, 73, $service2->getNoserv(), 3003, 103);
$employe3 = new Employe(2003, "Bicho", "Maurico", "President Americaino", "27/10/2003", 7777.4, 74, $service3->getNoserv(), 3004, 103);

echo $employe->sePresenter();
echo $employe1->sePresenter();
echo $employe2->sePresenter();
echo $employe3->sePresenter();

echo $employe, $employe1, $employe2, $employe3 ;



