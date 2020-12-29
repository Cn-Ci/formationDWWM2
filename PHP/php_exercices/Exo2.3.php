Exo 2.3
<?php 
$a = 100;                       /* prix HT */
$b = 3;                         /* nb d'articles */
$d = 0.20;                      /* TVA */
$c = $a * $b + ( 1 + $d );      /* prix TTC */

echo "le prix HT est $a, le nb d'articles est $b, le prix TTC est $c, la TVA est $d" 
?>
