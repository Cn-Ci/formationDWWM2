Exo 5.1 
<?php
$a = 2;

while ($a >= 1 && $a <= 3){
    echo "BRAVO !";
?>

Exo 5.2 
<?php 
$a = 5;

while ($a <= 10 || $a >= 20){
        if ($a < 10) echo ("Plus grand ");
        elseif ($a > 20) echo ("plus petit ");
    $a = readline(" Saisir un nb ");} 
    echo "BRAVO !"
    
?>

Exo 5.3
<?php 
$a = 12;

for ($i = 1; $i <= 10; $i++) {
    echo $a + $i."\n";
}
?>

Exo 5.4 
<?php
$a = 2;

for ($i = 1; $i <= 10; $i++) {
    $r = $i * $a;
    echo "le resultat $r est egale à $a fois $i \n";
}
?>

Exo 5.5
<?php 
$a = 5;

for ($i = 1; $i <= $a; $i++) {
    $r = $r + $i;
    echo "la somme de $a est $r \n";
}
?>

Exo 5.6
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

Exo 5.7 
<?php 
$p = 1;
$i = 1;

for ($i = 1; $i <= 3; $i++){ 
    $a = readline("Saisir un nb ");
    if ($i == 1){ 
        $max = $a;
    }elseif( $a > $max ){
        $max = $a;
        $p = $i;
    }        
}

    echo "le plus grand nombre est $max, la position est $p";        
?>

Exo 5.8
<?php 
$p = 1;
$i = 1;

do {
    $a = readline(" Saisir un nb "); 
        if ($i == 1 || $a > $max){
           $max = $a;
           $p = $i;
           $i++; 
           }
           
        }while ($a != 0);
        echo "le plus grand nombre est $max, la position est $p";      
?>

Exo 5.9
<?php 
$somme = 0;

do {
    $prix = readline(" Saisir le montant d'un article ");
    $somme = $somme + $prix;
    echo "Vous devez payer $prix euros, vous devez $somme euros ";
}while ($prix != 0);
    $argent = readline("Saisir cb vous donnez ");
    $rendu = $argent - $somme;
    $b10 = $rendu / 10; 
    $b5 = ($rendu % 10) / 5; 
    $p1 = ($rendu % 5);
    echo "Voici votre monnaie ". intval($rendu) ."\n il y a ". intval($b10) ." billet de 10 euros, \n il y a ". intval($b5) ." billet de 5 euros, \n il y a " . intval($p1) ." piece de 1 euros ";

    ?>

Exo 5.10 
<?php 
$f1 =1;
$f2 = 1;
$f3 = 1;

$partant = readline("Saisir le nb de chevaux partant ");
$joue = readline("Saisir le nb de chevaux joués ");
for ($i = 1; $i <= $partant; $i++){
    $f1 = $f1 * $i;
    $fpartant = $f1;
}for ($i = 1; $i <= $partant - $joue; $i++){
    $f2 = $f2 * $i;
    $fpartant - $fjoue = $f2;
}for ($i = 1; $i <= $joue; $i++){
    $f3 = $f3 * $i;
    $fjoue = $f3;
}
$x = $f1 / $f2;
$y = $f1 / ($f2 *$f3);
echo "il y a $x chance dans l'ordre, et $y chance dans le desordre";
}
?>