<?php 

include_once ('Employe.php');
include_once ('Ouvrier.php');
include_once ('Cadre.php');
include_once ('Patron.php');


$ouvrier1 = new Ouvrier;
$ouvrier1->setMatricule(1)->setNom('Par')->setPrenom('Rane')->setDate('01/01/1990')->setEntree('2010-01-01');
echo $ouvrier1->sePresenter(), $ouvrier1;
echo "\n le salaire est : "  . $ouvrier1->getSal() . "\n \n" ;


$ouvrier2 = new Ouvrier;
$ouvrier2->setMatricule(2)->setNom('Per')->setPrenom('Rene')->setDate('02/01/1991')->setEntree('2015-01-01');
echo $ouvrier2->sePresenter(), $ouvrier2;
echo "\n le salaire est : "  . $ouvrier2->getSal() . "\n \n" ;



$cadre1 = new Cadre;
$cadre1->setMatricule(3)->setNom('Pir')->setPrenom('Rine')->setDate('03/01/1992')->setIndice(1);
echo $cadre1->sePresenter(), $cadre1;
echo "le salaire est : "  . $cadre1->getSal() . "\n \n" ; 

$cadre2 = new Cadre;
$cadre2->setMatricule(4)->setNom('Por')->setPrenom('Rone')->setDate('04/01/1992')->setIndice(2);
echo $cadre2->sePresenter(), $cadre2;
 echo "le salaire est : "  . $cadre2->getSal() . "\n \n" ;



$patron1 = new Patron;
$patron1->setMatricule(5)->setNom('Pur')->setPrenom('Rune')->setDate('05/01/1993')->setCa(10000)->setCap(10);
echo $patron1->sePresenter(), $patron1;
echo "\n le salaire est : " . $patron1->getSal() . "\n \n" ;

$patron2 = new Patron;
$patron2->setMatricule(6)->setNom('Pyr')->setPrenom('Ryne')->setDate('06/01/1993')->setCa(20000)->setCap(20);
echo $patron2->sePresenter(), $patron2;
echo "\n le salaire est : "  . $patron2->getSal() . "\n \n" ;


$dateTime = new DateTime();
$dateDuJour = $dateTime->format('d/m/Y');