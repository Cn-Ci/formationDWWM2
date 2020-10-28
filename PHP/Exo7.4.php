Exo 7.4 
<?php

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");
   }
$sup = readline(" Saisir une valeur à supprimer ");
unset($tab[$sup-1]);
print_r($tab);
?>

