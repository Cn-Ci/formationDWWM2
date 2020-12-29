<?php 
function facto($a)
{
    $a = 1;
    for ($i=2; $i<=$a ; $i++){
        $a = $a * $i;
    }
    return $a;
}
$nombre = readline("Saisir un nombre pour connaitre sa factorielle : ");
echo facto($nombre);