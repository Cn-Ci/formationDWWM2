6.11
<?php
$somme = 0; 

$tab1[0] = 5;
$tab1[1] = 7;
$tab1[2] = 3;

$tab2[0] = 8;
$tab2[1] = 4;
$tab2[2] = 1;

for ($i=0;$i<=2;$i++) {
    for ($j=0;$j<=2;$j++) {
        $tab3[$i] = $tab1[$i] * $tab2[$j];
        $somme = $tab3[$i] + $somme;
            
    }
    
}echo $somme . " ";
?>
