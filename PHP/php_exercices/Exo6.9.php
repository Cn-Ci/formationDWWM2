Exo 6.9
<?php 
$somme = 0;

for ($i=1;$i<=3;$i++){
    $tab[$i] = readline("Saisir une valeur ");
    $somme = $somme + $tab[$i];
}
echo "la somme est $somme";
?>
