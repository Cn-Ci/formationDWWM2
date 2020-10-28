Exo 9.11
<?php 
$a = readline("Saisir a  ");
$b = readline("Saisir b avec + ou - ");


echo $a . " <= Glup < " . $b . "\n";
{
    $ecart = ($b - $a);
}
echo "Glup = Alea()* $ecart ($a) \n";   
echo rand($b,$a);
