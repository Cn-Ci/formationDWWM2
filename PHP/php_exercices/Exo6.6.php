Exo 6.6
<?php
$tab[0] = 1;
$tab[1] = 1;

for ($i=2;$i<=7;$i++){
    $tab[$i] = $tab[$i -1] + $tab[$i -2];
    echo $tab[$i] . " ";
}
?>
