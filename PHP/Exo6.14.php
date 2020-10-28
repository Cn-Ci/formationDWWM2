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

