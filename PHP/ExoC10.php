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
