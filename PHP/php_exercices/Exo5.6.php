Exo 5.6
<?php 
function fact($a)
{
    $f = 1;
    for ($i = 1; $i <= $a; $i++){
        $f = $f * $i;                           /* factorielle est egale à la factorielle multiplier par i */
    }
    return $f;
}   
    $f = readline("Saisir un nb ");             /* on demande de donner f */
    $a = fact($f);                              /* on utilise la fonction fact */
    echo "la factorielle de $f est $a";
?>
