Exo 7.1 
<?php 

for ($i=0;$i<=2;$i++){
 $tab[$i] = readline(" Saisir une valeur ");
}
$done = false; 
$i = 1;
do {
    if ($tab[$i] != $tab[($i-1)]+1) { 
        $done = true;
            break;
            }
            $i++;
}while ($i <= 2);
    if ($done) {
    echo "non consécutif";   
    }
    else
    {
            echo "consécutif";
        }
?>

Exo 7.4 
<?php

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");
   }
$sup = readline(" Saisir une valeur à supprimer ");
unset($tab[$sup-1]);
print_r($tab);
?>

