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