exo 9.5 
<?php 

$phrase = readline(" Saisir une phrase ");
$tab = str_split($phrase, 1);
$sup = readline(" Supprimer un caractère ");

$a = count($tab);

for ($i = $sup -1; $i <= $a -2; $i++ ){
$tab[$i] = $tab[$i +1];
}
unset($tab[$a-1] ); 
    print_r($tab);

    