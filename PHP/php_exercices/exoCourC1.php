Exo 1 
<?php
$a = 2;

for ($i = 1; $i <= 10; $i++) {
    $r = $i * $a;
    echo "le resultat $r est egale à $a fois $i \n";
}
?>

Exo 3 
<?php 
function fact($a)
{
    $f = 1;
    for ($i = 1; $i <= $a; $i++){
        $f = $f * $i;
    }
    return $f;
}   
    $f = readline("Saisir un nb ");
    $a = fact($f);
    echo "la factorielle de $f est $a";
?>

Exo 4
<?php

for ($i = 1; $i <= 10; $i++) {
     for ($j = 1; $j <= 10; $j++) {
    $r = $i * $j;
    echo "le resultat $r est egale à $j fois $i \n";
   } 
}
?>

Exo 5 
<?php
for ($i = 0; $i <= 10; $i++) {
     for ($j = 0; $j <= 10 - $i; $j++) {
    echo (10 - $i) ;
} 
}
?>

Exo 6 
<?php
    $j = readline("Saisir un n° jour (01 - 31) ");
    $m = readline("Saisir un n° mois (01 - 12) ");
    $a = readline("Saisir un n° année ( XXXX )");

echo $j . "/" . $m . "/" . $a . " ";

    function bissextile($a) {
        if( (is_int($a%4 == 0)) && (!is_int($a%100 > 0)) || (is_int($a%400 == 0)) ) { 
            echo "$a est bis ";
            return TRUE;
        } else {
            echo "$a n'est pas bis ";
            return FALSE;
        }
    }

    if ( ($j > 31 || $m > 12) || $m == 2 && (bissextile($a) && $j>29) || (!bissextile($a) && $j>28) || ($m == 4 || $m == 6 || $m == 9 || $m == 11 && $j > 30)){
        echo "date non valide";
        } else {echo "date valide";
        }
?>

Exo 7
<?php
$somme = 0;
$max = 0;
$i = 0;


do {
    $nb = readline("Saisir un nb ");
    $somme = $somme + $nb;
    if ($nb == 0) {
        break; 
        }
    if ($nb > $max) {
        $max = $nb;
        }
        if ($i == 0 || $nb < $min)
        {
        $min = $nb;
        }
    $i++;
} while ($nb != 0);

$moyenne = $somme / ($i -1);

$op = readline("Saisir une opération somme , moyenne , max, min, quit \n");

switch ($op) {
    case "somme":
        echo $somme . "est la somme de" . $somme . "+" . $nb;
        break;
    case "moyenne":
        echo $moyenne . " est la moyenne de" . "=" . $somme . "/" . ($i -1);
        break;
    case "max":
        echo $max . "est le maximum";
        break;
    case "min":
        echo $min . "est le minimum" ;
        break;
    case "quit":
        echo "au revoir";
        break;
}
?>

Exo 8 
<?php
$sommei = 0;
$sommej = 0;

for ($i=0;$i<=1;$i++){
    $tabi[$i] = readline(" Saisir le nom de l'eleve i ");
    for ($j=0;$j<=2;$j++){
        $tabj[$j] = readline(" Saisir une note ");
            $sommej = $sommej + $tabj[$j];
       }
       $moyennej = $sommej / $j;
       echo " la moyenne de l'éleve $i est $moyennej";
}
?>

Exo 9 
<?php 

?>

Exo 10
<?php
$phrase = readline(" Saisir une phrase ");
$tab = array('a','e','i','o','u','y');
$cpt = 0;
foreach($tab as $voyelle){
    $cpt += substr_count(strtolower($phrase), $voyelle);
}
echo "il y a $cpt voyelles";
?>

Exo 11
<?php

for ($i=0;$i<=2;$i++){
    $name = readline("Saisir votre nom ");
    $town = readline("Saisir votre ville ");
    $date = readline("Saisir votre année de naissance ");

echo "Bonjour $name, vous etes né(e) en $date et vous vivez à $town \n";
}
?>
