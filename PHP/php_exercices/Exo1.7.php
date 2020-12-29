Exo 1.7
<?php
$a = 1;
$b = 2;
$c = 3;
$d = $a;
$a = $c;
$c = $b;
$b = $d;

echo "A est devenu C = $a, B est devenu A = $b, et C est devenu B =$c";
?>

