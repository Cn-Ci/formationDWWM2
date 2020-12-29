Exo 9.3 
<?php
 function countWord($string){
    return str_word_count($string);
}
$phrase = readline(" Saisir une phrase ");
echo countWord($phrase);
?>

Exo 9.4 
<?php

$phrase = readline(" Saisir une phrase ");
$tab = array('a','e','i','o','u','y');
$cpt = 0;
foreach($tab as $voyelle){
    $cpt += substr_count(strtolower($phrase), $voyelle);
}
echo "il y a $cpt voyelles";
?>
