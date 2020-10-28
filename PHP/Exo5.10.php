Exo 5.10 
<?php 
$f1 =1;
$f2 = 1;
$f3 = 1;

$partant = readline("Saisir le nb de chevaux partant ");
$joue = readline("Saisir le nb de chevaux joués ");
for ($i = 1; $i <= $partant; $i++){
    $f1 = $f1 * $i;
    $fpartant = $f1;
}for ($i = 1; $i <= $partant - $joue; $i++){
    $f2 = $f2 * $i;
    $fpartant - $fjoue = $f2;
}for ($i = 1; $i <= $joue; $i++){
    $f3 = $f3 * $i;
    $fjoue = $f3;
}$x = $f1 / $f2;
$y = $f1 / ($f2 *$f3);
echo "il y a $x chance dans l'ordre, et $y chance dans le desordre";
?>
