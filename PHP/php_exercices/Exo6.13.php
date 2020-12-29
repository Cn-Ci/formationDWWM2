Exo 6.13
<?php 
$max = 1;

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");

    if ( $i == 1 || $tab[$i] > $max) {$max = $tab[$i];}
     
}
echo $max . " est la plus grande valeur";
?>

