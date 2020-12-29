Exo 7.3 
<?php
$i = 0;

$tab [0] = 12;
$tab [1] = 15;
$tab [2] = 9;
$tab [3] = 10;

for ($i = 0; $i <= 3 ; $i++) {
$temp = ($tab[$i]);
$tab[$i] = $tab[3];
$tab[3] = $temp;
$i++;

print_r($tab);
}
?>