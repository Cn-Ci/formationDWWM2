Exo 6.1
<?php
for ($i=1;$i<=7;$i++){
    $tab[$i] = 0;
    echo $tab[$i] . " ";
}
?>

Exo 6.2 
<?php 
$tab[0] = 'a';
$tab[1] = 'e';
$tab[2] = 'i';
$tab[3] = 'o';
$tab[4] = 'u';
$tab[5] = 'y';
echo $tab[0] . " ", $tab[1] . " ", $tab[2] . " ", $tab[3] . " ", $tab[4] . " ", $tab[5];
?>

Exo 6.3 
<?php

for ($i=1;$i<=3;$i++){
    $note[$i] = readline("Saisir une note ");
} 
foreach ($note as $key => $value) {
    echo "$key => $value \n";
}
?>

Exo 6.4
<?php
for ($i=1;$i<=5;$i++){
    $tab[$i] = $i * $i;
    echo $tab[$i] . " ";
}
?>

Exo 6.5 
<?php
$tab[0] = 1;
for ($i=1;$i<=6;$i++){
    $tab[$i] = $tab[$i -1] +2;
    echo $tab[$i] . " ";
}
?>

Exo 6.6
<?php
$tab[0] = 1;
$tab[1] = 1;

for ($i=2;$i<=7;$i++){
    $tab[$i] = $tab[$i -1] + $tab[$i -2];
    echo $tab[$i] . " ";
}
?>

Exo 6.7 
<?php 
$somme = 1;

for ($i=1;$i<=3;$i++){
    $note[$i] = readline(" Saisir une note ");
    echo $note[$i];
    $somme = $somme + $note[$i];
}   
foreach ($note as $key => $value) {
    echo " $key => $value \n";
}
    $moyenne = $somme/9;
echo "la moyenne est $moyenne"
?>

Exo 6.8 
<?php
$pos = 0;
$neg = 0;


for ($i=1;$i<=3;$i++){
    $tab[$i] = readline("Saisir une note ");
        if ($tab[$i] >0){
        $pos++;
            }if ($tab[$i] < 0){
            $neg++;   
        }
        echo "il y a $pos de nb positif ";
        echo "il y a $neg de nb negatif ";
}
?>

Exo 6.9
<?php 
$somme = 0;

for ($i=1;$i<=3;$i++){
    $tab[$i] = readline("Saisir une valeur ");
    $somme = $somme + $tab[$i];
}
echo "la somme est $somme";
?>

Exo 6.10 
<?php 
$tab1[0] = 5;
$tab1[1] = 7;
$tab1[2] = 3;

$tab2[0] = 8;
$tab2[1] = 4;
$tab2[2] = 1;

for ($i=0;$i<=2;$i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
    echo $tab3[$i] . " ";
}
?>

6.11
<?php
$tab1[0] = 5;
$tab1[1] = 7;
$tab1[2] = 3;

$tab2[0] = 8;
$tab2[1] = 4;
$tab2[2] = 1;

for ($i=0;$i<=2;$i++) {
    for ($j=0;$j<=2;$j++) {
        $tab3[$i] = $tab3[$i] + $tab1[$i] * $tab2[$j];
    }
    echo $tab3[$i] . " ";
}
?>

6.12
<?php 
for ($i=0;$i<=2;$i++){
    $tab2[$i] = readline("Saisir une valeur ");
    $tab1[$i] = $tab2[$i] +1;
echo $tab2[$i] . " ";
}  
foreach ($tab1 as $key => $value) {
    echo "$key => $value \n";
}
?>

Exo 6.13
<?php 
$max = 1;

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");

    if ( $i == 1 || $tab[$i] > $max) {$max = $tab[$i];}
     
}
echo $max . " est la plus grande valeur";
?>

exo 6.14
<?php
$somme = 0;
$cpt = 0;

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");
    $somme = $somme + $tab[$i];
}
$moyenne = $somme / $i;
echo "la moyenne de la classe est $moyenne ";
for ($j=0;$j<=2;$j++){
    if ($tab[$j] > $moyenne){
        $cpt++; 
    }
} 
echo  $cpt. " note est superieur à la moyenne";
?>

