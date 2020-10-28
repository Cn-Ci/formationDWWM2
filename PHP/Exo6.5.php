Exo 6.5 
<?php
$tab[0] = 1;
for ($i=1;$i<=6;$i++){
    $tab[$i] = $tab[$i -1] +2;  /* tab 0 = 1 +2 */
    echo $tab[$i] . " ";
}
?>
